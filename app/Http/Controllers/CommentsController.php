<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use\App\Tweet;
use\App\Comment;


class CommentsController extends Controller
{
    //
    public function savecomment(Request $request){

            $user = Auth::user();
            $userId = $user->id;
            $newComment = $request->comment;
            $tweet_Id = $request->tweet_id;

            $commentModel = new Comment();
            $commentModel->user_id = $userId;
            $commentModel->tweet_Id = $tweet_Id;
            $commentModel->comments = $newComment;
            $commentModel->save();

            return redirect('/home');
    }
    public function update(Request $request, $id){

        //


        $comment = Comment::find($id);

        $comment->id = $request->id;
        $comment->comments = $request->comment;

        $comment->save();

        return redirect()->route( 'home' );
    }
    public function editcomment($id){


              $comment = Comment::find( $id );
              return view ('editcomment')->withComment( $comment );

    }
    public function destroy($id)
    {
        //
        $comment = Comment::find( $id );
        $comment->delete();

        return redirect()->route( 'home' );
    }
};

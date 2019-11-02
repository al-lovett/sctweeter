<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use\App\Tweet;
use\App\Comment;

class TweetsController extends Controller
{

    public function index()
    {
        $tweetModel = new Tweet();
        $tweets = $tweetModel->with('comment')->orderBy('created_at','desc')->get();


        // $users = User=all();
        return view('home', compact('tweets'));
        //


    }
    public function saveTweet(Request $request){

        $user = Auth::user();
        $userId = $user->id;
        $newTweet = $request->tweet;

        $tweetModel = new Tweet();
        $tweetModel->user_id = $userId;
        $tweetModel->tweet = $newTweet;
        $tweetModel->save();
        $tweet = Tweet::orderBy('created_at', 'desc');
        return redirect('/home');
    }


public function editTweet($tweetId){  // edittweet/{id}
        // DD($tweetId);
        $user = Auth::user();
        $userId = $user->id;

        $tweet = Tweet::find($tweetId);


        // $tweetModel -> $edittweet;
        //->id = $tweetId;
        // $tweetId = $id;
        // $tweetmodel->editTweet;
        // $edittweet = Tweet::all();
         return view('edittweet')
         ->withTweet($tweet);


}
public function update(Request $request, $tweetId){  // edittweet/{id}

       // DD($request);
        $user = Auth::user();



        $tweetModel = Tweet::find($tweetId);
        $tweetModel->tweet = $request->tweet;
        $tweetModel->save();

        return redirect('/home');
//     $user = Auth::user();
//     $userId = $user->id;
//     // $edittweet = $request->
//     // $edittweet = Tweet::all();
//      return view('edittweet/{id}', compact('tweets'));
}
public function destroy($tweetid)
        {
            //
            $tweet = Tweet::find( $tweetid );
            $tweet->delete();

            return redirect()->route( 'home' );
        }
}


// public function editTweet(Request $request){
// }
//     var_dump(all);


    // $user = Auth::usedd();
    // $userId = $user->id;
    // $newComment = $request->comment;
//     $tweet_Id = $request->tweet_id;
//
//     $commentModel = new Comment();
//     $commentModel->user_id = $userId;
//     $commentModel->tweet_Id = $tweet_Id;
//     $commentModel->comments = $newComment;
//     $commentModel->save();
//
//     return redirect('/home');
// }}

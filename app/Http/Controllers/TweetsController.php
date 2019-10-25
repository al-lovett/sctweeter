<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use\App\Tweet;
use\App\Comment;

class TweetsController extends Controller
{
    public function saveTweet(Request $request){

        $user = Auth::user();
        $userId = $user->id;
        $newTweet = $request->tweet;

        $tweetModel = new Tweet();
        $tweetModel->user_id = $userId;
        $tweetModel->tweet = $newTweet;
        $tweetModel->save();
        return redirect('/home');
    }

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

public function editTweet($tweetId){  // edittweet/{id}
    $user = Auth::user();
    $userId = $user->id;
    //$tweetModel = $tweetId;
    // $tweetModel -> $edittweet;
    //->id = $tweetId;
    // $tweetId = $id;
    // $tweetmodel->editTweet;
    // $edittweet = Tweet::all();
     return view('edittweet');

}
// public function update(Request $request){  // edittweet/{id}
//     $user = Auth::user();
//     $userId = $user->id;
//     // $edittweet = $request->
//     // $edittweet = Tweet::all();
//      return view('edittweet/{id}', compact('tweets'));
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

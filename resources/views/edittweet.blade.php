@extends('layouts.app')

@section('content')


<div class="container-fluid" id="updatetweet">
    <h1> Update Sapientia Commutationem "Your Widsom"</h1>
    <form class="" action="/editTweet/{{$tweet->id}}/edit" method="post">
        @csrf
        <textarea name="tweet" rows="8" cols="80">{{ $tweet->tweet }}</textarea><br />

        <button class="btn btn-primary"type="submit" name="button">Update SCTweet</button>
    </form>
    <br>
    <form method="POST" action="{{ route( 'tweet.destroy', $tweet->id ) }}">
      @csrf
        <input type="submit" class="btn btn-primary" name="delete" value="Delete Tweet">
    </form>

</div>


@endsection

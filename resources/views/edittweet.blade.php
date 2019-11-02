@extends('layouts.app')

@section('content')


<div class="card-body">
    <h1> Update Tweet</h1>
    <form class="" action="/editTweet/{{$tweet->id}}/edit" method="post">
        @csrf
        <textarea name="tweet" rows="8" cols="80">{{ $tweet->tweet }}</textarea><br />

        <button type="submit" name="button">Update SCTweet</button>
    </form>
    <form method="POST" action="{{ route( 'tweet.destroy', $tweet->id ) }}">
      @csrf
        <input type="submit" name="delete" value="Delete Tweet">
    </form>

</div>


@endsection

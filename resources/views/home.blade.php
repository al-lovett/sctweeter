@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- <div class="row justify-content-center"> -->
        <div class="">
            <div class="">
                <div class="card-header">Dashboard
                    <form class="" action="/tweet" method="post">
                        @csrf
                        <textarea name="tweet" rows="10" cols="80"></textarea><br />

                        <button class="btn btn-success"type="submit" name="button">SCTweet Now</button>
                    </form>

                    <br>

                    <div class="">
                    ScTweeter    @foreach($tweets as $tweet)
                            {{$tweet->tweet}} <br>

                        <h4>Comments</h4>
                            @foreach($tweet->comment as $comment)
                                {{  $comment->comments }}
                                <a class="badge badge-primary" type="submit" href="/editcomment/{{$comment->id}}/edit">Edit Comment</a>
                                <br>



                        @endforeach
                        <div class="">
                            <form action="/comment" method="post">
                                @csrf
                                <input type="hidden" name="tweet_id" value="{{ $tweet->id}}"><br>
                                    <textarea name="comment"> </textarea><br>
                                <button class="btn btn-primary" type="submit">Comment Below SCTweet</button>
                            </form>

                            <form action="/editTweet/{{$tweet->id}}/edit" method="get">
                                <input type="hidden" name="tweetId" value="{{$tweet->id}}">
                                <button class="btn btn-primary"type="submit">Edit SCTweet</button>
                            </form>


                        </div>
                    @endforeach
                    <!-- test delete -->

                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        @endsection
                        <a id="userprofile" class="badge badge-primary" href="{{ url('/profiles') }}">User Profile Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

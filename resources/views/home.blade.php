@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard
                    <form class="" action="/tweet" method="post">
                        @csrf
                        <textarea name="tweet" rows="10" cols="80"></textarea><br />

                        <button class="btn-primary"type="submit" name="button">SCTweet Now</button>
                    </form>

                    <br>

                    <div class="col-lg-6" style="text-align: center; display:inline-block">
                    ScTweeter    @foreach($tweets as $tweet)
                            {{$tweet->tweet}} <br>

                        <h4>Comments</h4>
                            @foreach($tweet->comment as $comment)
                                {{  $comment->comments }}
                                <a class="btn-primary" type="submit" href="/editcomment/{{$comment->id}}/edit">Edit Comment</a>
                                <br>



                        @endforeach
                        <div class="col-md-8" style="text-align: center; display:inline-block">
                            <form action="/comment" method="post">
                                @csrf
                                <input type="hidden" name="tweet_id" value="{{ $tweet->id}}"><br>
                                    <textarea name="comment"> </textarea><br>
                                <button class="btn-primary" type="submit"style="text-align: center;">Comment Below SCTweet</button>
                            </form>

                            <form action="/editTweet/{{$tweet->id}}/edit" method="get">
                                <input type="hidden" name="tweetId" value="{{$tweet->id}}">
                                <button class="btn-primary"type="submit">Edit SCTweet</button>
                            </form>


                        </div>
                    @endforeach
                    <!-- test delete -->

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        @endsection
                        <a href="{{ url('/profiles') }}">User Profile Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard
                    <form class="" action="/tweet" method="post">
                        @csrf
                        <textarea name="tweet" rows="10" cols="100"></textarea><br />

                        <button class="btn-primary"type="submit" name="button">SCTweet Now</button>
                    </form>

                    <br>

                    <div class="col-lg-6">
                    ScTweeter    @foreach($tweets as $tweet)
                            {{$tweet->tweet}} <br>

                        <h4>Comments</h4>
                            @foreach($tweet->comment as $comment)
                                {{  $comment->comments }}
                                <br>

                        @endforeach

                        <div class="col-md-8">
                            <form action="/comment" method="post">
                                @csrf
                                <input type="hidden" name="tweet_id" value="{{ $tweet->id}}">
                                    <textarea name="comment"> </textarea>
                                <button class="btn-primary" type="submit">Comment Below SCTweet</button>
                            </form>

                            <form action="/edittweet/{{$tweet->id}}" method="get">
                                <input type="hidden" name="" value="{{$tweet->id}}">
                                <button class="btn-primary"type="submit">Edit SCTweet</button>
                            </form>

                        </div>
                    @endforeach

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.app')

@section('content')


<div class="card-body">
    <h1> Update Tweet</h1>
    <form class="" action="/tweet" method="post">
        @csrf
        <textarea name="tweet" rows="8" cols="80"></textarea><br />

        <button type="submit" name="button">Update SCTweet</button>
    </form>


</div>


@endsection

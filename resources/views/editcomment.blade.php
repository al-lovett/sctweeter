@extends('layouts.app')

@section('content')


<div class="card-body">
    <h1> Update Comment</h1>
    <form class="" action="/editcomment/{{$comment->id}}/edit" method="post">
        @csrf
        <textarea name="comment" rows="8" cols="80">{{ $comment->comments }}</textarea><br />


        <button type="submit" name="button" class="btn btn-success">Update Comment</button><br><br>
    </form>
    <form method="POST" action="{{ route( 'comment.destroy', $comment->id ) }}">
      @csrf
        <input type="submit" name="delete" value="Delete Comment" class="btn btn-success">
    </form>

</div>


@endsection

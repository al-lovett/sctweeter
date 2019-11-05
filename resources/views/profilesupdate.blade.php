@extends('layouts.app')

@section('content')


<div class="card-body">
    <h1> Update User Info</h1>
    <form class="" action="/profilesupdate/{id}" method="post">
        @csrf
        <textarea name="" rows="8" cols="80">{{ $user->users }}</textarea><br />

        <button type="submit" name="button">Update User Profile</button>
    </form>


</div>

@endsection

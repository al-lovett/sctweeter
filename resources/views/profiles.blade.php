@extends('layouts.app')

@section('content')

    <h1>User Profile Info</h1>
      <ul>
        @foreach ($users as $user )
        <li>
          <h2>{{ $user->name }}<h2>

            <a href="{{ '/profilesupdate/{id}' }}">
              Edit User Profile
            </a>
        @endforeach
<br>
<br>
<br>

<a href="{{ route( 'home' ) }}">Home Page</a>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile Page</title>
  </head>
  <body>
    <h1>User Profile Info</h1>
      <ul>
        @foreach ($users as $user )
        <li>
          <h2>{{ $user->name }}<h2>

            <a href="{{ ($user->id) }}">
              Edit User Profile
            </a>
        @endforeach

  </body>
</html>

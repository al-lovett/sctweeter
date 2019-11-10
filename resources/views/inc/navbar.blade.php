
<div id="centernav">
  <div class="navbar-nav">
    <a class="nav-item nav-link active" href="{{ url('/') }}">
      {{ config('app.name', 'Sapientia Commutationem') }}
    </a>
    <ul class="nav nav-pills">
        @guest
            <li class="nav-item nav-link">
                <a href="{{ route('login') }}" class="badge badge-success">{{ __('Login') }}</a>
            </li>
        @if (Route::has('register'))
            <li class="nav-item nav-link">
                <a class="badge badge-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item nav-link">
                <a id="" class="badge badge-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
  <div class="nav-item" aria-labelledby="">
      <a class="badge badge-success" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  </div>
    @endguest
  </ul>
</div>
</div>

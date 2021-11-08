<header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="">logo space</a> --}}
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link {{request()->routeIs('comics.index') ? 'active' : ''}}" href="{{ route('comics.index')}}">Home</a>
              <a class="nav-link {{request()->routeIs('comics.create') ? 'active' : ''}}" href="{{ route('comics.create') }}">New Comic</a>
            </div>
          </div>
        </div>
      </nav>
</header>
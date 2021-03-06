<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}">VAS Cinemas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        {{-- <li class="nav-item active">
          <a class="nav-link" href="{{ route('cinema.index') }}">Cinemas</a>
        </li> --}}

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cinema Locations
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               
                @foreach ($cinemas as $cinema)
                    
                    <a class="dropdown-item" href="{{ route('cinema.show', $cinema->slug) }}">{{ $cinema->name }}</a>
  
                @endforeach
            
              
          </li>
    
      
        
      </ul>

      <ul class="navbar-nav ml-auto">
      
        @auth
            <li class="nav-item">
                <a href="{{ route('movie.create') }}" class="nav-link" class="p-3">Add Movie</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" class="p-3">{{ auth()->user()->email }}</a>
            </li>

            <li class="nav-item">

                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            
                
            </li>
        @endauth

    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
    @endguest
        
      </ul>
      
    </div>
  </nav>
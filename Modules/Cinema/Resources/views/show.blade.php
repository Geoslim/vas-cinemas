@extends('cinema::layouts.master')

@section('content')
   

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-7">
            <h4>Now Showing at {{ $cinema->name }}</h4>
        </div>
    </div>
    <div class="row justify-content-center">

        

        @foreach ($movies as $movie)
            <div class="col-md-7 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img class="align-self-end mr-3" src="{{ asset('default.jpg') }}" alt="" width="12%">
                            <div class="media-body">
                                
                              <h5 class="mt-0">{{ $movie->name }}</h5>
                              <p>{{ $movie->description }}</p>

                                Showtimes: 
                                    @foreach ($movie->showtimes as $showtime)
                                        <span class="badge badge-info p-1 text-white">
                                            {{ $showtime->showtime }}
                                        </span>
                                    @endforeach
                            </div>
                          </div>
                      
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-md-7 mt-5">
            {{ $movies->links() }}
        </div>
        
       
    </div>
  

   
</div>
   
@endsection

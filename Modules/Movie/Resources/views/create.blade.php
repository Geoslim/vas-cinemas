@extends('movie::layouts.master')

@section('content')


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">New Movie</h5>
                  <form action="{{ route('movie.store') }}" method="post">
                    @csrf
                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    
                   </div>

                   <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" id="desc" name="description" >
 
                   </div>
                   
                   <div class="form-group">
                    <label for="cinema">Select Cinema</label>
                    <select name="cinema_id" id="cinema" class="form-control">
                        @foreach ($cinemas as $cinema)
                            <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                        @endforeach
                        
                    </select>
                   </div>
                   
                   <div class="form-group">
                    <label for="showtime">Select Showtimes <small> (Multiple selection)</small></label>
                    <select name="showtime[]" id="showtime" class="form-control" multiple>
                        @foreach ($showtimes as $showtime)
                        <option value="{{ $showtime->id }}">{{ $showtime->showtime }}</option>
                        @endforeach
                        
                    </select>
                   </div>
                   

                    <button type="submit" class="btn btn-xs btn-info btn-block mt-3">Add Movie</button>
                </form>
                </div>
            </div>
        </div>
    </div>
  

   
</div>
   

@endsection

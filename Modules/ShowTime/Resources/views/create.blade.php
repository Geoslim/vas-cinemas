@extends('showtime::layouts.master')

@section('content')


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">New Showtime</h5>
                  <form action="{{ route('showtime.store') }}" method="post">
                    @csrf
                   
     
                    <input type="text" class="form-control" name="showtime">
                    <button type="submit" class="btn btn-xs btn-info btn-block mt-3">Add</button>
                </form>
                </div>
            </div>
        </div>
    </div>
  

   
</div>
   

@endsection

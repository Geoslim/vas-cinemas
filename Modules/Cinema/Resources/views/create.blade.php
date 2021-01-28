@extends('cinema::layouts.master')

@section('content')


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">New Cinema</h5>
                  <form action="{{ route('cinema.store') }}" method="post">
                    @csrf
                   
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" class="form-control" name="name">
                    <button type="submit" class="btn btn-xs btn-info btn-block mt-3">Add</button>
                </form>
                </div>
            </div>
        </div>
    </div>
  

   
</div>
   

@endsection

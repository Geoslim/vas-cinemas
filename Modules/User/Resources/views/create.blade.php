@extends('user::layouts.master')

@section('content')
   

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Register</h5>
                  <form action="{{ route('register.store') }}" method="post">
                    @csrf
                
                    
                    <input type="text" class="form-control mt-2" name="name" placeholder="Full Name">
                    <input type="email" class="form-control mt-2" name="email" placeholder="Email Address">
                    <input type="password" class="form-control mt-2" name="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mt-2" value="">
                    <button type="submit" class="btn btn-xs btn-info btn-block mt-3">Sign Up</button>
                </form>
                </div>
            </div>
        </div>
    </div>
  

   
</div>
   
@endsection

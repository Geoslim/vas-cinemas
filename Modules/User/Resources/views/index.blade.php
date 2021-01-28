@extends('user::layouts.master')

@section('content')
   

<div class="container mt-5">
    @if (session('status'))
        <div class="bg-danger text-white text-center">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Login</h5>
                  <form action="{{ route('login') }}" method="post">
                    @csrf
                

                   
                    <input type="email" class="form-control mt-2" name="email" placeholder="Email Address">
                    <input type="password" class="form-control mt-2" name="password" placeholder="Password">
             
                    <button type="submit" class="btn btn-xs btn-info btn-block mt-3">Login</button>
                    <a href="{{ route('register.index') }}" class="btn btn-xs btn-info btn-block mt-3">Register</a>
                </form>
                </div>
            </div>
        </div>
    </div>
  

   
</div>
   
@endsection

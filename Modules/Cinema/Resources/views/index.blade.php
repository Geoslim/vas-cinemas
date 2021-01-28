@extends('cinema::layouts.master')

@section('content')

<div class="jumbotron">
    <h1 class="display-4 text-danger">Hello, world!</h1>
    <p class="lead">Welcome to VAS Cinemas</p>
    <hr class="my-4">
    <p>Check out our movies from one of our three locations across Lagos.</p>
    @foreach ($cinemas as $cinema)
    
    <a class="btn btn-primary btn-lg" href="{{ route('cinema.show', $cinema->slug) }}" role="button">{{ $cinema->name }}</a>
    @endforeach

  </div>
 
    
@endsection

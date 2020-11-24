@extends('layout.app')

@section('content')

<div class="jumbotron text-center">
    <h1>Welcome page</h1>
    <p><b>Welcome, Please Login/Register  to Access our services</b></p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>

@endsection
    
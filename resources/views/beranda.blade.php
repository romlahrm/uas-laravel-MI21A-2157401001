@extends('layouts.main')


@section('container')
<div class="container-fluid text-center" style="margin-top:150px;">
    <div class="card">
        <div class="card-body">
          <h1 class="text">Rahmatullah</h1>
          <h2>MI21A - 2157401001</h2>
          <p>Email yang anda gunakan adalah: {{$email}}</p>
          <a href="/login" class="btn btn-secondary">Logout</a>
        </div>
      </div>
@endsection
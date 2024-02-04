@extends('layouts.main')


@section('container')
<div class="container-fluid text-center" style="margin-top:100px;">
    <div class="card" style="height: 400px; background-color:rgb(250, 189, 34);">
        <div class="card-body" style="margin-top:90px;">
          <h2 class="text">{{ Auth::user()->name }}</h2>
          {{-- <h2>MI21A - 2157401001</h2> --}}
          <h4>Email yang digunakan: {{ Auth::user()->email }}</h4>
          <a href="/logout" class="btn btn-dark">Logout</a>
        </div>
      </div>
@endsection
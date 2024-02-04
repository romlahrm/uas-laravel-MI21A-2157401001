@extends('layouts.main')


@section('container')
<div class="fild">

  <div class="row tes">
    <div class="col-md-6 bungkus">
      <h1 class="text-center">Pendaftaran</h1>
      <form action="/simpan" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="/" class="btn btn-dark"> Kembali </a>
        </form>
    </div>
  </div>  
</div>
@endsection

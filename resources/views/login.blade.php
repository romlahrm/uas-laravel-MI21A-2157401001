@extends('layouts.partials')

@section('container')
<div class="row center">
    <div class="col mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Login</h1>
                <form action="/beranda" method="POST">
                    <p class="fst-italic text-danger">Silahkan Isi Data Terlebih Dahulu</p>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="posisi">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="/" class="btn btn-secondary"> Kembali </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection    

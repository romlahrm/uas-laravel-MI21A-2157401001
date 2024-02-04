@extends('layouts.partials')

@section('container')
<div class="login">
    <div class="row sub-login">
        <div class="col-md-6 wrap-login">
                <h1 class="text-center">Login</h1>
                    @if(Session::has('danger'))
                <p style="color: rgb(248, 75, 44); font-size: 20px;">{{ Session::get('danger') }}</p>
              @endif
                <form action="/submitLogin" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="/" class="btn btn-dark"> Kembali </a>
                </form>
    </div>
</div>
</div>
@endsection    

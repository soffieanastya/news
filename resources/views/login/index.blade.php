@extends('layouts.header')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">

      @if(session()->has('success'))
        <div class="btn-primary" height="30px">
          {{ session('success') }}
        </div>
      @endif

      @if(session()->has('loginError'))
        <div>
          {{ session('loginError') }}
        </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-mail" value=" {{ old('email') }}" autofocus required>
              <label for="email">Email address</label>
              @error('email')
                <div class="invaid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
        
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
          </form>
          <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register</a></small>
        </main>
    </div>
</div>
@endsection
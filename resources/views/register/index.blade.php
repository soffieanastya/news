@extends('layouts.header')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name"  value=" {{ old('name') }}" required>
              <label for="Name">Name</label>
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username"  value=" {{ old('username') }}" required>
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-mail"  value=" {{ old('email') }}" required>
              <label for="email">E-Mail</label>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection
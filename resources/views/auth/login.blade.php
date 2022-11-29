@extends('layouts.main_app')
@section('content')
    <div class="vh-100">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px; background-color: #292929; color:white">
                            <div class="card-body p-5">
                                <h4 class="text-uppercase text-center mb-5">Control Panel</h4>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Your Email</label>
                                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                                class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body"><span style="color:white;">Login</span></button>
                                        &nbsp;
                                        <button type="button"
                                                class="btn btn-outline-primary btn-block btn-lg gradient-custom-4 text-body"><a style="color:cornflowerblue;" href="{{route('register')}}">Register</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

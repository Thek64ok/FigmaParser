@extends('layouts.main_app')
@section('content')
    <div class="vh-100">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px; background-color: #292929; color:white">
                            <div class="card-body p-5">
                                <h4 class="text-uppercase text-left mb-5">Общие настройки</h4>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Название уведомления</label>
                                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Период проверки новых объявлений (минуты)</label>
                                        <input type="text" class="form-control form-control-lg @error('time_check') is-invalid @enderror" name="time_check" required autocomplete="time_check">
                                        @error('time_check')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Будут проверяться первых страниц</label>
                                        <input type="text" class="form-control form-control-lg @error('count_pages') is-invalid @enderror" name="count_pages" required autocomplete="count_pages">
                                        @error('count_pages')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                                class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>
                                    <p class="text-center mt-5 mb-0">Already registered? <a href="{{route('login')}}" class="fw-bold text-body"><u style="color:blue;">Sign in.</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

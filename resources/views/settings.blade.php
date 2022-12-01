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
                                <form method="POST" action="{{ route('settings_save') }}">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Название уведомления</label>
                                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus value="{{$data[0]['name']}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Период проверки новых объявлений (минуты)</label>
                                        <input type="text" class="form-control form-control-lg @error('time_check') is-invalid @enderror" name="time_check" autocomplete="time_check" value="{{$data[0]['time_check']}}">
                                        @error('time_check')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Будут проверяться <input size='2' type="text" class="@error('count_pages') is-invalid @enderror" name="count_pages" autocomplete="count_pages" value="{{$data[0]['count_pages']}}"> первых страниц</label>
                                        @error('count_pages')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 form-outline form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="Check_ideal" @if($data[0]['check_ideal'] == true) checked="" @endif name="check_ideal">
                                        <label class="form-check-label" for="Check_ideal">Следить за идеалистом</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg @error('text_ideal') is-invalid @enderror" name="text_ideal" autocomplete="text_ideal" value="{{$data[0]['text_ideal']}}">
                                        @error('text_ideal')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 form-outline form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="Check_olx" @if($data[0]['check_olx'] == true) checked="" @endif name="check_olx">
                                        <label class="form-check-label" for="Check_olx">Следить за OLX</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg @error('text_olx') is-invalid @enderror" name="text_olx" autocomplete="text_olx" value="{{$data[0]['text_olx']}}">
                                        @error('text_olx')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 form-outline form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="Check_fb" @if($data[0]['check_fb'] == true) checked="" @endif name="check_fb">
                                        <label class="form-check-label" for="Check_fb">Следить за FB</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg @error('text_fb') is-invalid @enderror" name="text_fb" autocomplete="text_fb" value="{{$data[0]['text_fb']}}">
                                        @error('text_fb')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Настройка каналов отправки уведомлений</label>
                                        <input type="text" class="form-control form-control-lg @error('notify_from') is-invalid @enderror" name="notify_from" autocomplete="notify_from" autofocus value="{{$data[0]['notify_from']}}">
                                        @error('notify_from')
                                        <span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    		</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                                class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Сохранить</button>
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

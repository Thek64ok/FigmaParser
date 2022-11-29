@extends('layouts.main_app')
@section('style')
    <style>
        .mrg_t{
            margin: 3%;
        }
        .button-r{
            border: none;
            border-radius: 50%;
        }
        .st-height{
            height: 270px;
        }
        .footer{
            padding-top: 130px;
            padding-left: 220px;
        }
        .button-r:hover{
            opacity: 0.3;
            cursor: pointer;
        }
        .mrg{
            padding-right: -3%;
            padding-top: -3%;
        }
    </style>
@endsection
@section('content')
    <div>
        <img src="{{asset('storage/settings.png')}}" width="32" height="32" class="button-r mrg" >
    </div>
    <div class="row row-cols-1 row-cols-md-4 mb-3 text-center mrg_t">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm st-height" style="background-color: black; color: white">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Создать уведомление</h4>
                </div>
                <div class="card-body">
                    <img onclick="get_notify();" src="{{asset('storage/plus.png')}}" height="144" width="144" style="opacity: 0.3">
                </div>
            </div>
        </div>
    </div>
    <div id="modal"></div>
@endsection
@section('script')
    <script>
        function get_notify(){
            $.ajax({
                url: '{{route('notify')}}',
                async:false,
                type: 'GET',
                success: function(response){
                    $('.mrg_t').append(response);
                }
            })
        }
        function deleteNotify(id){
            $.ajax({
                url: '{{route('modal')}}',
                async:false,
                type: 'GET',
                dataType: 'html',
                data: {id: id},
                success: function(response){
                    $('#modal').html(response);
                    let modal = new bootstrap.Modal('#staticBackdrop', {
                        keyboard: false
                    });
                    modal.show();
                }
            })
        }
    </script>
@endsection

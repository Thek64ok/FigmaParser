<div class="col st-height">
    <div class="card mb-4 rounded-3 shadow-sm st-height" style="background-color: black; color: white">
        <div class="card-header py-3" style="text-align: right">
            <button class="button-r" onclick="deleteNotify({{$id}});">X</button>
            <h5 class="my-0 fw-normal" style="text-align: center">Название</h5>
        </div>
        <div class="card-body footer">
            <img src="{{asset('storage/pause.png')}}" width="64" height="64" class="button-r">
            <img src="{{asset('storage/start.png')}}" width="40" height="40" class="button-r">
        </div>
    </div>
</div>

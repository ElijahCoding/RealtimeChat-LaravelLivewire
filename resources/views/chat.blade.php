@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @foreach($rooms as $room)
                <div>
                    <a href="">{{ $room->title  }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

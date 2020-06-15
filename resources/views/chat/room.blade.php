@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <livewire:chat.users :room="$room" />
            </div>
            <div class="col-md-10">
                <livewire:chat.messages :room="$room" :messages="$messages" />
                <livewire:chat.new-message :room="$room" />
            </div>
        </div>
    </div>
@endsection

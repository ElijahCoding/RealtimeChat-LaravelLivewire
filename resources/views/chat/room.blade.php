@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                users
            </div>
            <div class="col-md-10">
                <livewire:chat.messages :messages="$messages" />
                new messages
            </div>
        </div>
    </div>
@endsection

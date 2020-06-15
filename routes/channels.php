<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Arr;

Broadcast::channel('chat.{roomId}', function ($user) {
    return Arr::only($user->toArray(), [
        'id',
        'name'
    ]);
});

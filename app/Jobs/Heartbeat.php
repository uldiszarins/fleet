<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Storage;

class Heartbeat
{
    public function __construct()
    {
        Storage::disk('local')->put('file' . date("His") . '.txt', 'Your content here '.date("H:i:s"));
    }
}

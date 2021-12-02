<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class LatihanRedisController extends Controller
{
    public function testing()
    {
        Redis::set('nama', 'kikiki');

        return Redis::get('nama');
    }

}


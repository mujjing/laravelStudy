<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(){
        return 'Test Controller Invoke';
    }

    public function test(){
        return 'test';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Bar;


class TestController extends Controller
{
    public function index (Bar $bar)
    {
    	dd($bar);
    }
}

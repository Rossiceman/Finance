<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    public function list()
    {
        return view("front.active");
    }
}

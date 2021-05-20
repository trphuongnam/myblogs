<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCVController extends Controller
{
    function index()
    {
        return view('mycv');
    }
}

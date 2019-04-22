<?php

namespace App\Http\Controllers;

use App\We;
use App\Http\Requests\WeRequest;
use Illuminate\Http\Request;

class WeController extends Controller
{
    public function index()
    {
        return view('we');
    }

}

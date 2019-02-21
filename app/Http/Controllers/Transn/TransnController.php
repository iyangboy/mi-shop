<?php

namespace App\Http\Controllers\ZingFront;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransnController extends Controller
{
    public function index()
    {
        return view('transn.index');
    }

}

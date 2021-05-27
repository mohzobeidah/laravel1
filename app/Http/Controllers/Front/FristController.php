<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FristController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('');
    }

    public function Showtest()
    {

        return 'test';
    }
}

<?php

namespace Fit_tdc\Sample\Controllers;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index(){
        
        return view('sample::welcome');
    }
}

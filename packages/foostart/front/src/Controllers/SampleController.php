<?php

namespace foostart\front\Controllers;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index(){
        
        return view('front::index');
    }
}
<?php

namespace Front\Controllers;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(){
        return view('front::trangchu.trangchu');
    }
    public function tuyensinh(){
        return view('front::tuyensinh.tuyensinh');
    }
    public function sinhvien(){
        return view('front::sinhvien.sinhvien');
    }
    public function lienhe(){
        return view('front::lienhe.lienhe');
    }
    public function tintuc(){
        return view('front::tintuc.tintuc');
    }
    public function gioithieu(){
        return view('front::gioithieu.gioithieu');
    }
    public function giangvien(){
        return view('front::giangvien.giangvien');
    }
    public function daotao(){
        return view('front::daotao.daotao');
    }
    public function chuyende(){
        return view('front::chuyende.chuyende');
    }
    public function brochure(){
        return view('front::brochure.brochure');
    }
}


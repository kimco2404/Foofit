<?php

namespace Front\Controllers;

use App\Http\Controllers\Controller;
use Front\Models\front;

class FrontController extends Controller {

    public $student = null;

    public function index() {
        return view('front::pages.trangchu.trangchu');
    }

    public function tuyensinh() {
        return view('front::layouts.tuyensinh.tuyensinh');
    }

    public function sinhvien() {
        return view('front::layouts.sinhvien.sinhvien');
    }

    public function lienhe() {
        return view('front::layouts.lienhe.lienhe');
    }

    public function tintuc() {
        return view('front::layouts.tintuc.tintuc');
    }

    public function gioithieu() {
        return view('front::layouts.gioithieu.gioithieu');
    }

    public function giangvien() {
        return view('front::layouts.giangvien.giangvien');
    }

    public function daotao() {
        return view('front::layouts.daotao.daotao');
    }

    public function chuyende() {
        return view('front::layouts.chuyende.chuyende');
    }

    public function brochure() {
        return view('front::layouts.brochure.brochure');
    }

    public function laydata() {
        $this->student = new front();
        $student = $this->student->showdata();
        return view('front::layouts.index')->with('student', $student);
    }

}

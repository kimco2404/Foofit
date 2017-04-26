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
        return view('front::pages.tuyensinh.tuyensinh');
    }

    public function sinhvien() {
        return view('front::pages.sinhvien.sinhvien');
    }

    public function lienhe() {
        return view('front::pages.lienhe.lienhe');
    }

    public function tintuc() {
        return view('front::pages.tintuc.tintuc');
    }

    public function gioithieu() {
        return view('front::pages.gioithieu.gioithieu');
    }

    public function giangvien() {
        return view('front::pages.giangvien.giangvien');
    }

    public function daotao() {
        return view('front::pages.daotao.daotao');
    }

    public function chuyende() {
        return view('front::pages.chuyende.chuyende');
    }

    public function brochure() {
        return view('front::pages.brochure.brochure');
    }

    public function laydata() {
        $this->student = new front();
        $student = $this->student->showdata();
        return view('front::pages.index')->with('student', $student);
    }

}

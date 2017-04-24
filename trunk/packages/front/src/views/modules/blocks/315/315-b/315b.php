<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/315.less', 'css/315.css');
    ?>
    <link href="css/315.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-315">
        <div class="container teacher">
            <div class="row">
                <!--INFORMATICS BASIS (TIN HỌC CƠ SỞ)-->
                <div class="col-sm-4 col-md-4">
                </div>
                <!--LIST TEACHER OF INFORMATICS BASIS-->
                <div class="col-sm-8 col-md-8 prof_list">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/LamThiPhuongThao.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Lâm Thị Phương Thảo</a></h4>
                            <span class="prof_title">Trưởng bộ môn</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NguyenThiVan.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="http://fit.tdc.edu.vn/nhan-su/nguyen-thi-van">Nguyễn Thị Vân</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/PhanThiTrinh.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="http://fit.tdc.edu.vn/nhan-su/phan-thi-trinh">Phan Thị Trinh</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/MaiKyTuyen.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="http://fit.tdc.edu.vn/nhan-su/mai-ky-tuyen">Mai Kỷ Tuyên</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/HuynhThiPhuongThuy.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="http://fit.tdc.edu.vn/nhan-su/huynh-thi-phuong-thuy">Huỳnh Thị Phương Thủy</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NgoThiAnhThu.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="http://fit.tdc.edu.vn/nhan-su/ngo-minh-anh-thu">Ngô Minh Anh Thư</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/HoangCongTrinh.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="http://fit.tdc.edu.vn/nhan-su/hoang-cong-trinh">Hoàng Công Trình</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                    </div>
                </div>
                <!--END LIST TEACHER OF INFORMATICS BASIS-->
                <!--END INFORMATICS BASIS-->
            </div>
        </div>
    </div>
</body>


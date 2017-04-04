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
    $less->compileFile('less/316.less', 'css/316.css');
    ?>
    <link href="css/316.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-316">
        <div class="container teacher">
            <div class="row">
                <!--SOFTWARE TECHNOLOGY (CÔNG NGHỆ PHẦN MỀM)-->
                <div class="col-sm-4 col-md-4">
                </div>
                <!--LIST TEACHER OF SOFTWARE TECHNOLOGY-->
                <div class="col-sm-8 col-md-8 prof_list">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/PhanThiThe.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Phan Thị Thể</a></h4>
                            <span class="prof_title">Trưởng bộ môn</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NguyenThiHongMy.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Nguyễn Thị Hồng Mỹ</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/TruongBaThai.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Trương Bá Thái</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/PhanGiaPhuoc.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Phan Gia Phước</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/LeTho.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Lê Thọ</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/BuiThiPhuongThao.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Bùi Thị Phương Thảo</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NguyenHoangNguyen.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Nguyễn Hoàng Nguyên</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NguyenHuyHoang.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Nguyễn Huy Hoàng</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/PhanThanhNhuan.png" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Phan Thanh Nhuần</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/BuiThanhYenThao.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Bùi Thanh Yên Thảo</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                    </div>
                </div>
                <!--END LIST TEACHER OF SOFTWARE TECHNOLOGY-->
                <!--END SOFTWARE TECHNOLOGY-->
            </div>
        </div>
    </div>
</body>


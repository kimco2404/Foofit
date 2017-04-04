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
                    <div class="widget html">
                        <div class="panel-heading">
                            <h2><span>bộ môn</span><br>Công nghệ phần mềm</h2>
                            </div>
                        <p>
                            Trưởng bộ môn: Phan Thị Thể
                        </p>
                        <p>Trang bị cho sinh viên các kiến thức và kỹ năng để trở thành nhà phát triển phần mềm chuyên nghiệp.
                Phát triển các hướng nghiên cứu tạo ra sản phẩm như phát triển ứng dụng trên di động, ứng dụng trên nền web, công cụ kiểm thử phần mềm, các tool hỗ trợ lập trình ứng dụng, …
                Liên kết chặt chẽ với các công ty phần mềm nhằm tạo điều kiện cho giảng viên và sinh viên tiếp cận các công nghệ mới đã và đang áp dụng trong thực tế.
                        </p>	
                    </div>
                </div>
                <!--LIST TEACHER OF SOFTWARE TECHNOLOGY-->
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
                <!--END LIST TEACHER OF SOFTWARE TECHNOLOGY-->
                <!--END SOFTWARE TECHNOLOGY-->
            </div>
        </div>
    </div>
</body>


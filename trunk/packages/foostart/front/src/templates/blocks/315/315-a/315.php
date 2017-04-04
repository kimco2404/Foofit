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
                    <div class="widget html">
                        <div class="panel-heading">
                            <h2><span>bộ môn</span><br>Tin học cơ sở</h2>
                        </div>
                        <p>
                            Trưởng bộ môn: Lâm Thị Phương Thảo
                        </p>
                        <p>
                Cung cấp kiến thức nền vững chắc cho sinh viên ngành CNTT thông qua các kiến thức cơ sở về lập trình, cấu trúc dữ liệu, giải thuật, lập trình hướng đối tượng, anh văn chuyên ngành… và trang bị kiến thức chung về tin học cho sinh viên tất cả các ngành khác trong trường.
                Tham gia các hoạt động tổ chức huấn luyện đội tuyển Olympic tin học, đội tuyển MOS.
                Nghiên cứu xây dựng các đề tài khoa học có khả năng áp dụng trong thực tế như: các thuật toán, e-learning, các phần mềm thiết kế bài giảng điện tử.
                        </p>	
                    </div>

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


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
    $less->compileFile('less/317.less', 'css/317.css');
    ?>
    <link href="css/317.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-317">
        <div class="container teacher">
            <div class="row">
                <!--GRAPHICS (ĐỒ HỌA)-->
                <div class="col-sm-4 col-md-4">
                    
                </div>
                <!--LIST TEACHER OF GRAPHICS-->
                <div class="col-sm-8 col-md-8 prof_list">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/TranThiMinhSa.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Trần Thị Minh Sa</a></h4>
                            <span class="prof_title">Trưởng bộ môn</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NguyenNgocCamTu.jpg" alt=""/>                  
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Nguyễn Ngọc Cẩm Tú</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/NguyenPhongLan.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Nguyễn Phong Lan</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/DoanQuocThuan.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Đoàn Quốc Thuận</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder profview">
                            <div class="profview_thumb">
                                <div class="profview_thumb_wrap">
                                    <img src="images/HoangAnh.jpg" alt=""/>
                                </div>
                            </div>
                            <h4 class="prof_name"><a href="#">Hoàng Anh</a></h4>
                            <span class="prof_title">Giảng viên</span>
                        </div>
                    </div>
                </div>
                <!--END LIST TEACHER OF GRAPHICS-->
                <!--END GRAPHICS-->
            </div>
        </div>
    </div>
</body>


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
    $less->compileFile('less/329.less', 'css/329.css');
    ?>

    <link href="css/329.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-329">
        <!--LIST OF HEADER-->
        <div class="container">
            <div class="heading">
                <div style="margin: 0 auto; display: table;">
                    <div style="display: table-cell;">
                        <img src="images/training_icon.png" style="float:left;">
                    </div>
                    <div style="display: table-cell;">
                        <h1><span>CHƯƠNG TRÌNH</span><br>ĐÀO TẠO</h1>
                    </div>
                </div>
            </div>
            <!--ROW PROGRAM 01-->
            <div class="programmer">
                <div class="program">
                    <div class="row">
                        <div class="col-md-5 college">
                            <h3>Cao đẳng chính quy</h3>
                            <div class="desc">
                                Đào tạo Cử nhân Cao Đẳng Công nghệ thông tin<br>có những nền tảng cơ bản để phát triển toàn<br>diện về nhân cách và nghề nghiệp.<br>
                                Thời gian đào tạo: 3 năm  
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="flag f-college">
                                <span>01</span>
                                <div class="flagtri"></div>
                            </div>
                        </div>
                        <div class="col-md-5 college1">
                            <ul>
                                <li><a href="#">Ngành Công nghệ thông tin</a></li>
                                <li><a href="#">Ngành Truyền thông và Mạng máy tính</a></li>
                                <li><a href="#">Ngành Thiết kế Đồ họa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--ROW PROGRAM 02-->           
            <div class="programmer">
                <div class="program">
                    <div class="row">
                        <div class="col-md-5 vocational">
                            <h3>Trung Cấp Chuyên Nghiệp</h3>
                            <div class="desc">
                                Đào tạo Kỹ thuật viên có đủ năng lực chuyên<br>môn và kỹ năng nghề nghiệp.<br>
                                Thời gian đào tạo: 2năm 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="flag f-vocational">
                                <span>01</span>
                                <div class="flagtri"></div>
                            </div>
                        </div>
                        <div class="col-md-5 vocational1">
                            <ul>
                                <li><a href="#">Ngành Tin Học Ứng Dụng</a></li>
                                <li><a href="#">Ngành Truyền Thông Đa Phương Tiện </a></li>                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--ROW PROGRAM 03-->
            <div class="programmer">
                <div class="program">
                    <div class="row">
                        <div class="col-md-5 collegetrans">
                            <h3>cao đẳng liên thông</h3>
                            <div class="desc">
                                Đào tạo Cử nhân Cao Đẳng Công nghệ thông tin<br>có những nền tảng cơ bản để phát triển toàn<br>diện về nhân cách và nghề nghiệp.<br>
                                Thời gian đào tạo: 1.5 năm
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="flag f-collegetrans">
                                <span>03</span>
                                <div class="flagtri"></div>
                            </div>
                        </div>
                        <div class="col-md-5 collegetrans1">
                            <ul>
                                <li><a href="dao-tao/cao-dang-lien-thong">Ngành Công nghệ thông tin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--ROW PROGRAM 04-->
            <div class="programmer">
                <div class="program">
                    <div class="row">
                        <div class="col-md-5 courses">
                            <h3>chuyên đề ngắn hạn</h3>
                            <div class="desc">
                                Đào tạo các khóa chuyên đề ngắn hạn với các chủ đề liên quan đến công nghệ thông tin và thiết kế.
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="flag f-courses">
                                <span>04</span>
                                <div class="flagtri"></div>
                            </div>
                        </div>
                        <div class="col-md-5 courses">
                        </div>
                    </div>
                </div>
            </div>
            <!--ROW PROGRAM 05-->
            <div class="programmer">
                <div class="program">
                    <div class="row">
                        <div class="col-md-5 corp">
                            <h3>Hợp tác đào tạo</h3>
                            <div class="desc">
                                Chương trình đào tạo liên kết với các cơ sở giáo dục nước ngoài và các doanh nghiệp.
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="flag f-corp">
                                <span>05</span>
                                <div class="flagtri"></div>
                            </div>
                        </div>
                        <div class="col-md-5 corp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF HEADER-->
    </div>
</body>
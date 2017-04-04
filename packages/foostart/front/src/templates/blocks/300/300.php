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
    $less->compileFile('less/300.less', 'css/300.css');
    ?>

    <link href="css/300.css" rel="stylesheet" type="text/css"/>
    
</head>

<body>

    <div class="type-300">

        <!--FOOTER-->
        <footer>
            <div class="container intro">
                <div class="row">
                    <!--FOOTER INTRODUCTION-->
                    <div class="col-md-4">
                        <div class="footer-info">
                            <h4>KHOA CÔNG NGHỆ THÔNG TIN<br>
                                Trường Cao Đẳng Công Nghệ Thủ Đức</h4>
                            <p>53 Võ Văn Ngân, P.Linh Chiểu, Q.Thủ Đức, Tp.HCM</p>
                            <p>Điện thoại: (08) 22 158 642</p>
                            <p>Fax: 08.38962474</p>
                            <p>Email: cntt@mail.tdc.edu.vn</p>
                        </div>
                    </div>
                    <!--/END FOOTER INTRODUCTION-->

                    <!--FOOTER LINK-->
                    <div class="col-md-4">
                        <ul class="bottom-link">
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Trường Cao Đẳng Công Nghệ Thủ Đức</a></li>
                        </ul>
                    </div>
                    <!--/END FOOTER LINK-->

                    <!--FOOTER COPYRIGHT-->
                    <div class="col-md-4 ">
                        <ul class="bottom-link">
                            <li><a href="#">Liên hệ</a></li>
                            <li>2017 <a href="#">Khoa Công nghệ thông tin | Cao đẳng Công nghệ Thủ Đức</a> All Rights Reserved.</li>
                        </ul>
                    </div>
                    <!--/END FOOTER COPYRIGHT-->
                </div>
            </div>
        </footer>
        <!--/END FOOTER-->

    </div>

</body>
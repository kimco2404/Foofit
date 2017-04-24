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
    $less->compileFile('less/338.less', 'css/338.css');
    ?>
    <link href="css/338.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-338">
        <div class="container special">
            <div class="row">
                <!--SPECIAL SUBJECT-->
                <div class="navbar-collapse" id="catenav">
                    <ul class="nav navbar-nav">
                        <li><h4><a href="#" style="color: #000">BÀI VIẾT CHUYÊN ĐỀ</a>
                                
                            </h4><span style="padding-left: 15px; font-size: 0px;"><i class="fa fa-angle-right"></i></span></li>
                        <li class="col-xs-6 auto-width"><a href="#">Tin học cơ sở</a></li>
                        <li class="col-xs-6 auto-width"><a href="#">Công nghệ phần mềm</a></li>
                        <li class="col-xs-6 auto-width"><a href="#">Đồ họa</a></li>
                        <li class="col-xs-6 auto-width"><a href="#">Mạng máy tính</a></li>
                    </ul>
                </div>
                <!--END SPECIAL SUBJECT-->
            </div>
        </div>
    </div>
</body>


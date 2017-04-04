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
    $less->compileFile('less/302.less', 'css/302.css');
    ?>
    <link href="css/302.css" rel="stylesheet" type="text/css"/>
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-302">
        <div class="container slideshow">
            <!--SLIDE SHOW-->
            <div class="swiper-container">
                <!--SLIDE BANNER-->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/banner3.jpg" alt=""/>
                        </a>
                        <div class="content-slide-show">
                            <h3 class="title" data-swiper-parallax="-100">Ra mắt <br><span class="subtitle">Logo Khoa CNTT</span></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/banner2.jpg" alt=""/>
                        </a>
                        <div class="content-slide-show">
                            <h3 class="title" data-swiper-parallax="-100"><span class="subtitle">Chào mừng Tân Sinh viên</span><br>Khóa 2016</h3>
                        </div>       
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/banner1.jpg" alt=""/>
                        </a>   
                        <div class="content-slide-show">
                            <h3 class="title" data-swiper-parallax="-100"><span class="subtitle">Khoa CNTT</span><br>Trường CĐ Công Nghệ Thủ Đức</h3>
                        </div>    
                    </div>
                </div>
                <!--END SLIDE BANNER-->
                
                <!--PAGINATION-->
                <div class="swiper-pagination"></div>
                <!--END PAGINATION-->
                <!--ARROWS -->
                <div class="swiper-button-next"><span class="btn-next fa fa-chevron-right"></span></div>
                <div class="swiper-button-prev"><span class="btn-prev fa fa-chevron-left"></span></div>
                <!--END ARROWS-->
            </div>
            <!--END SLIDE SHOW-->
        </div>
    </div>
</body>
<script src="js/swiper.min.js" type="text/javascript"></script>
<script src="js/302.js" type="text/javascript"></script>
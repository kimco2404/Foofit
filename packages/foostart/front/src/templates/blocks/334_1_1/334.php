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
    $less->compileFile('less/334.less', 'css/334.css');
    ?>
    <link href="css/334.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-334">
        <div class="container sidebar">
            <div class="row">
                <!-----INTRODUCTION----->
                <div class="col-md-8"></div>
                <!-----END INTRODUCTION----->

                <!--RIGHT SIDE BAR-->
                <div class="col-md-4">

                    <!--WIDGET IMAGES ENROLLMENT-->
                    <div class="widget html">
                        <div style="margin-top: 45px;">
                            <a href="#">
                                <img src="images/tuyensinh.gif" style="max-width: 100%; width: 100%;">
                            </a>
                        </div>	
                        <div class="divider"></div>
                    </div>
                    <!--/END WIDGET IMAGES ENROLLMENT-->

                </div>
                <!--/END RIGHT SIDE BAR-->
            </div>
        </div>
    </div>

</body>
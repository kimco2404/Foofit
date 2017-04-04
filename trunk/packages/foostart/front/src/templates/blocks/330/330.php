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
    $less->compileFile('less/330.less', 'css/330.css');
    ?>

    <link href="css/330.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-330">
        <!--LIST OF HEADER-->
        <div class="container">
            <div class="title-tuyensinh">
                <div class="ribbon">
                    <div class="ribbon-stitches-top"></div>
                    <strong class="ribbon-content">
                        <h1>
                            Tuyển sinh 2017
                        </h1>
                    </strong>
                    <div class="ribbon-stitches-bottom"></div>
                </div>
            </div>
            <!--IMAGES-->
            <div>
                <img src="images/tdcwhyus.gif" alt="tdc-tuyensinh-2015" style="width: 100%; max-width: 100%;">
                <img src="images/tdc-tuyensinh.gif" alt="tdc-tuyensinh-2015-tong-quan" style="width: 100%; max-width: 100%;">
            </div>
        </div>
        <!--END OF HEADER-->
    </div>
</body>
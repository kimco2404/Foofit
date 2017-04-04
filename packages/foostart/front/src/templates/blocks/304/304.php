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
    $less->compileFile('less/304.less', 'css/304.css');
    ?>
    <link href="css/304.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-304">
        <div class="container sidebar">
            <div class="row">
                <!--LEFT SIDE BAR-->
                <div class="col-md-4">

                    <!--WIDGET IMAGES ENROLLMENT-->
                    <div class="html">
                        <div style="margin-top: 45px;">
                            <a href="#">
                                <img src="images/tuyensinh.gif" style="max-width: 100%; width: 100%;">
                            </a>
                        </div>	
                        <div class="divider"></div>
                    </div>
                    <!--/END WIDGET IMAGES ENROLLMENT-->

                </div>
                <!--/END LEFT SIDE BAR-->
            </div>
        </div>
    </div>

</body>
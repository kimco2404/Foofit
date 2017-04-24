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
    $less->compileFile('less/328.less', 'css/328.css');
    ?>
    <link href="css/328.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-328">
        <div class="container bio">
            <div class="row">
                <!--BIOGRAPHY-->
                <div class="col-md-8">
                    <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><span>Thông báo</span><br>Tin tức</h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <span style="font-family: 'Open Sans', sans-serif; font-size: 14px; line-height: 20px;">Giảng dạy các môn&nbsp;<strong>Tin học quản lý, thiết kế web</strong></span>
                        </div>
                    </div>
                    </div>
                </div>
                <!--END BIOGRAPHY-->  
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>
</body>


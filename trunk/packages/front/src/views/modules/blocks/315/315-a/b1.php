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
                </div>
                <!--LIST TEACHER OF INFORMATICS BASIS-->
                <div class="col-sm-8 col-md-8 prof_list">
                    
                </div>
                <!--END LIST TEACHER OF INFORMATICS BASIS-->
                <!--END INFORMATICS BASIS-->
            </div>
        </div>
    </div>
</body>


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
    $less->compileFile('less/306.less', 'css/306.css');
    ?>
    <link href="css/306.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-306">
        <div class="container sidebar">
            <div class="row">
                <!--LEFT SIDE BAR-->
                <div class="col-md-4">

                    <!--WIDGET TOP WORKS-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tuyển dụng <br><span>Cơ hội việc làm</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">IT Phần Cứng - Mạng</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Nhân Viên Kỹ Thuật</a>                        
                                </li>
                            </ul>
                        </div>
                    </div>	
                    <div class="divider"></div>
                    <!--/END WIDGET TOP WORKS-->

                    <!--WIDGET TOP ALUMNUS-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Cựu sinh viên <br><span>Thông tin cần biết</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">Làm thế nào học tiếng Anh với 15 phút mỗi ngày?</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Ứng đối trôi chảy</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Bản đồ tư duy</a>                       
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Kỹ năng giao tiếp</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Phân tích SWOT</a>                        
                                </li>
                            </ul>
                        </div>
                        <div class="divider"></div>
                    </div>
                    <!--/END WIDGET TOP ALUMNUS-->
                </div>
                <!--/END LEFT SIDE BAR-->
            </div>
        </div>
    </div>

</body>
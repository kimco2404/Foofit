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
    $less->compileFile('less/321.less', 'css/321.css');
    ?>
    <link href="css/321.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-321">
        <div class="container sidebar">
            <div class="row">

                <!--RIGHT-->
                <div class="col-md-8"></div>
                <!--END RIGHT-->

                <!--LEFT SIDE BAR-->
                <div class="col-md-4">
                    <div class="widget recent_news">

                        <!--RECENT NEWS-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Tin tức <br><span>thông báo</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo V/v Tổ chức thi tốt nghiệp bậc TCCN chính quy-Đợt 1 năm học 2016-2017</a>                            
                                        <span> - 15/02/2017</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo v/v các lớp học phần sẽ bị hủy vì không đủ sĩ số</a>                            
                                        <span> - 08/02/2017</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo v/v đăng ký học phần học kỳ 2 năm học 2016 - 2017</a>                            
                                        <span> - 06/01/2017</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thời gian nhận và trả lễ phục</a>                            
                                        <span> - 20/12/2016</span>
                                    </li>

                                    <li class="list-group-item on-recent-news">
                                        <a href="#">Thông báo đăng ký dự lễ tốt nghiệp khóa 2013 bậc CĐ và khóa 2014 bậc TCCN</a>                            
                                        <span> - 12/12/2016</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <!--/END RECENT NEWS-->

                    </div>
                </div>
                <!--/END LEFT SIDE BAR-->

            </div>
        </div>
    </div>

</body>
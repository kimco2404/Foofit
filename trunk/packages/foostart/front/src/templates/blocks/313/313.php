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
    $less->compileFile('less/313.less', 'css/313.css');
    ?>
    <link href="css/313.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-313">
        <div class="container event">
            <div class="row">
                <!--LEFT SIDE BAR-->
                <div class="col-md-8"> </div>
                <!--/END LEFT SIDE BAR-->

                <!--RIGHT SIDE BAR-->
                <div class="col-md-4">

                    <!--WIDGET TOP EVENTS-->
                    <div class="widget topevents">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Sự kiện <br><span>Hoạt động</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="bodytimeline">
                                <ul class="timeline">
                                    <!--TOP EVENTS LEFT-->
                                    <li>
                                        <div class="timeline-badge "></div>
                                        <div class="timeline-panel">
                                            <div class="eventtime">
                                                <div class="eventtimecover">
                                                    <div class="eventdm">
                                                        <div class="eventday">14</div>
                                                        <div class="eventmonth">01</div>
                                                    </div>
                                                    <div class="eventyear">'17</div>
                                                </div>
                                            </div>
                                            <div class="eventdetails">
                                                <div class="eventlocation">
                                                    Hội trường H
                                                </div>
                                                <div class="eventdesc">
                                                    <a href="#">Báo cáo chuyên đề về Quyền của phụ nữ trong hệ thống pháp luật Việt Nam và các nội dung trong Luật Lao động có liên quan đến phụ nữ.</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--/END TOP EVENTS LEFT-->

                                    <!--TOP EVENTS RIGHT-->

                                    <!--/END TOP EVENTS RIGHT-->
                                </ul>
                            </div>
                            <div class="crossedbg"></div>
                        </div>

                        <div class="divider"></div>
                    </div>
                    <!--/END WIDGET TOP EVENTS-->

                </div>
                <!--/END RIGHT SIDE BAR-->
            </div>
        </div>
    </div>
</body>

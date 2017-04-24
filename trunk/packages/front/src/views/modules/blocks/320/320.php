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
    $less->compileFile('less/320.less', 'css/320.css');
    ?>
    <link href="css/320.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-320">
        <div class="container slidebar">
            <div class="row">

                <!--LEFT-->
                <div class="col-md-8"></div>
                <!--/END LEFT-->

                <!--RIGHT SIDE BAR-->
                <div class="col-md-4">

                    <!--LIST DEPARTMENTS-->
                    <div class="widget dept_itdc">

                        <div class="panel panel-default list_departments">
                            <div class="panel-heading">
                                <h2>Bộ môn <br><span>chuyên ngành</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="dep_list">
                                <div class="dep_item dep_network">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/mmt_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            Mạng<br>máy tính
                                        </div>
                                    </div>
                                </div>
                                <div class="dep_item dep_software">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/cnpm_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            công nghệ<br> phần mềm
                                        </div>
                                    </div>
                                </div>
                                <div class="dep_item dep_graphic">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/dh_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            Đồ họa
                                        </div>
                                    </div>
                                </div>
                                <div class="dep_item dep_informatics">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <img class="img-responsive" src="images/thcs_thumb.jpg">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                            Tin học<br>cơ sở
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <div class="divider"></div>
                    </div>
                    <!--/END LIST DEPARTMENTS-->
                </div>             

            </div>
            <!--/END RIGHT SIDE BAR-->

        </div>
    </div>

</body>
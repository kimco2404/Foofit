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
    $less->compileFile('less/323.less', 'css/323.css');
    ?>
    <link href="css/323.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-323">
        <div class="container sidebar">
            <div class="row">

                <!--LEFT-->
                <div class="col-md-8"></div>
                <!--/END LEFT-->

                <!--RIGHT SIDE BAR-->
                <div class="col-md-4">

                    <!--TEST-->
                    <div class="widget test">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Thử tài<br><span>Qua các cuộc thi</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="contest_list">
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 contest_item">
                                    <img class="img-responsive" src="images/oth_logo.gif">
                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END TEST-->


            </div>
            <!--/END RIGHT SIDE BAR-->

        </div>
    </div>

</body>
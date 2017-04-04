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
    $less->compileFile('less/309.less', 'css/309.css');
    ?>
    <link href="css/309.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/ekko-lightbox-min.js" type="text/javascript"></script>
    <script src="js/309.js" type="text/javascript"></script>
</head>

<body>

    <div class="type-309">
        <div class="container sidebar">
            <div class="row">
                <!--LEFT SIDE BAR-->
                <div class="col-md-4"></div>
                <!--/END LEFT SIDE BAR-->

                <!--RIGHT CONTENTS HOME-->
                <div class="col-md-8">
                    <!--LEFT PARTNERS-->
                    <div class="widget">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Đối tác</h2>
                            </div>
                            <div class="crossedbg"></div>
                            <h4><b>Chứng nhận</b></h4>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img onclick="zoomFunction(0)" class="myImg" src="images/ms.gif" alt="Microsoft IT Academy">
                                        <img class="myImg2" src="images/ms_cert.gif">
                                    </div>
                                    <div class="modal myModal">
                                        <span onclick="exitFunction(0)" class="close">×</span>
                                        <div class="caption"></div>
                                        <img class="modal-content img01">  
                                    </div>                                                                     
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img onclick="zoomFunction(1)" class="myImg" src="images/cisco.gif" alt="Cisco Networking Academy">
                                        <img class="myImg2" src="images/cisco_cert.gif">
                                    </div>
                                    <div class="modal myModal">
                                        <span onclick="exitFunction(1)" class="close">×</span>
                                        <div class="caption"></div>
                                        <img class="modal-content img01">  
                                    </div>
                                </div>
                            </div>
                            <h4><b>Công ty thực tập</b></h4>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e407b891b.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e9e60e44e.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/ab645dde3c.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e4a5e2c0f.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e5de453d8.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e6df75452.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e73406038.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e7f6f17d1.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e944c4e1f.png">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/logo-3t.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/bk.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/chanchinh.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/hk.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/pnc.gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <!--/END LEFT PARTNERS-->
            </div>
        </div>
    </div>
    <div class="ekko-lightbox modal fade in" tabindex="-1" aria-hidden="false" style="display: none;">
        <div class="modal-dialog" style="width: auto; max-width: 996.818px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Microsoft IT Academy</h4>
                </div>
                <div class="modal-body">
                    <div class="ekko-lightbox-container">
                        <div>
                            <img src="images/cisco_cert.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="display:none">null</div>
            </div>
        </div>
    </div>
    

</body>
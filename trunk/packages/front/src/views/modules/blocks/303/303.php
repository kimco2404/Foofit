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
    $less->compileFile('less/303.less', 'css/303.css');
    ?>
    <link href="css/303.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>x`
    <div class="type-303">
        <div class="container">        
                <!--PROFILE-->
                <div class="container prof_profile shadow profile">
                    <div class="row">
                        <!--------------Begin Profile---------------->
                        <div class="col-md-4 col-sm-5 col-xs-5 prof_ava">
                            <img src="images/VoThanhTrung.jpg" alt=""/>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-7 prof_info">
                            <div class="prof_ide">
                                <div class="prof_fullname">
                                    Võ Thành Trung
                                </div>
                                <div class="prof_title">
                                    Trưởng khoa
                                </div>
                            </div>
                            <div class="prof_contact">
                                <span class="prof_dep">Văn phòng khoa</span>
                                <ul>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <li><i class="fa fa-graduation-cap fa-lg fa-fw"></i>&nbsp; Thạc sĩ</li>
                                            <li title="Phone number"><i class="fa fa-phone fa-lg fa-fw"></i>&nbsp; (+84)822158642</li>
                                            <li title="Email"><i class="fa fa-envelope fa-lg fa-fw"></i>&nbsp;trunga2@tdc.edu.vn </li>
                                         </div>
                                        <div class="col-md-6 col-sm-6">
                                            <li title="Skype"><i class="fa fa-skype fa-lg fa-fw"></i>&nbsp;trungtdc2013</li>
                                            <li title="Website"><i class="fa fa-external-link fa-lg fa-fw"></i>&nbsp; http://fit.tdc.edu.vn/nhan-su/vo-thanh-trung</li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                           
                        </div>
                        <!--------------End Profile---------------->
                    </div>
                </div>
                    
                <!--END PROFILE-->            
        </div>
    </div>
</body>


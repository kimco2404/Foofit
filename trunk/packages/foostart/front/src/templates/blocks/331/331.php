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
    $less->compileFile('less/331.less', 'css/331.css');
    ?>
    <link href="css/331.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />

</head>

<body>

    <div class="type-331">
        <div class="container address">
            <div class="row">
                <!--LEFT ADDRESS-->
                <div class="col-sm-6 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Văn phòng Khoa<br><span>Địa chỉ</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <address>
                                <p>
                                    <b>Khoa CNTT<br>
                                        Khu B, Cao đẳng Công nghệ Thủ Đức</b>
                                </p>
                                <ul class="itdcadd">
                                    <li>
                                        <i class="fa fa-clock-o fa-lg fa-fw"></i>&nbsp; Thứ 2 đến thứ 6, 7h00 - 11h30, 13h30 - 16h30<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thứ 7, 7h30 - 11h
                                    </li>
                                    <li>
                                        <i class="fa fa-building fa-lg fa-fw"></i>&nbsp; 53, Võ Văn Ngân, P.Linh Chiểu,<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Q.Thủ Đức, Tp.HCM
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg fa-fw"></i>&nbsp; (08) 22 158 642
                                    </li>
                                </ul>
                            </address>

                            <!--MAP CANVAS-->
                            <div id="map-canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4805347001443!2d106.7560762145813!3d10.851008692270929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1488176391234" width="100%" height="450px" frameborder="0" style="border:2" allowfullscreen></iframe> 
                            </div>
                            <!--MAP CANVAS-->

                        </div>
                    </div>
                    <!--/END LEFT ADDRESS-->

                    <!--RIGHT CONTACTS-->
                    <div class="col-md-6"></div>
                    <!--/END RIGHT CONTACTS-->

                </div>
            </div>
        </div>

</body>
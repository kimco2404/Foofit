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
    $less->compileFile('less/335.less', 'css/335.css');
    ?>
    <link href="css/335.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-335">
        <div class="container sidebar">
            <div class="row">
                <!--INTRODUCTION-->
                <div class="col-md-8"></div>
                <!--END INTRODUCTION-->

                <!--RIGHT SIDE BAR-->
                <div class="col-md-4">
                    
                    <!--WIDGET TOP WORKS-->
                    <div class="widget topworks">
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
                    </div>
                    <!--/END WIDGET TOP WORKS-->

                    

                </div>
                <!--/END RIGHT SIDE BAR-->

            </div>
        </div>
    </div>

</body>
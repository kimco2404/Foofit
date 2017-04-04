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
    $less->compileFile('less/326.less', 'css/326.css');
    ?>
    <link href="css/326.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />

</head>

<body>

    <div class="type-326">
        <div class="container sidebar">
            <div class="row">
                <!--LEFT SIDE BAR-->
                <div class="col-md-8">

                    <!--LIST HEADLINES-->
                    <div class="headlines">
                        <ul>
                            <li>
                                <div class="headlinesdate">
                                    <div class="headlinesdm">
                                        <div class="headlinesday">21</div>
                                        <div class="headlinesmonth">09</div>
                                    </div>
                                    <div class="headlinesyear">14</div>
                                </div>
                                <div class="headlinestitle">
                                    <a href="#">CSS Image Sprites</a>                
                                </div>
                            <li>
                                <div class="headlinesdate">
                                    <div class="headlinesdm">
                                        <div class="headlinesday">21</div>
                                        <div class="headlinesmonth">09</div>
                                    </div>
                                    <div class="headlinesyear">14</div>
                                </div>
                                <div class="headlinestitle">
                                    <a href="#">CSS Image Sprites CSS Image Sprites CSS Image Sprites CSS Image Sprites</a>                
                                </div>
                            </li>
                            <li>
                                <div class="headlinesdate">
                                    <div class="headlinesdm">
                                        <div class="headlinesday">21</div>
                                        <div class="headlinesmonth">09</div>
                                    </div>
                                    <div class="headlinesyear">14</div>
                                </div>
                                <div class="headlinestitle">
                                    <a href="#">CSS Image Sprites CSS Image Sprites</a>                
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <!--/END LIST HEADLINES-->

                    <!--PAGINATION-->
                    <div class="pagination-center">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li class="next">
                                <a href="#">→</a>
                            </li>
                        </ul>     
                    </div>
                    <!--/END PAGINATION-->

                </div>
                <!--/END LEFT SIDE BAR-->

                <div class="col-md-4"></div>

            </div>
        </div>
    </div>

</body>
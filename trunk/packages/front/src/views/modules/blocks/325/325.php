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
    $less->compileFile('less/325.less', 'css/325.css');
    ?>
    <link href="css/325.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />

</head>

<body>

    <div class="type-325">
        <div class="container sidebar">
            <div class="row">
                <!--CONTENTS LEFT-->
                <div class="col-md-8">

                    <!--LIST NEWS-->
                    <div class="list_news">
                        <div class="list_new_view">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/php.jpg">
                                    </div>
                                </div>
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">21</span><br>
                                            <span class="topnewsmonth">Tháng 09</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4><a href="#">PHP5 và những cải tiến vượt bậc</a></h4>
                                            <p>
                                                Công nghệ mới PHP5 và những cải tiến hỗ trợ developer lập trình tốt hơn so với các phiên bản trước đó.
                                                <a href="#">[...]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list_new_view">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/php.jpg">
                                    </div>
                                </div>
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">21</span><br>
                                            <span class="topnewsmonth">Tháng 09</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4><a href="#">PHP5 và những cải tiến vượt bậc</a></h4>
                                            <p>
                                                Công nghệ mới PHP5 và những cải tiến hỗ trợ developer lập trình tốt hơn so với các phiên bản trước đó.
                                                <a href="#">[...]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list_new_view">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="images/php.jpg">
                                    </div>
                                </div>
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">21</span><br>
                                            <span class="topnewsmonth">Tháng 09</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4><a href="#">PHP5 và những cải tiến vượt bậc</a></h4>
                                            <p>
                                                Công nghệ mới PHP5 và những cải tiến hỗ trợ developer lập trình tốt hơn so với các phiên bản trước đó.
                                                <a href="#">[...]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/END LIST NEWS-->

                </div>
                <!--/END CONTENTS LEFT-->

                <div class="col-md-8"></div>

            </div>
        </div>
    </div>

</body>
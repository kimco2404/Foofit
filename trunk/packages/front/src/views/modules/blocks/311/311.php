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
    $less->compileFile('less/311.less', 'css/311.css');
    ?>
    <link href="css/311.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-311">
        <div class="container news">
            <div class="row">
            <!--TOP NEWS-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="top_news_block">
                        <div class="top_news_block_thumb">
                            <img src="images/news-3.jpg" alt=""/>
                        </div>
                        <div class="top_news_block_desc">
                            <div class="row">
                                <div class="col-md-4 col-xs-3">
                                    <span class="topnewsdate">19</span><br>
                                    <span class="topnewsmonth">Tháng 01</span><br>
                                </div>
                                <div class="col-md-8 col-xs-9 shortdesc">
                                    <h4>
                                        <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            </h4>
                                    <p>Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).<a href="#">[...]</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="top_news_block">
                        <div class="top_news_block_thumb">
                            <img src="images/news-3.jpg" alt=""/>
                        </div>
                        <div class="top_news_block_desc">
                            <div class="row">
                                <div class="col-md-4 col-xs-3 topnewstime">
                                    <span class="topnewsdate">19</span><br>
                                    <span class="topnewsmonth">Tháng 01</span><br>
                                </div>
                                <div class="col-md-8 col-xs-9 shortdesc">
                                    <h4>
                                        <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            </h4>
                                    <p>Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).<a href="#">[...]</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="top_news_block">
                        <div class="top_news_block_thumb">
                            <img src="images/news-3.jpg" alt=""/>
                        </div>
                        <div class="top_news_block_desc">
                            <div class="row">
                                <div class="col-md-4 col-xs-3 topnewstime">
                                    <span class="topnewsdate">19</span><br>
                                    <span class="topnewsmonth">Tháng 01</span><br>
                                </div>
                                <div class="col-md-8 col-xs-9 shortdesc">
                                    <h4>
                                        <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            </h4>
                                    <p>Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).<a href="#">[...]</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            <!--END TOP NEWS-->   
            </div>
        </div>
    </div>
</body>


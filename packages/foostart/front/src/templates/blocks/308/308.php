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
    $less->compileFile('less/308.less', 'css/308.css');
    ?>
    <link href="css/308.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

</head>

<body>

    <div class="type-308">
        <div class="container content">
            <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-8">
                    <!--CONTENTS INTRO-->
                    <div class="widget intro">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Khoa Công nghệ thông tin <br><span>Trường Cao đẳng Công nghệ Thủ Đức</span></h2>
                            </div>
                            <div class="crossedbg"></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Khoa Công nghệ Thông tin Trường Cao đẳng Công nghệ Thủ Đức được thành lập năm 2008, trên cơ sở Khoa Công Nghệ Thông Tin trường Trung Cấp Kỹ Thuật và Nghiệp Vụ Thủ Đức.</p>
                                        <p>Khoa Công Nghệ Thông Tin có nhiệm vụ đào tạo:</p>
                                        <p>- Đào tạo Cử nhân Cao đẳng ngànnh Công nghệ Thông tin, Truyền thông và Mạng máy tính.</p>
                                        <p>- Đào tạo hệ TCCN các ngành Tin học ứng dụng, Truyền thông đa phương tiện. <a href="gioi-thieu">[...]</a></p>
                                    </div>
                                    <div class="col-md-6">
                                        <img alt="Khoa Công nghệ thông tin - Cao đẳng Công nghệ Thủ Đức" src="images/aboutfit.jpg">
                                    </div>
                                </div>                    
                            </div>
                        </div>	
                        <div class="divider"></div>
                    </div>
                    <!--/END CONTENTS INTRO-->

                </div>

            </div>
        </div>
    </div>

</body>
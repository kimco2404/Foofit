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
    $less->compileFile('less/332.less', 'css/332.css');
    ?>
    <link href="css/332.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />

</head>

<body>

    <div class="type-332">
        <div class="container address">
            <div class="row">

                <!--LEFT ADDRESS-->
                <div class="col-sm-6 col-md-6"></div>
                <!--/END LEFT ADDRESS-->

                <!--RIGHT CONTACTS-->
                <div class="col-sm-6 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Liên hệ<br><span>Với chúng tôi</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <!--CONTACT FORM-->
                            <form role="form" id="feedbackForm" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên">
                                    <span class="help-block" style="display: none;">Please enter your name.</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
                                </div>
                                <div class="form-group">
                                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Lời nhắn"></textarea>
                                    <span class="help-block" style="display: none;">Please enter a message.</span>
                                </div>
                                <br>
                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Vì lý do bảo mật, xin vui lòng điền mã hiển thị bên trên">
                                    <span class="help-block" style="display: none;">Please enter the code displayed within the image.</span>
                                </div>
                                <span class="help-block" style="display: none;">Please enter a the security code.</span>
                                <button type="submit" id="feedbackSubmit" name="feedbackSubmit" class="btn btn-primary btn-lg" style="display: block; margin-top: 10px;">Gửi</button>
                            </form>
                            <!--/END CONTACT FORM-->
                        </div>
                    </div>			
                </div>
                <!--/END RIGHT CONTACTS-->

            </div>
        </div>
    </div>

</body>
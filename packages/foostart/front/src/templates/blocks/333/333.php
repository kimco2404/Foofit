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
    $less->compileFile('less/333.less', 'css/333.css');
    ?>
    <link href="css/333.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-333">
        <div class="container intro">
            <div class="row">
                <!-----INTRODUCTION------> 
                <div class="col-md-8">
                    <div class="row title">
                        <div class="col-md-10 col-xs-9">
                            <h1>Giới thiệu</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><div class="overviewline"></div></div>
                    </div>
                    <div class="row maincontent">
                        <div class="col-md-12">
                            <p>
                            <strong>1. GIỚI THIỆU</strong><br>
                            <em><strong>1.1. Lịch Sử Hình Thành Và Phát Triển</strong></em>
                            </p>
                    <div style="text-align: center;">
                        <img src="images/tdc-1.jpg" alt=""/>
                    </div>
                    &nbsp;

                    <div style="text-align: center;">
                        <img src="images/tdc-2.jpg" alt=""/>
                    </div>
                    <div style="text-align: center;">
                        <em>GIảng viên - Nhân viên&nbsp;Khoa Công nghệ thông tin</em>
                    </div>
                    <br>
                    <strong>Khoa Công nghệ Thông tin Trường Cao đẳng Công nghệ Thủ Đức</strong> được thành lập năm 2008, trên cơ sở Khoa Công Nghệ Thông Tin trường Trung Cấp Kỹ Thuật và Nghiệp Vụ Thủ Đức.<br>
                    Với đội ngũ cán bộ giảng dạy và nghiên cứu nhiều kinh nghiệm, đã hoặc đang làm việc thực tế ở các công ty, chúng tôi tự hào luôn mang đến một môi trường học tập tiên tiến, sáng tạo, năng động, phù hợp với thực tiễn doanh nghiệp. Các lĩnh vực nghiên cứu và giảng dạy của khoa rất đa dạng và phong phú, tập trung ở các chuyên ngành ứng với bốn bộ môn: Tin học cơ sở, Công nghệ phần mềm, Mạng máy tính và Đồ họa.
                    <div style="text-align: center;">
                        <img src="images/tdc-3.jpg" alt=""/>
                    </div>

                    <div style="text-align: center;">
                        <em>Bộ môn Tin học cơ sở - Khoa CNTT</em><br>
                    &nbsp;
                    </div>

                    <div style="text-align: center;">
                        <img src="images/tdc-4.jpg" alt=""/>
                    </div>

                    <div style="text-align: center;">
                        <em style="font-size: 13px; line-height: 20.7999992370605px; text-align: center;">Bộ môn Công nghệ phần mềm&nbsp;- Khoa CNTT</em><br>
                        <br>
                            <img src="images/tdc-5.jpg" alt=""/>
                        <br>
                        <em style="font-size: 13px; line-height: 20.7999992370605px; text-align: center;">Bộ môn Mạng máy tính&nbsp;- Khoa CNTT</em><br>
                        <br>
                            <img src="images/tdc-6.jpg" alt=""/>
                        <br>
                        <em style="font-size: 13px; line-height: 20.7999992370605px; text-align: center;">Bộ môn Đồ họa&nbsp;- Khoa CNTT</em>
                        </div>
                    <br>
                    Chương trình đào tạo của khoa được xây dựng công phu với sự tham khảo chương trình của nhiều trường đại học, cao đẳng nổi tiếng trong nước và quốc tế. Nhờ đó, hầu hết sinh viên ra trường đều đã có việc làm với công việc ổn định, phù hợp với ngành nghề đã được đào tạo. Bên canh đó, một số cựu sinh viên&nbsp;sẵn sàng hỗ trợ sinh viên các khóa sau như hướng nghiệp, giới thiệu việc làm.&nbsp;Ngoài ra, sinh viên của khoa cũng đạt giải cao trong các kỳ thi tay nghề trẻ, học sinh giỏi nghề do thành phố tổ chức.<br>
                    <br>
                        <img src="images/tdc-7.jpg" alt=""/>
                    <div style="text-align: center;">
                        <em>Sinh viên&nbsp;Khoa CNTT giao lưu, học tập với sinh viên ĐH&nbsp;Singapore Polytechnic</em>
                    </div>
                    ​<br>
                    Với lợi thế là một khoa có nhiều giảng viên trẻ nên môi trường làm việc của khoa rất thân thiện, gần gũi với sinh viên. Ngoài ra, ban lãnh đạo khoa luôn có nhiều chính sách tốt để bồi dưỡng chuyên môn, tạo cơ hội thăng tiến cho những người có năng lực phát triển và thu hút nhân tài.<br>
                    <br>
                    <em><strong>1.2.&nbsp;Chức Năng - Nhiệm vụ</strong></em><br>
                    Khoa Công nghệ Thông tin có chức năng, nhiệm vụ sau:
                    <ul>
                        <li>Đào tạo Cử nhân Cao đẳng ngànnh&nbsp;Công nghệ Thông tin,&nbsp;Truyền thông và&nbsp;Mạng máy tính.</li>
                        <li>Đào tạo hệ TCCN các ngành Tin học ứng dụng, Truyền thông đa phương tiện.</li>
                        <li>Trang bị kiến thức cơ bản về CNTT cho sinh viên các hệ, các khoa không chuyên.</li>
                        <li>Bồi dưỡng, cập nhật kiến thức CNTT cho đội ngũ cán bộ theo yêu cầu chuẩn hóa đội ngũ và nâng cao trình độ chuyên môn theo yêu cầu công tác.</li>
                        <li>Tổ&nbsp;chức các hoạt động nghiên cứu khoa học, triển khai ứng dụng CNTT ở các mức độ từ cấp trường, cấp Thành phố…</li>
                        <li>Thực hiện hợp tác với doanh nghiệp với các cơ sở đào tạo trong và ngoài nước nhằm nâng cao chất lượng đào tạo, nghiên cứu khoa học của khoa.</li>
                    </ul>
                        <img src="images/tdc-8.jpg" alt=""/>
                    <br>
                    <br>
                    <em><strong>1.3. Cơ sở vật chất</strong></em><br>
                    Khoa CNTT sử dụng 17 phòng máy dành cho việc giảng dạy theo phương châm “lý thuyết đi đôi với thực hành”. Mỗi phòng học đều được trang bị đầy đủ các thiết bị nhằm đảm bảo điều kiện học tập tốt nhất cho sinh viên như: máy có cấu hình mạnh, internet tốc độ cao, máy chiếu, âm thanh, thiết bị thực hành mạng…<br>
                    <br>
                        <img src="images/tdc-9.jpg" alt=""/>
                    <br>
                    <br>
                    Trong đó, có các phòng thực hành chuyên biệt của bộ môn với các trang thiết bị thích hợp cho từng yêu cầu cụ thể của từng môn học như:
                    <ul>
                            <li>Phòng thực hành các môn ứng dụng - phần mềm.</li>
                            <li>Phòng thực hành Đồ hoạ; Thiết kế Web.</li>
                            <li>Phòng thực hành Lắp ráp; Cấu trúc máy tính.</li>
                            <li>Phòng thực hành Quản trị mạng.</li>
                    </ul>
                    
                    <img src="images/tdc-10.jpg" alt=""/>
                    <div style="text-align: center;">
                        <em>Phòng thực hành&nbsp;Quản trị mạng</em>
                    </div>
                    <br>
                    
                    <img src="images/tdc-11.jpg" alt=""/>
                    <div style="text-align: center;">
                        <em>Giờ thực hành chuyên ngành Truyền thông đa phương tiện</em>
                    </div>
                    <br>
                    
                    <img src="images/tdc-12.jpg" alt=""/>
                    <div style="text-align: center;">
                        <em>Giờ học lý thuyết</em>
                    </div>
                    <br>
                    
                    <img src="images/tdc-13.jpg" alt=""/>
                    <div style="text-align: center;">
                        <em>Giờ tự học của sinh viên tại thư viện</em>
                    </div>
                    <br>
                    
                    <img src="images/tdc-14.jpg" alt=""/>
                    <div style="text-align: center;">
                        <em>Khuôn viên trường thoáng mát, yên tĩnh dành cho sinh viên</em>
                    </div>
                    <br>
                    
                    <em><strong>2. CƠ CẤU TỔ CHỨC<br>
                    2.1. Ban lãnh đạo Khoa</strong></em><br>
                    Trưởng khoa: ThS. Võ Thành Trung<br>
                    <em><strong>2.2. Bộ môn</strong></em><br>
                    Bộ môn Tin học cơ sở -&nbsp;Trưởng bộ môn: Cô Lâm Thị Phương Thảo<br>
                    Bộ môn Công nghệ phần mềm -&nbsp;Trưởng bộ môn: ThS. Phan Thị Thể<br>
                    Bộ môn Mạng máy tính -&nbsp;Trưởng bộ môn: ThS. Lê Diên Tâm<br>
                    Bộ môn Đồ hoạ -&nbsp;Trưởng bộ môn: Cô Trần Thị Minh Sa
                    <p></p>
                        </div>
                    </div>
                </div>
                <!-----END INTRODUCTION------>
                <!------SIDEBAR-->
                <div class="col-md-4">
                    
                </div>
                <!-----END SIDEBAR-->
            </div>
        </div>
    </div>
</body>



<!--MENU-->
<div class="type-342">
    <div class="container top-menu">
        <!--TOP MENU-->
        <!--BUTTON MENU-->
        <div class="">
            <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
            <div class="clear"></div>
        </div>

        <!--END BUTTON MENU-->            
        <!--MENU-->
        <div class="menu">
            <ul class="nav-menu collapse collapse-top-menu">
                <li class="item active"><a href="#"> Trang Chủ </a></li>
                <li class="item"><a href="{{route('gioithieu')}}"> Giới Thiệu </a></li>
                <li class="item"><a href="{{route('tuyensinh')}}"> Tuyển Sinh </a></li>
                <li class="item"><a href="{{route('brochure')}}"> Brochure </a></li>
                <li class="item"><a href="{{route('lienhe')}}"> Liên Hệ</a></li>
                <div class="clear"></div>
            </ul>
            <div class="clear"></div>
        </div>
        <!--END MENU-->
        <!--END TOP MENU-->
    </div>
</div>
<!--END MENU-->

<!--MENU BLOCK-->
<div class="type-343">
    <div class="container top-menu" style="position: relative">
        <!--MENU-->
        <div class="left-bg">&nbsp;</div>
        <!--END MENU-->
        <div class="container top-menu">
            <!--LOGO-->
            <div class="logo">
                <a href="#">
                    <img alt="TDC-Khoa CNTT logo" src="{{asset('front/images/logo.png')}}">
                </a>
                <span class="triangle-arrow">&nbsp;</span>
            </div>
            <!--END LOGO-->
            <!--MAIN MENU-->
            <div class="">
                <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                <div class="clear"></div>
            </div>
            <div class="navbar-collapse ">
                <ul class="nav navbar-nav navbar-right collapse collapse-top-menu"> 
                    <li class="item active"><a href="#">TIN TỨC</a></li>
                    <li class="item"><a href="#">GIẢNG VIÊN</a></li>
                    <li class="item"><a href="#">SINH VIÊN</a></li>
                    <li class="item"><a href="#">CHUYÊN ĐỀ</a></li>
                    <li class="item"><a href="#">ĐÀO TẠO</a></li>
                </ul>
            </div>
            <!--END MAIN MENU-->              
        </div>
    </div>

</div>
<!--END MENU BLOCK-->

<!--SLIDER-->
<div class="type-302">
    <div class="container slideshow">
        <!--SLIDE SHOW-->
        <div class="swiper-container">
            <!--SLIDE BANNER-->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="{{asset('front/images/banner3.jpg')}}" alt=""/>
                    </a>
                    <div class="content-slide-show">
                        <h3 class="title" data-swiper-parallax="-100">Ra mắt <br><span class="subtitle">Logo Khoa CNTT</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="{{asset('front/images/banner2.jpg')}}" alt=""/>
                    </a>
                    <div class="content-slide-show">
                        <h3 class="title" data-swiper-parallax="-100"><span class="subtitle">Chào mừng Tân Sinh viên</span><br>Khóa 2016</h3>
                    </div>       
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="{{asset('front/images/banner1.jpg')}}" alt=""/>
                    </a>   
                    <div class="content-slide-show">
                        <h3 class="title" data-swiper-parallax="-100"><span class="subtitle">Khoa CNTT</span><br>Trường CĐ Công Nghệ Thủ Đức</h3>
                    </div>    
                </div>
            </div>
            <!--END SLIDE BANNER-->

            <!--PAGINATION-->
            <div class="swiper-pagination"></div>
            <!--END PAGINATION-->
            <!--ARROWS -->
            <div class="swiper-button-next"><span class="btn-next fa fa-chevron-right"></span></div>
            <div class="swiper-button-prev"><span class="btn-prev fa fa-chevron-left"></span></div>
            <!--END ARROWS-->
        </div>
        <!--END SLIDE SHOW-->
    </div>
</div>
<!--END SLIDER-->

<!--CONTENT-->
<div class="type-307">
    <div class="container sidebar">
        <div class="row">

            <!--LEFT SIDE BAR-->
            <div class="col-md-4">
                <!--WIDGET IMAGES ENROLLMENT-->
                <div class="widget html">
                    <div style="margin-top: 45px;">
                        <a href="#">
                            <img src="{{asset('front/images/tuyensinh.gif')}}" style="max-width: 100%; width: 100%;">
                        </a>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END WIDGET IMAGES ENROLLMENT-->

                <!--WIDGET TOP EVENTS-->
                <div class="widget topevents">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Sự kiện <br><span>Hoạt động</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="bodytimeline">
                            <ul class="timeline">
                                <!--TOP EVENTS LEFT-->
                                <li>
                                    <div class="timeline-badge "></div>
                                    <div class="timeline-panel">
                                        <div class="eventtime">
                                            <div class="eventtimecover">
                                                <div class="eventdm">
                                                    <div class="eventday">14</div>
                                                    <div class="eventmonth">01</div>
                                                </div>
                                                <div class="eventyear">'17</div>
                                            </div>
                                        </div>
                                        <div class="eventdetails">
                                            <div class="eventlocation">
                                                Hội trường H
                                            </div>
                                            <div class="eventdesc">
                                                <a href="#">Hội nghị học tập, quán triệt nghị quyết TW4 và chỉ thị 05</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--/END TOP EVENTS LEFT-->

                                <!--TOP EVENTS RIGHT-->

                                <!--/END TOP EVENTS RIGHT-->
                            </ul>
                        </div>
                        <div class="crossedbg"></div>
                    </div>

                    <div class="divider"></div>
                </div>
                <!--/END WIDGET TOP EVENTS-->

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

                <!--WIDGET TOP ALUMNUS-->
                <div class="widget topalumnuS">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Cựu sinh viên <br><span>Thông tin cần biết</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">Làm thế nào học tiếng Anh với 15 phút mỗi ngày?</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Ứng đối trôi chảy</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Bản đồ tư duy</a>                       
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Kỹ năng giao tiếp</a>                        
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Phân tích SWOT</a>                        
                                </li>
                            </ul>
                        </div>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END WIDGET TOP ALUMNUS-->
            </div>
            <!--/END LEFT SIDE BAR-->


            <!--RIGHT CONTENTS HOME-->
            <div class="col-md-8">

                <div class="widget topnews">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tin tức <br><span>Thông báo</span></h2>
                        </div>
                        <div class="panel-body news">
                            <!--TOP NEWS-->
                            <div class="topnews">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4 topnewstime">
                                                <span class="topnewsdate">19</span><br>
                                                <span class="topnewsmonth">Tháng 01</span><br>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="topnewsthumb">
                                                    <img src="{{asset('front/images/hinh1.jpg')}}">
                                                </div>
                                                <h4>
                                                    <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            
                                                </h4>
                                                <div class="topnewsdesc">
                                                    Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).
                                                    <a href="#">[...]</a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4 topnewstime">
                                                <span class="topnewsdate">12</span><br>
                                                <span class="topnewsmonth">Tháng 01</span><br>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="topnewsthumb">
                                                    <img src="{{asset('front/images/hinh2.jpg')}}">
                                                </div>
                                                <h4>
                                                    <a href="#">Đại diện HCA đến thăm và làm việc cùng Trường Cao đẳng Công nghệ Thủ Đức</a>                            
                                                </h4>
                                                <div class="topnewsdesc">
                                                    Sáng ngày 10/01, ông Vũ Anh Tuấn – Tổng Thư ký Hội tin học TP.Hồ Chí Minh (Ho Chi Minh City Computer Assosiation – HCA) và các thành viên khác của Hội đã đến thăm và làm việc với lãnh đạo Trường Cao đẳng Công nghệ Thủ Đức (TDC).
                                                    <a href="#">[...]</a>                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/END TOP NEWS-->

                            <!--LINK HEADLINES TOP NEWS-->
                            <div class="headlines">
                                <ul>
                                    <li>
                                        <div class="headlinesdate">
                                            <div class="headlinesdm">
                                                <div class="headlinesday">30</div>
                                                <div class="headlinesmonth">12</div>
                                            </div>
                                            <div class="headlinesyear">16</div>
                                        </div>
                                        <div class="headlinestitle">
                                            <a href="#">Trường Cao đẳng Công nghệ Thủ Đức trở thành thành viên thứ 334 của Hội Tin học TP. Hồ Chí Minh</a>                    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="headlinesdate">
                                            <div class="headlinesdm">
                                                <div class="headlinesday">23</div>
                                                <div class="headlinesmonth">12</div>
                                            </div>
                                            <div class="headlinesyear">16</div>
                                        </div>
                                        <div class="headlinestitle">
                                            <a href="#">Để không thất nghiệp sau tốt nghiệp: Ngành công nghệ thông tin 'nóng' đến mức nào?</a>                    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="headlinesdate">
                                            <div class="headlinesdm">
                                                <div class="headlinesday">20</div>
                                                <div class="headlinesmonth">10</div>
                                            </div>
                                            <div class="headlinesyear">16</div>
                                        </div>
                                        <div class="headlinestitle">
                                            <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>                    
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--/END LINK HEADLINES TOP NEWS-->
                            <a class="newsall" href="#">Xem tất cả tin tức</a>
                        </div>
                    </div>	
                    <div class="divider"></div>
                </div>

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
                                    <img alt="Khoa Công nghệ thông tin - Cao đẳng Công nghệ Thủ Đức" src="{{asset('front/images/aboutfit.jpg')}}">
                                </div>
                            </div>                    
                        </div>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END CONTENTS INTRO-->

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
                                    <img onclick="zoomFunction(0)" class="myImg" src="{{asset('front/images/ms.gif')}}" alt="Microsoft IT Academy">
                                    <img class="myImg2" src="{{asset('front/images/ms_cert.gif')}}">
                                </div>
                                <div class="modal myModal">
                                    <span onclick="exitFunction(0)" class="close">×</span>
                                    <div class="caption"></div>
                                    <img class="modal-content img01">  
                                </div>                                                                     
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img onclick="zoomFunction(1)" class="myImg" src="{{asset('front/images/cisco.gif')}}" alt="Cisco Networking Academy">
                                    <img class="myImg2" src="{{asset('front/images/cisco_cert.gif')}}">
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
                                    <img class="img-responsive" src="{{asset('front/images/9e407b891b.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/9e9e60e44e.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/ab645dde3c.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/9e4a5e2c0f.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/9e5de453d8.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">{{asset('front/images/9e6df75452.png')}}
                                    <img class="img-responsive" src="{{asset('front/images/9e6df75452.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/9e73406038.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/9e7f6f17d1.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/9e944c4e1f.png')}}">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/logo-3t.png')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/bk.gif')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/chanchinh.gif')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/hk.gif')}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="{{asset('front/images/pnc.gif')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>



                <!--/END LEFT SIDE BAR-->

                <!--RIGHT SIDE BAR-->
                <div class="widget toptechnologies">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Bài viết <br><span>Học thuật</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 toparticle">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('front/images/files.png')}}">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                
                                    </h4>
                                    <div class="desc">
                                        (PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.                    
                                        <a href="#">[...]</a>                
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp_Phần 1</a>                        
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Quên SSD đi, SSHD mới là chiếc ổ cứng thỏa mãn mơ ước của bạn</a>                        
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Microsoft chính thức “kết liễu” Windows 7 và Windows 8</a>                        
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Đo tốc độ Internet bằng Google Search</a>                        
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">3 cách giúp tăng tốc Internet nhanh hơn 20%</a>                        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="divider"></div>
                    <!--/END WIDGET TOP TECHNOLOGIES-->

                </div>


            </div>
            <!--/END RIGHT CONTENTS HOME-->
        </div>
    </div>
</div>

<!--END CONTENT-->

<!--FOOTER-->
<div class="type-300">

    <!--FOOTER-->
    <footer>
        <div class="container intro">
            <div class="row">
                <!--FOOTER INTRODUCTION-->
                <div class="col-md-4">
                    <div class="footer-info">
                        <h4>KHOA CÔNG NGHỆ THÔNG TIN<br>
                            Trường Cao Đẳng Công Nghệ Thủ Đức</h4>
                        <p>53 Võ Văn Ngân, P.Linh Chiểu, Q.Thủ Đức, Tp.HCM</p>
                        <p>Điện thoại: (08) 22 158 642</p>
                        <p>Fax: 08.38962474</p>
                        <p>Email: cntt@mail.tdc.edu.vn</p>
                    </div>
                </div>
                <!--/END FOOTER INTRODUCTION-->

                <!--FOOTER LINK-->
                <div class="col-md-4">
                    <ul class="bottom-link">
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Trường Cao Đẳng Công Nghệ Thủ Đức</a></li>
                    </ul>
                </div>
                <!--/END FOOTER LINK-->

                <!--FOOTER COPYRIGHT-->
                <div class="col-md-4 ">
                    <ul class="bottom-link">
                        <li><a href="#">Liên hệ</a></li>
                        <li>2017 <a href="#">Khoa Công nghệ thông tin | Cao đẳng Công nghệ Thủ Đức</a> All Rights Reserved.</li>
                    </ul>
                </div>
                <!--/END FOOTER COPYRIGHT-->
            </div>
        </div>
    </footer>
    <!--/END FOOTER-->

</div>
<?php

    include "dangky.php";
?>


<head>
    <title>BARBER VÀNG ĐEN</title>
    <link rel="stylesheet" href="CSS/Index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
    <section id ="banner">
        <!-- <img src="IMG/tiem-toc-nam-tp-hcm-7.jpg"> -->
        <a href="http://localhost/BC/index.php"><img src="IMG/Logo.png" class="logo"></a>
        <div class = "banner-text"> 
            <h1><B>BARBER VÀNG ĐEN</B></h1>
            <p>Tạo Kiểu Tóc Là Tạo Phong Cách Sống Cho Riêng Bạn</p>
            <div class="banner-btn">
            <a href="http://localhost/BC/Dang Ky Dat Cho.php" target="_blank"><span></span>Trải Nghiệm Ngay</a>
            <a href="IMG/Bang Gia.jpg" target="_blank">Bảng Giá Dịch Vụ<span></span></a>
            <a href="#feature"><span></span>Xem Thêm Về Shop</a>
        </div>
    </div>
</section>

    <!--tạo thanh menu-->
    <div id="sideNav">
        <nav>
            <ul>
                <li><B><a href="#banner">TRANG CHỦ</a></B></li>
                <li><B><a href="#service">DỊCH VỤ</a></B></li>
                <li><B><a href="#trend">XU HƯỚNG TÓC</a></B></li>
                <li><B><a href="#ratee">CHẤT LƯỢNG</a></B></li>
                <li><B><a href="#footer">LIÊN HỆ</a></B></li>
                <?php 
                        if(isset($_GET['customer_id'])){
                            Session::destroy();
                            header("Location:index.php");
                        }
                    ?>
                <?php 
                $login_check = Session::get('customer_login');
                if($login_check == false){
                    echo '<li><B><a href="http://localhost/BC/Dang Nhap.php">ĐĂNG NHẬP</a></B></li>';
                    echo '<li><B><a href="http://localhost/BC/Dang Ky Tai Khoan.php">ĐĂNG KÝ</a></B></li>';
                }else{
                    echo '<li><B><a href="?customer_id='.Session::get('customer_id').'">ĐĂNG XUẤT</a></B></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>

    <div id="menuBTN">
        <img src ="IMG/menu icon.png" id="menu">
    </div>

    <script>
        var menuBTN = document.getElementById("menuBTN")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        
        sideNav.style.left = "-250px";

        menuBTN.onclick = function(){
            if(sideNav.style.left == "-250px"){
                sideNav.style.left = "0";
                menu.src = "IMG/menu icon.png";
            }
            else{
                sideNav.style.left = "-250px";
                menu.src = "IMG/menu icon.png";
            }
        }
    </script>

    <!--đặc trưng-->
    <section id="feature">
        <div class="title-textt">
            <p>ĐẶC TRƯNG</p>
            <h1>TẠI SAO KHÁCH HÀNG CHỌN CHÚNG TÔI</h1>          
        </div>
    <div class="feature-box">
        <div class="features">
            <h1><B>Nhân Viên Dày Dặn Kinh Nghiệm</B></h1>
            <div class="features-desc">
                <div class="feature-text">
                    <p>Với đội ngũ nhân viên dày dặn kinh nghiệm, chúng tôi cam kết mang đến cho bạn những phút giây trải nghiệm thoải mái và thư giãn nhất khi đến với Barber Vàng Đen!</p>
                </div>
            </div>
            <h1><B>Đặt Lịch Cắt Tóc Trực Tuyến</B></h1>
            <div class="features-desc">
                <div class="feature-text">
                    <p>Barber Vàng Đen có dịch vụ đặt chỗ bằng hình thức online, bạn sẽ được giảm giá ngay 10% tất cả các dịch vụ khác tại barber chúng tôi.</p>
                </div>
            </div>
            <h1><B>Giá Cả Phải Chăng</B></h1>
            <div class="features-desc">
                <div class="feature-text">
                    <p>Tuy mang tên là một barber shop tại Thành Phố Hồ Chí Minh, nhưng giá dịch vụ rất phải chăng. Chúng tôi cam kết sẽ đem lại cho bạn những trải nghiệm tuyệt vời nhất. </p>
                </div>
            </div>
            <h1><B>Tận Tình và Tận Tâm</B></h1>
            <div class="features-desc">
                <div class="feature-text">
                    <p>Khi đến với chúng tôi bạn sẽ có được một trải nghiệm tuyệt vời và thư giãn nhất! Nơi đó được gọi là Barber</p>
                </div>
            </div>
        </div>
        <div class="features-img">
        </div>
    </div>
    </section>

    <!--dịch vụ-->

    <section id="service">
        <div class="title-texttt">
            <p>DỊCH VỤ</p>
            <h1>CHÚNG TÔI CUNG CẤP ĐẦY CÁC LOẠI DỊCH VỤ VỀ NGÀNH TÓC CHO KHÁCH HÀNG</h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <a href = "#"><img src="IMG/Service 1.jpg"></a>
                <div class="service-desc">
                    <h3 style = "color: red; font-size: 21px"><b>Cắt Tóc & Tạo Kiểu</b></h3>

                    <p> Quý khách sẽ được nhân viên chúng tôi tư vấn và tạo kiểu tóc phù hợp theo gương mặt của mình.</p>
                </div>
            </div>
            <div class="single-service">
                <a href = "#"><img src="IMG/Cao rau.jpeg"></a>
                <div class="service-desc">
                    <h3 style = "color: red; font-size: 21px"><b>Cạo Râu & Massage Mặt</b></h3>
                    
                    <p> Quý khách sẽ được nhân viên chúng tôi tư vấn và tạo kiểu tóc phù hợp theo gương mặt của mình.</p>
                </div>
            </div>
            <div class="single-service">
                <a href ="http://localhost/BC/Nhuom Nau Cao Cap.php"><img src="IMG/Nhuom Toc.jpg"></a>
                <div class="service-desc">
                    <h3 style = "color: red; font-size: 21px"><b></b>Nhuộm Tóc Tạo Màu Mới</b></h3>
                    
                    <p> Quý khách sẽ được nhân viên chúng tôi tư vấn và tạo kiểu tóc phù hợp theo gương mặt của mình.</p>
                </div>
            </div>
            <div class="single-service">
                <a href ="http://localhost/BC/Uon Toc.php"><img src="IMG/Duoi Toc.jpg"></a>
                <div class="service-desc">
                    <h3 style = "color: red; font-size: 21px;"><b>Duỗi Tóc & Uốn Tóc</b></h3>
                    
                    <p> Quý khách sẽ được nhân viên chúng tôi tư vấn và tạo kiểu tóc phù hợp theo gương mặt của mình.</p>
                </div>
            </div>
            <div class="single-service">
                <a href ="#"><img src="IMG/Dung cu cat toc.jpg"></a>
                <div class="service-desc">
                    <h3 style = "color: red; font-size: 21px"><b>Dụng Cụ Cắt Tóc</b></h3>
                    
                    <p style = "color: darkturquoise; font-size: 18px;"> Là nơi trao đổi, giao lưu buôn bán giữa các thợ cắt tóc.</p>
                </div>
            </div>
            <div class="single-service">
                <a href ="#"><img src="IMG/day-cat-toc-nu-chuyen-nghiep.jpg"></a>
                <div class="service-desc">
                    <h3 style = "color: red; font-size: 21px"><b>Cắt Tóc Nữ</b></h3>
                    
                    <p> Quý khách sẽ được nhân viên chúng tôi tư vấn và tạo kiểu tóc phù hợp theo gương mặt của mình.</p>
                </div>
            </div>
        </div>
    </section>

    <section id ="trendd">
        <div class="title-texttttt">
            <p>BLOG HÀNH TRÌNH TỎA SÁNG</p>
            <br>
            <h2>CÂU CHUYỆN CHÂN THỰC TỪ HÀNG CHỤC NGÀN KHÁCH HÀNG ĐÃ TRẢI NGHIỆM</h2>
            <br>   
        
        <div class="sliderr">
            <div class="img-box">
                <a href ="#"><img src="IMG/a.jpg" class="slider-img"><span></span></a>
            </div>
            <br>
            <button class="btn" onclick="prev()"><-</button>
            <button class="btn" onclick="next()">-></button>
        </div> 
        <script src="JS/main.js"></script>
    </section> 
    
   

    <section id="trend">
    <!--Xu hướng tóc-->
        <div class="title-texttttt">
            <p>CÁC KIỂU TÓC THỊNH HÀNH</p>
            <br>
            <h2>HÃY NGẮM NHÌN VÀ CHỌN LẤY KIỂU TÓC CHO RIÊNG MÌNH!</h2>
            <br>    
            <div class="slider">
                <div class="slides">
                    <input type ="radio" name = "radio-btn" id="radio1">
                    <input type ="radio" name = "radio-btn" id="radio2">
                    <input type ="radio" name = "radio-btn" id="radio3">
                    <input type ="radio" name = "radio-btn" id="radio4">
                    <input type ="radio" name = "radio-btn" id="radio5">
                    <input type ="radio" name = "radio-btn" id="radio6">
                    <input type ="radio" name = "radio-btn" id="radio7">
                    <input type ="radio" name = "radio-btn" id="radio8">
                    <input type ="radio" name = "radio-btn" id="radio9">
                    <input type ="radio" name = "radio-btn" id="radio10">
                    <!--radio btn end-->
                    <!--img slider start-->
                    <div class="slide first">
                        <a href="http://localhost/BC/Short Quiff.php"><img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Sport Nhuom Xanh Blue.php"><img src="IMG/sport-mau-nhuom-xanh-blue-nang-dong-hot-trend-2020-30shine.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Sport Nhuom Khoi Xanh.php"><img src="IMG/kien-thumbnail.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Short Quiff Cho Mat Beo.php"><img src="IMG/duc-anh-mat-beo-thumbnail.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Sport Ve Dep Lich Lam.php"><img src="IMG/sport-cuong-thumbail.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Side part Nau Khoi.php"><img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-thumbnail.png"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Sidepart mat vuong.php"><img src="IMG/lookbook-mat-vuong-thumb.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Hoang Dung.php"><img src="IMG/Ca-si-Hoang-Dung-Cat-Toc-Tai-30Shine-thumbnail.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Side part.php"><img src="IMG/lookbook-sidepart.jpg"></a>
                    </div>
                    <div class="slide">
                        <a href="http://localhost/BC/Mohican.php"><img src="IMG/lookbook-mohican.png"></a>
                    </div>
                     <!--img slide end-->
                     <!--navigation start-->
                     <div class="navigation-auto">
                        <div class="auto-bnt1"></div>
                        <div class="auto-bnt2"></div>
                        <div class="auto-bnt3"></div>
                        <div class="auto-bnt4"></div>
                        <div class="auto-bnt5"></div>
                        <div class="auto-bnt6"></div>
                        <div class="auto-bnt7"></div>
                        <div class="auto-bnt8"></div>
                        <div class="auto-bnt9"></div>
                        <div class="auto-bnt10"></div>
                     </div>
                     <!--navigation end-->
                </div>
               <div class="navigation-manual">
                   <label for="radio1" class="manual-btn"></label>
                   <label for="radio2" class="manual-btn"></label>
                   <label for="radio3" class="manual-btn"></label>
                   <label for="radio4" class="manual-btn"></label>
                   <label for="radio5" class="manual-btn"></label>
                   <label for="radio6" class="manual-btn"></label>
                   <label for="radio7" class="manual-btn"></label>
                   <label for="radio8" class="manual-btn"></label>
                   <label for="radio9" class="manual-btn"></label>
                   <label for="radio10" class="manual-btn"></label>
               </div>
            </div>

            <script type="text/javascript">
            var counter = 1;
                setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if(counter > 10){ 
                        counter=1;
                    }
                },3000);
            </script>
        </div>
        <br>
        <br>
        <br>
        <h5>Barber Vàng Đen rất hân hạnh được phục vụ quý khách.</h5>
    </section>

    <br>
    <br>

    <section id="camket">
    <div class="title-textttttt">
        <h1><B>CHÚNG TÔI CAM KẾT</B></h1>
        <br>
        <br>
        <img src="IMG/Cam Ket.png">
    </div>
    </section>

    <!--Khách hàng chấm rate-->    
    <section id="ratee">
        <div class="title-textttt">
            <p>REVIEW</p>
            <h1>KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</h1>
        </div>
        <div class="cmt-row">
            <div class="cmt-col">
                <div class="user">
                    <img src="IMG/People1.jpg">
                        <div class="user-info">
                            <h4>Ken Norman</h4>
                            <small>kennorman@gmail.com</small>
                    </div>
                </div>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>
            <div class="cmt-col">
                <div class="user">
                    <img src="IMG/People2.jpg">
                        <div class="user-info">
                            <h4>Ricky Star</h4>
                            <small>rickystar@gmail.com</small>
                    </div>
                </div>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
            <div class="cmt-col">
                <div class="user">
                    <img src="IMG/People3.jpg">
                        <div class="user-info">
                            <h4>Rhymastic</h4>
                            <small>Rhymastic@gmail.com</small>
                    </div>
                </div>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            </div>
        </div>
    </section>

    <br>
    <br>
    
    <div class="ssss">
        <a href="http://localhost/BC/Dang%20Ky%20Dat%20Cho.php"><img src="IMG/30Shine-dat-lich-ngay.jpg"></a>
    </div>
    <div class="sss">
        <p style="color: deeppink; font-size: 24px;"><b>ĐẾN VỚI CHÚNG TÔI NGAY HÔM NAY. SỰ HÀI LÒNG CỦA BẠN LÀ NIỀM VINH HẠNH VÀ HẠNH PHÚC CỦA CHÚNG TÔI!</b></p>
    </div>
    <br>
    <br>
    
    <!--chân page-->
    
    <section id="footer">
        <img src="" class="footer-img">
        <div class="title-texttttt">
            <h1>Chúng Tôi Luôn Chào Đón Bạn!</h1>
        </div>
    <div class="footer-row">
    <div class="footer-left">
        <h1>Giờ Phục Vụ</h1>
        <p>Thứ 2 đến Thứ 6 (7h đến 20h)</p>
        <p>Thứ 7, Chủ Nhật (8h đến 20h)</p>
        <p>Các ngày lễ, Tết (7h - 22h)</p>
    </div>
    <div class="footer-right">
        <h1>Thông Tin Liên Lạc</h1>
        <p>Địa Chỉ: 275 Kha Vạn Cân - Khu Phố 6 - Phường Hiệp Bình Chánh, Thành phố Thủ Đức</p>
        <p>barbervangden@gmail.com</p>
        <p>+01 23456789</p>
    </div>
    </div>

    <div class="links">
        <a href="https://www.facebook.com/Barber-V%C3%A0ng-%C4%90en-106181897457126"><img src="IMG/600px-Facebook-icon-1.png"></a>
        <a href="https://www.instagram.com/"><img src="IMG/600px-Instagram_icon.png"></a>
        <a href="https://twitter.com/"><img src="IMG/Twitter-Social-Icon.jpg"></a>
        <a href="https://www.youtube.com/"><img src="IMG/600px-YouTube_social_white_squircle_(2017).svg.png"></a>
        <p>Bài Báo Cáo Thực Tập - Sinh Viên Huỳnh Lâm Phú</p>
        <br>
        <p>Copyright 2021 Barber VangDen, Inc. All Rights Reserved</p>
    </div>
    </section>

    <script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
    });
    </script>
</body>
</html>
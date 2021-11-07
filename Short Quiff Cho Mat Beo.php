<?php

    include "dangky.php";
?>





<html>
<head>
    <title>Short Quiff Cho Mặt Béo Tròn</title>
    <link rel="stylesheet" href="CSS/Short Quiff fat.css">
</head>

<body>
<!--tạo thanh menu-->
<div id="sideNav">
    <nav>
        <ul>
            <li><B><a href="http://localhost/BC/index.php">TRANG CHỦ</a></B></li>
            <li><B><a href="http://localhost/BC/index.php#service">DỊCH VỤ</a></B></li>
            <li><B><a href="http://localhost/BC/index.php#trend">XU HƯỚNG TÓC</a></B></li>
            <li><B><a href="http://localhost/BC/index.php#ratee">CHẤT LƯỢNG</a></B></li>
            <li><B><a href="http://localhost/BC/index.php#footer">LIÊN HỆ</a></B></li>
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



<section id="matvuong">
    <div class="single-service">
        <img src="IMG/duc-anh-mat-beo-thumbnail.jpg">
        <div class="styee"><img src="IMG/Logo.png"></div> 
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
        <h3>"Mình là Đức Anh, 20 tuổi. Hiện tại mình đang nuôi kiểu tóc dài để rủ xuống mặt<br>nhưng có vẻ không hợp.”
        </h3>
    </div> 
    <div class="service-descc">
        <p>“Hôm nay mình đến Barber Vàng Đen để được tư vấn và thay đổi kiểu tóc mới phù hợp hơn. <br> Mình được Stylist tư vấn mặt tròn như mình nên để kiểu tóc Short Quiff.”
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-3.jpg">
    </div>  
   
    <div class="single-serviceee">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-4.jpg">
    </div>  
    <div class="abcc">
        <p>"Mình cũng lựa chọn nhuộm thêm màu nâu để sáng mặt hơn và trẻ trung hơn.
        </p>
    </div>
    <div class="abcc">
        <p>Cảm thấy rất hài lòng với kiểu tóc mới, trông trẻ hơn và đẹp trai hơn."
        </p>
    </div>  
</section>

<section id="matvuong3">    
   
    <div class="ss">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-5.jpg">
    </div>
    <div class="title-textttttt">
        <p>“Kiểu tóc mới này làm khuôn mặt mình đỡ tròn và cân đối hơn, mình cũng rất thích <br>màu tóc mới của mình. Có lẽ đây chính là kiểu tóc hợp khuôn mặt mình nhất từ trước tới giờ.”</p>
    </div>
</section>

<section id="matvuong4">    
    <div class="title-texttttttt">
    </div>
    <div class="sss">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-6.jpg">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-7.jpg">
    </div>
    <div class="sssa">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-8.jpg">
    </div>
    <br>
    <br>
    <br>
    <div class="ssss">
        <img src="IMG/short-quiff-kieu-toc-dep-cho-mat-beo-tron-2020-30shine-10.jpg">
    </div>
    <div class="sssss">
        <a href="http://localhost/BC/Dang Ky Dat Cho.php"><img src="IMG/30Shine-dat-lich-ngay.jpg"></a>
    </div>
    
</section>

<section id="footer">
    <img src="" class="footer-img">
    <div class="title-texttttttt">
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
    <p>+01 2345678</p>
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

</body>
</html>
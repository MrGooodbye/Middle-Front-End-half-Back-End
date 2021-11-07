<?php

    include "dangky.php";
?>



<html>
<head>
    <title>SPORT MÀU NHUỘM KHÓI XANH</title>
    <link rel="stylesheet" href="CSS/Sport Nhuom Khoi Xanh.css">
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
        <img src="IMG/sport-son-tung-mtp-mau-xanh-khoi-2020-30shine-1.jpg">
        <div class="styee"><img src="IMG/Logo.png"></div>
                <div class="service-desc">
                    <h1>SPORT</h1>
                    <p><U>MÀU NHUỘM KHÓI XANH</U></p>
                </div>     
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
        <h3>“Mình là Kiên. Mình được bạn bè giới thiệu tới Barber Vàng Đen để nhuộm tóc vì nghe nói các<br>
             màu nhuộm khói làm ở Barber Vàng Đen rất đẹp.”
        </h3>
    </div>
    <div class="single-servicee">
        <img src="IMG/sport-son-tung-mtp-mau-xanh-khoi-2020-30shine-2.jpg">
    </div>  
    <div class="service-descc">
        <p>“Mình được stylist tư vấn nhuộm xanh khói và cắt Sport. Mình rất ngạc nhiên vì nghĩ
        <br>
        màu tóc này sẽ khó để nhưng thật sự lại rất hợp với mình, kiểu tóc cũng giúp mình<br>
        trông đẹp trai hơn.”
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/sport-son-tung-mtp-mau-xanh-khoi-2020-30shine-3.jpg">
    </div>  
    <div class="title-textt">
        <p>“Mình thấy rất đúng đắn khi tin tưởng bạn mình giới thiệu tới Barber Vàng Đen. Chắc chắn<br>
            sau này mình sẽ trở thành khách hàng thường xuyên của Barber Vàng Đen.”
        </p>
    </div>
    <div class="abcc">
        <img src="IMG/sport-son-tung-mtp-mau-xanh-khoi-2020-30shine-4.jpg">
    </div>  
    <div class="title-texttt">
        <p>“Kiểu tóc mới, màu tóc mới đem đến cho mình một phong cách rất khác, nhưng rất<br>
            hợp với cá tính mạnh mẽ và thích sự nổi bật như mình.”
        </p>
    </div>  
</section>

<section id="matvuong3">    
    <div class="title-textttttt">
        <p>“Cảm ơn Barber Vàng Đen đã thực hiện cho mình kiểu tóc rất ưng ý. Mình rất thích luôn.”</p>
    </div>
    <div class="ss">
        <img src="IMG/sport-son-tung-mtp-mau-xanh-khoi-2020-30shine-6.jpg">
    </div>
    <div class="ssss">
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
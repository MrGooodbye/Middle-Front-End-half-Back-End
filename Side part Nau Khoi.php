<?php

    include "dangky.php";
?>

<html>
<head>
    <title>SIDE-PART
        MÀU NHUỘM NÂU KHÓI</title>
    <link rel="stylesheet" href="CSS/Side Part Nau Khoi.css">
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
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-thumbnail.png">
        <div class="styee"><img src="IMG/Logo.png"></div> 
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
    </div>
    <div class="service-descc">
        <p>“Mình là Trần Anh Dũng, 19 tuổi, là sinh viên năm nhất trường đại học Y Hà Nội”
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-2.png">
    </div>  
    <div class="title-textt">
        <p>“Hình tượng nam sinh và kiểu tóc này đã theo mình suốt 13 năm học. 
        <p>“Bạn bè cũng hỏi vì sao mình không đổi kiểu tóc và kiểu ăn mặc. Mình nghĩ là do mình chưa tìm được phong cách nào phù hợp hơn”</p>
    </div>
</section>

<section id="matvuong3">    
    <div class="title-textttttt">
    </div>
    <div class="s">
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-5.png">
    </div>
    <div class="ss">
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-6.png">
    </div>
</section>

<section id="matvuong4">    
    <div class="ttt">
        <br>
        <p>“Mình không ngờ hình tượng mới lại hợp với mình như vậy. Nhất là kiểu tóc, sau khi<br>thay đổi mình cảm thấy năng động và trưởng thành hơn”</p>
    </div>
    <br>
    <br>
    <div class="sss">
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-7.png">
        
    </div>

    <div class="ssss">
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-8.png">
    </div>
    <div class="ttt">
        <p>“Mính rất thích hình tượng mới của mình và mình cảm thấy tự tin hơn rất nhiều”</p>
    </div>
    <br>
    <br>
    
    <div class="ssss">
        <img src="IMG/side-part-mau-nhuom-nau-khoi-2020-30shine-11.png">
    </div>
    <div class="ttt">
        <p>“Cảm ơn Barber Vàng Đen tạo đã cho mình một hình tượng tuyệt vời như vậy”</p>
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
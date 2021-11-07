<?php

    include "dangky.php";
?>



<html>
<head>
    <title>SHORT QUIFF MÀU NHUỘM NÂU KHÓI</title>
    <link rel="stylesheet" href="CSS/Short Quiff.css">
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
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine.jpg">
        <div class="styee"><img src="IMG/Logo.png"></div> 
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
        <h3>"Mình là Hoàng Huy Hiếu, 24 tuổi, hiện mình đang là Phó giám đốc công ty bảo hiểm<br>
             Prudential Hà Đông"”
        </h3>
    </div>
    <div class="single-servicee">
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine-2.jpg">
    </div>  
    <div class="service-descc">
        <p>“"Trước đây mình là một người không có ngoại hình, nhút nhát và rất nhạt nhòa
        <br>
        trong mắt mọi người"
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine-3.jpg">
    </div>  
    <div class="title-textt">
        <p>"Từ khi lên đại học, mình đã thay đổi bản thân, quan tâm đến làm đẹp để bản thân<br>
            tự tin hơn. Từ đó nhiều cơ hội đến với mình, các mối quan hệ cũng được mở rộng"
        </p>
    </div>
    <div class="abc">
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine-4.jpg">
    </div>  
    <div class="title-texttt">
        <p>"Mình luôn mong muốn đẹp lên mỗi ngày. Việc thay đổi ngoại hình là một quyết
            định đúng đắn."
        </p>
    </div>  
</section>

<section id="matvuong3">    
    <div class="title-textttttt">
        <p>"Được trở lại với hình ảnh đẹp trai vốn có mình cảm thấy rất tự tin. Cảm thấy đồng nghiệp có ánh nhìn thiện cảm hơn với mình"</p>
    </div>
    <div class="ss">
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine-5.jpg">
    </div>
</section>

<section id="matvuong4">    
    <div class="title-texttttttt">
        <br>
        <p>"Mình luôn hài lòng với kiểu tóc của mình khi cắt tại Barber Vàng Đen"</p>
    </div>
    <div class="abcd">
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine-6.jpg">
    </div>
    <div class="title-texttttttt">
        <p>"Cảm ơn Barber Vàng Đen đã cho mình màn lột xác đẹp mắt này!"</p>
    </div>
    <div class="sss">
        <img src="IMG/trai-nghiem-ngay-Shine-Combo-7-buoc-tai-30shine.jpg">
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
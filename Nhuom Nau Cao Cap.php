<?php

    include "dangky.php";
?>


<html>
<head>
    <title>Shine Color Modern Man - Nhuộm Nâu Cao Cấp</title>
    <link rel="stylesheet" href="CSS/Nhuom Nau Cao Cap.css">
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
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-1.jpg">
        <div class="styee"><img src="IMG/Logo.png"></div> 
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
        <h3>"Cắt tóc giúp nam giới gọn gàng hơn, nhưng màu tóc mới là điều quan trọng định hình<br>
            phong cách của người đó"
        </h3>
    </div>
    <div class="single-servicee">
        <img src="IMG/short-quiff-nhuom-nau-khoi-hot-trend-2020-30shine-2.jpg">
    </div>  
    <div class="service-descc">
        <p>“Đàn ông Việt khi trưởng thành thường không thích nhuộm tóc, và có quan điểm: người Á Đông thì tóc
        <br>
        phải đen, hay trẻ con thì mới nhuộm tóc. Quan điểm này không đúng cũng chẳng sai. Quan trọng là
        <br>
        chọn đúng màu, đúng kiểu thì không những vẻ ngoài được nâng cấp mà còn trở nên bắt mắt và mới mẻ hơn
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-2.jpg">
    </div>  
    <div class="title-textt">
        <p>HÀNH TRÌNH ĐI TÌM "MÀU" CHO NAM GIỚI VIỆT NAM<br>
            Hiểu được điều đó - Barber Vàng Đen đã không ngừng suy nghĩ, nghiên cứu 10 triệu lượt khách hàng <br> trên khắp cả nước để tìm được những màu phổ biến, phù hợp và tăng vẻ đẹp trai cho Nam giới Việt Nam.
            <br>
            <br>
            Sau thời gian dài miệt mài nghiên cứu, học hỏi từ nước ngoài, chúng tôi đã tạo ra:
        </p>
    </div>
    <div class="single-serviceee">
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-3.jpg">
    </div>  
    <div class="title-texttt">
        <p>"BẢNG MÀU NHUỘM ĐỘC QUYỀN DÀNH CHO NAM GIỚI VIỆT NAM" <br>
            <br>
            "Bảng màu mới chia làm 4 gói nhuộm theo tone màu khác nhau phù hợp với từng đối tượng đặc biệt:<br>Elegant Black, Modern Man, Lady Killah và Fashionisto đem đến sự thanh lịch, tút lại phong độ cho người đàn ông Việt Nam.
        </p>
    </div>  
</section>

<section id="matvuong3">    
    
    <div class="ss">
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-4.jpg">
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-5.jpg">
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-6.jpg">
    </div>
    <div class="title-textttttt">
        <p>Với màu tóc này, da của bạn sẽ sáng lên vài tone, phù hợp với màu da ngăm đen của nam giới Châu Á <br> Các tone nâu không hiện rõ khi ở trong nhà, nhưng lại nổi bật khi đi ở ngoài trời, phù hợp cho các buổi đi chơi</p>
    </div>
</section>

<section id="matvuong4">    
    <div class="title-texttttttt">
        <br>
        <br>
        <p>"Mình luôn hài lòng với kiểu tóc của mình khi cắt tại Barber Vàng Đen"</p>
    </div>
    <div class="sss">
        <img src="IMG/30shine-Shinecolor-nhuom-nau-cao-cap-dinh-hinh-nguoi-dan-ong-hien-dai-7.jpg">
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
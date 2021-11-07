<?php

    include "dangky.php";
?>



<html>
<head>
    <title>Barber VÀNG ĐEN</title>
    <link rel="stylesheet" href="CSS/Sidepart mat vuong.css">
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
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-1.jpg">
        <div class="styee"><img src="IMG/Logo.png"></div>
                <div class="service-desc">
                    <h1>MẶT VUÔNG SẼ DỄ BỊ “QUÊ”?</h1>
                    <p>“Mình cũng như đại đa số con trai Việt thường khuôn mặt góc cạnh vuông vức. Nhưng mình luôn tự cảm thấy mặt vuông rất dễ bị quê mùa so với các kiểu khuôn mặt khác.”</p>
                </div>     
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
        <h3>Stylist Barber Vàng Đen:<br>
            “Mặt vuông rất đẹp, chỉ là do bạn chưa biết <br>
            cách chọn kiểu tóc phù hợp”
        </h3>
    </div>
    <div class="single-servicee">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-2.png">
    </div>  
    <div class="service-descc">
        <p>Thật ra mặt vuông khá dễ để tóc và nhìn cực kì manly. Đây cũng chính là điểm thu hút của nam giới châu Á.
        <br>
        Mặt vuông sẽ hợp với các kiểu tóc lộ trán như sport, quiff, undercut, tóc 3 phân, manbun,... nhưng không có nghĩa mặt vuông thì không thể để mái xuống.
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-4.png">
    </div>  
    <div class="title-textt">
        <h3>Stylist Barber Vàng Đen: <br>
             “Đừng lựa chọn quá an toàn. Hãy luôn thử nghiệm và thay đổi để biết mình có thể đẹp trai đến mức nào”<br>
            Tuy là để an toàn thì thường các bạn nam sẽ chọn vuốt tóc lên đơn giản và gọn gàng nhưng hãy để cho bản thân trải nghiệm thêm các kiểu tóc khác nhau, biết đâu lại tìm được chân ái.
        </h3>
    </div>
    <div class="single-serviceeee">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-5.jpg">
    </div>  
    <div class="title-texttt">
        <p>Để tôn lên được đường xương hàm đẹp thì hai bên side sẽ tông cao lên nhưng cắt không quá sát mà vẫn để xanh một chút.<br>
            Phần mái hơi đẩy nhẹ xuống 1 phần trông sẽ lạ mắt hơn mà vẫn giúp gương mặt giữ được nét nam tính.
        </p>
    </div>
    <div class="single-serviceeeee">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-6.png">
    </div>     
</section>

<section id="matvuong3">
    <div class="title-texttttt">
        <h3>Stylist Barber Vàng Đen:<br>
            “Vượt qua giới hạn của mình để bước tới giới hạn tiếp theo”
        </h3>
    </div>
    <div class="single-serviceeeeee">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-7.png">
    </div>  
    <div class="title-textttttt">
        <p>Chọn một ngày đẹp trời, mặc 1 bộ quần áo đẹp, tới<br>
            Barber Vàng Đen và thử 1 kiểu tóc mới.
        </p>
    </div>
    <div class="single-serviceeeeeee">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-8.png">
    </div> 
    <div class="title-textttttt">
        <p>Đừng ngạc nhiên nếu bạn không còn nhận ra bản <br> thân nhé. Bạn sẽ dần làm quen với sự đẹp trai này thôi!</p>
    </div>
    <div class="ss">
        <img src="IMG/Side-part-kieu-toc-phu-hop-voi-cac-ban-mat-vuong-30shine-9.png">
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
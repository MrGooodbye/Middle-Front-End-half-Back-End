<?php

    include "dangky.php";
?>


<html>
<head>
    <title>MOHICAN
        KIỂU TÓC HOT TREND</title>
    <link rel="stylesheet" href="CSS/Mohican.css">
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
        <img src="IMG/kieu-toc-mohican-1.jpg">
        <div class="styee"><img src="IMG/Logo.png"></div>
    </div>
</section>

<section id="matvuong1">
    <div class="title-text">
        <h1>“Nếu bạn đang tìm kiếm 1 kiểu tóc đẹp trai cho mùa hè<br>thì siêu phẩm Mohican chính là lựa chọn số 1”
        </h1>
    </div>
    <div class="single-servicee">
        <img src="IMG/kieu-toc-mohican-2.jpg">
    </div>  
    <div class="service-descc">
        <p>Mohican là kiểu tóc có phần mái dài vừa phải, được
        
        vuốt phồng lên và đổ về phía trước, hai bên mai cạo
        sát.
        Kiểu tóc mạnh mẽ và hiện đại này đang làm dậy<br>sóng xu hướng tóc hè 2018.
        </p>
    </div>
</section>

<section id="matvuong2">
    <div class="single-serviceee">
        <img src="IMG/kieu-toc-mohican-4.jpg">
    </div>  
    <div class="title-textt">
        <p>Chưa từng có kiểu tóc nào hợp với gương mặt của<br>các chàng trai Việt Nam đến thế. Mặt béo, góc cạnh,<br>vuông, tròn,... đều cực đẹp trai khi để Mohican.
            khác rồi. Không chỉ phụ nữ mà đàn ông cũng nên chăm chút ngoại hình”
        </p>
    </div>
    <div class="single-sss">
        <img src="IMG/kieu-toc-mohican-5.jpg">
    </div>  
    <div class="title-texttt">
        <p>“Hàng loạt sao Việt đình đám như Sơn Tùng M-TP, Châu Khải Phong, Hoa Vinh, Đạt G,... đều đang lăng xê<br>nhiệt tình cho Mohican.<br>
            Tại 30Shine, cứ 10 chàng trai tới cắt tóc thì 8 người hỏi về kiểu tóc này. Đủ để biết Mohican đang hot đến mức độ nào.
        </p>
    </div>  
</section>

<section id="matvuong3">    
    <div class="ss">
        <img src="IMG/kieu-toc-mohican-6.jpg">
    </div>
    <div class="title-textttttt">
        <p>Dáng tóc ngắn và khoẻ khoắn của Mohican phù hợp với mọi trang phục và hoàn cảnh. Đứng đắn và lịch sự<br>khi đi làm nhưng cũng vô cùng năng động khi đi chơi. Nếu bạn còn đang đi học, kiểu tóc này cũng rất “được<br>lòng" các thầy cô giám thị bởi quá gọn gàng rồi.
        </p>
    </div>
    <div class="sss">
        <img src="IMG/kieu-toc-mohican-8.jpg">
    </div>
    <div class="title-textttttt">
        <p>Chính Barber Vàng Đen là nơi khơi mào xu hướng tóc Mohican với những video hàng triệu view trên<br>Youtube. Rất nhiều sao Việt và hàng chục nghìn chàng trai đã cắt Mohican tại đây. Barber Vàng Đen cắt <br> Mohican mỗi giờ, mỗi ngày, cắt đến mỏi tay... nên quá tự tin cắt cho bạn đẹp trai.
        </p>
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
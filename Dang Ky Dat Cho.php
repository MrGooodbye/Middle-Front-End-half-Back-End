<?php include 'datlich.php'; ?>




<?php    
  $days = new booking();
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
  {
      
      $insertbooking = $days->insert_booking($_POST); //dùng $_FILES để chèn thêm hình ảnh
  }
?>






<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="CSS/Dang Ky Dat Cho.css">  
</head>  
<body>  
<form action="" method="post">
  <section id ="banner">
    <a href ="http://localhost/BC/index.php"><img src="IMG/Logo.png" class="logo"></a>
  </section>

  <div class="container">  
  <center>  <h1>ĐĂNG KÝ ĐẶT LỊCH CẮT TÓC TẠI BARBER VÀNG ĐEN</h1>  </center>
  <?php 

    if(isset($insertbooking)){
      echo $insertbooking;
    }

  ?>
  <hr>  
  <label> Họ và Tên Khách Hàng: </label>   
<input type="text" placeholder= "Họ tên Khách Hàng" size="15"  name="hotenkhach"/>   

<div>
<label >   
Khung giờ mà bạn có thể đến Barber chúng tôi:
</label>   
<input type="text" placeholder= "Khung giờ cắt tóc" size="15" name="khunggiocat"/>  
</select>  
</div>

<div>  
  <label>   
  Chọn ngày:  
  </label>   
  <input type="text" placeholder= "Ngày, (tháng) bạn muốn cắt tóc" size="15" name="ngaythangcat"/>  
  </select>    
</div>  


<div>
<label>   
Giới Tính:  
</label><br>  
<input type="text" placeholder= "Giới Tính của bạn" size="15"  name="gioitinhkhach"/>  
</div>   

<label> Số Điện Thoại Liên Hệ: </label>   
<input type="text" placeholder="Số Điện Thoại của Bạn" size="10" name="sdtkhach" >    
Địa Chỉ Hiện Tại:  
<textarea cols="80" rows="5" placeholder="Địa Chỉ Hiện Tại" name="diachikhach">  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Nhập Email của bạn" name="emailkhach">  
 <input type = "submit" name = "submit" id = "logButton" value="Đăng Ký Đặt Lịch" class="registerbtn">
 <!-- <script>
   function registration()
{

 var name= document.getElementById("t1").value;
 var cpwd2= document.getElementById("t7").value;
 var cpwd3= document.getElementById("t8").value;
 var cpwd4= document.getElementById("t9").value;
 var cpwd5= document.getElementById("t10").value;

 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 var checkphone = /^(?=.*?[0-9])/

 if(name=='') //t1
 {
   alert('Nhập Họ Tên Của Bạn!');
 }
else if(t9 == 'Khung Giờ') //t9
{
  alert ('Xin hãy chọn khung giờ cắt tóc!');
}
else if(t10 == 'Thứ') //t10
{
  alert ('Xin hãy chọn ngày cắt tóc!');
}
 else if(cpwd2=='') //t7
 {
   alert ('Mời Nhập Số Điện Thoại!');
 }
 else if (!checkphone.test(cpwd2))
 {
   alert ('Số Điện Thoại Không Hợp Lệ!')
 }
 else if(cpwd3=='') //t8
 {
   alert ('Nhập Email của bạn!');
 }
 else if(!filter.test(cpwd3))
	{
		alert('Email Không Hợp Lệ');
	}

 
 else
 {				                            
      alert('Bạn đã đặt lịch cắt tóc tại tại Barber Vàng Đen thành công! Bạn có thể chuyển đến Trang Chủ của chúng tôi bằng cách nhấn OK!');
      // Redirecting to other page or webste code. 
      window.location = "http://127.0.0.1:5500/Trang%20Chu.html"; 
 }
}
</script>  -->
</form>
</body>  
</html>  
<?php include 'dangky.php'; ?>





<?php    
  $regiss = new register();
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
  {
      
      $insertregister = $regiss->insert_register($_POST); //dùng $_FILES để chèn thêm hình ảnh
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
	<br>
	<br>
  <section id ="banner">
    <a href ="http://localhost/BC/index.php"><img src="IMG/Logo.png" class="logo"></a>
  </section>

  <div class="container">  
  <center>  <h1>ĐĂNG KÝ TÀI KHOẢN</h1>  </center>
  <?php 

if(isset($insertregister)){
  echo $insertregister;
}

?>
  <hr>  
<label> Tên Người Dùng: </label>   
<input type="text" name="username" placeholder= "Tên Người Dùng" size="15"/>   
<label> Tên Tài Khoản: </label>    
<input type="text" name="useracc" placeholder="Tên Tài Khoản" size="15"/>  
<label> Mật Khẩu: </label>    
<input type="password" name="userpass" placeholder="Mật Khẩu" size="15"/>    
<label> Xác Nhận Mật Khẩu: </label>    
<input type="password" name="userpasscom" placeholder="Xác Nhận Mật Khẩu" size="15"/>   
<input type = "submit" name = "submit" value="Đăng Ký Tài Khoản" class="registerbtn">
    <!-- <script>
      function registration()
	{

		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var uname= document.getElementById("t3").value;
		var pwd= document.getElementById("t4").value;			
		var cpwd= document.getElementById("t5").value;
		
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(name=='')
		{
			alert('Mời Nhập Tên Người Dùng!');
		}
		else if(!letters.test(name))
		{
			alert('Đã Xảy Ra Lỗi Do Ký Tự Không Hợp Lệ!');
		}
		else if(email=='')
		{
			alert('Mời Nhập Email!');
		}
		else if (!filter.test(email))
		{
			alert('Email Không Hợp Lệ');
		}
		else if(uname=='')
		{
			alert('Mời Nhập Tên Tài Khoản!');
		}
		else if(!letters.test(uname))
		{
			alert('Đã Xảy Ra Lỗi Do Tên Tài Khoản Sử Dụng Ký Tự Không Hợp Lệ!');
		}
		else if(pwd=='')
		{
			alert('Mời Nhập Mật Khẩu!');
		}
		else if(cpwd=='')
		{
			alert('Mời Xác Thực Lại Mật Khẩu!');
		}
		else if(!pwd_expression.test(pwd))
		{
			alert ('Mật Khẩu bắt buộc phải có chữ in hoa, chữ in thường, ký tự đặc biệt và chữ số');
		}
		else if(pwd != cpwd)
		{
			alert ('Mật Khẩu Không Khớp!');
		}
		else if(document.getElementById("t5").value.length < 6)
		{
			alert ('Độ dài ký tự phải tối thiểu là 6 ký tự!');
		}
		else if(document.getElementById("t5").value.length > 12)
		{
			alert ('Độ dài ký tự phải tối thiểu là 12 ký tự!');
		}
		else
		{				                            
               alert('Cám ơn bạn đã đăng ký thành khách hàng của Barber Vàng Đen & Bạn đang được chuyển hướng đến Trang Chủ của Barber Vàng Đen!');
			   // Redirecting to other page or webste code. 
			   window.location = "http://localhost/BC/index.php"; 
		}
	}
  </script>  -->
</form>  
</body>  
</html>  
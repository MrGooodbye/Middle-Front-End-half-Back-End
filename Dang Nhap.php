<?php include 'dangky.php'; ?>


<?php 
    
        $login_check = Session::get('customer_login');
            if($login_check)
            {
                header('Location:index.php');
            }    

?>




<?php
  $login = new register();


  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']))  {
      $login_customer = $login->login_customer($_POST);
  }
?>



<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="CSS/Dang Nhap.css">  
</head>  
<body>   
<form action = "" method = "post"> 
  <section id ="banner">
    <a href ="http://localhost/BC/index.php"><img src="IMG/Logo.png" class="logo"></a>
  </section>

  <div class="container">
  <center>  <h1>ĐĂNG NHẬP</h1>  </center>
  <?php 
    
    if(isset($login_customer))
{
        echo $login_customer;
}

?>
  
  <hr>  
  <label> Tài Khoản: </label>   
<input type="text" name="User" placeholder= "Tài Khoản" size="15"   />   
<label> Mật Khẩu: </label>   
<input type="password" name="Pass" placeholder="Mật Khẩu" size="15" />   
<input type = "submit" name="login" value="Đăng Nhập" class="registerbtn">
    <!-- <script>
            function myFunction()
            {   
                var un = document.forms["myForm"]["Uname"].value;
                var pw = document.forms["myForm"]["Pass"].value;
                if(un=="nguyenvanhung" && pw== "123")
                    {
                        alert("Bạn Đã Đăng Nhập Thành Công!");
                        window.location.href = "http://127.0.0.1:5500/Trang%20Chu.html";
                    }
                else if (un=="nguyenanhkhoa" && pw== "12345") {
                        alert("Bạn Đã Đăng Nhập Thành Công!");
                        window.location.href = "http://127.0.0.1:5500/Trang%20Chu.html";
                    }

                else
                    {
                        alert("Bạn đã nhập sai Tài Khoản hoặc Mật Khẩu, xin hãy thử lại!");
                    }
            }
    </script>
<input type = "button" name = "log" id = "logButton" value="Đăng Ký" onclick="myFunctionn()" class="registerbtn">
<script>
    function myFunctionn()
    {   
        window.location.href = "http://localhost/BC/index.php";
    }
</script> -->
</form>  
</body>  
</html>  
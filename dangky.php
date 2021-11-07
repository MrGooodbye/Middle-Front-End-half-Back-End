<?php include "lib/database.php"; ?>
<?php include "helper/format.php";?>
<?php 
	include "lib/session.php";
	Session::init();
?>



<?php
	class register
	{
		private $db;
		private $fm;


		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		
		public function insert_register($data)
		{	
			$username = mysqli_real_escape_string($this->db->link, $data['username']);
			$useracc = mysqli_real_escape_string($this->db->link, $data['useracc']);
			$userpass = mysqli_real_escape_string($this->db->link, $data['userpass']);
			$userpasscom = mysqli_real_escape_string($this->db->link, $data['userpasscom']);
		
			

			if($username=="" || $useracc=="" || $userpass=="" || $userpasscom==""){
				$alert = "<div class='error'><center>Các Trường Thông Tin không được để trống</center></div>";
				return $alert;
			} else {
				$check_user = "SELECT * FROM regis WHERE useracc = '$useracc' LIMIT 1";
				$result_check = $this->db->select($check_user);
				if($result_check)
				{
					$alert = "<span class='error'>,<center>Tên Tài Khoản này đã được sử dụng.</center></span>";
					return $alert;
				}
				else{
					$query = "INSERT INTO regis(username,useracc,userpass,userpasscom) 
					VALUES('$username','$useracc','$userpass','$userpasscom')";
					$result = $this->db->insert($query);

					if($result){
						
						$alert = '<div class="success"><center>Bạn đã đăng ký Tài Khoản Thành Công. Chào mừng bạn đến với tiệm tóc chúng tôi! <a href="index.php">Nhấn vào đây để quay về Trang Chủ.</a></center></div>';
						
						return $alert;
					}else{
						$alert = '<div class="error"><center>Bạn đã đăng ký Tài Khoản thất bại.</center></div>';
					}
				}
                
			}
        }


		public function login_customer($data)
		{	

			$User = mysqli_real_escape_string($this->db->link, $data['User']);
			$Pass = mysqli_real_escape_string($this->db->link, $data['Pass']);

			if($User == "" || $Pass == ""){
				$alert = '<span class= "error"><center>Vui lòng nhập Tên Tài Khoản và Mật Khẩu.</center></span>';
				return $alert;
			} else {
				$check_acc = "SELECT * FROM regis WHERE useracc = '$User' AND userpass = '$Pass' LIMIT 1";
				$result_check = $this->db->select($check_acc);

				if($result_check != false){

					$value = $result_check->fetch_assoc();
					Session::set('customer_login', true);
					Session::set('customer_id',$value['regisId']);
					header('Location:index.php');

				}else{
					$alert = '<span class= "error"><center>Tài Khoản hoặc Mật Khẩu không đúng. Mời bạn nhập lại.</center></span>';
					return $alert;
				}
			}
		}
    }
?>


<style>
	.success {font-size: 24px; color: green;}
	.error {font-size: 24px; color: red;}
</style>
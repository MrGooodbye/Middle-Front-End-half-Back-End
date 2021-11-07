<?php include "lib/database.php"; ?>
<?php include "helper/format.php";?>




<?php
	class booking
	{
		private $db;
		private $fm;


		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		
		public function insert_booking($data)
		{	
			$hotenkhach = mysqli_real_escape_string($this->db->link, $data['hotenkhach']);
			$khunggiocat = mysqli_real_escape_string($this->db->link, $data['khunggiocat']);
			$ngaythangcat = mysqli_real_escape_string($this->db->link, $data['ngaythangcat']);
			$gioitinhkhach = mysqli_real_escape_string($this->db->link, $data['gioitinhkhach']);
			$sdtkhach = mysqli_real_escape_string($this->db->link, $data['sdtkhach']);
            $diachikhach = mysqli_real_escape_string($this->db->link, $data['diachikhach']);
            $emailkhach = mysqli_real_escape_string($this->db->link, $data['emailkhach']);
			

			if($hotenkhach=="" || $khunggiocat=="" || $ngaythangcat=="" || $gioitinhkhach=="" || $sdtkhach=="" || $diachikhach =="" || $emailkhach ==""){
				$alert = "<div class='error'><center>Các Trường Thông Tin không được để trống</center></div>";
				return $alert;
			} else {
                $query = "INSERT INTO datlich(hotenkhach,khunggiocat,ngaythangcat,gioitinhkhach,sdtkhach,diachikhach,emailkhach) 
                VALUES('$hotenkhach','$khunggiocat','$ngaythangcat','$gioitinhkhach','$sdtkhach','$diachikhach','$emailkhach')";
				$result = $this->db->insert($query);

				if($result){
					
					$alert = '<div class="success"><center>Bạn đã đặt lịch cắt tóc thành công. Chúng tôi sẽ liên hệ lại với bạn sớm nhất!</center></div>';
					
					return $alert;
				}else{
					$alert = '<div class="error"><center>Bạn đã đặt lịch cắt tóc thất bại.</center></div>';
				}
			}
        }


		public function getallbooking()
		{
			$query = "SELECT * FROM datlich ";
			$result = $this->db->select($query);
			return $result;
		}


		public function del_booking($Id){
			$query = "DELETE FROM datlich WHERE idDat = '$Id'";
			$result = $this->db->delete($query);
			if($result){
					$alert = '<div class="success"><center>Bạn đã xác nhận Thành Công Đơn Đặt Chỗ này!</center> </br></div>';					
					return $alert;
			}else{
					$alert = '<div class="error"><center>Bạn đã xác nhận Thất Bại Đơn Đặt Chỗ này!</center></div>';
					return $alert;
				}
		}
	}
?>


<style>
	.success {font-size: 24px; color: green;}
	.error {font-size: 24px; color: red;}
</style>
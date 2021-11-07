
 <?php

    include_once "inc/header.php";
?>

<?php include_once '../datlich.php'; ?>


<link rel="stylesheet" type="text/css" href="css/layout.css" />

<style>.oddgradeX td{
                        padding-right:10px;
                       	padding-top: 15px;
                       	padding-bottom: 7px;
                     }
		th {padding-right: 66px;}
</style>




<div class="grid_10">
    <div class="box round first grid">
        <center><h2>Danh Sách Khách Hàng Đặt Chỗ</h2></center>
        <div class="block"> 
        	


        	
            <table class="data display datatable" id="example">
			<thead>

				<tr>
					<th>Mã Đặt</th>
					<th>Tên Khách Hàng</th>
					<th>Khung Giờ Cắt</th>
					<th>Ngày Tháng Cắt</th>
					<th>Giới Tính</th>
					<th>Số Điện Thoại</th>
					<th>Địa Chỉ</th>
					<th>Email</th>
					
				</tr>
			</thead>

			<tbody>
				
				<?php

				$days = new booking();

				if(isset($_GET['idDat'])){
					$Id = $_GET['idDat'];
					$delpd = $days->del_booking($Id);
					
				}

				
        		if(isset($delpd)){
        			echo $delpd;
        		}


				$getallbooking = $days->getallbooking();
				if($getallbooking) {
					
				while ($result = $getallbooking->fetch_assoc()){
				
				?>
				<tr class="oddgradeX">
					<td><?php echo $result['idDat']?></td>
					<td><?php echo $result['hotenkhach']?></td>
					<td><?php echo $result['khunggiocat']?></td>
					<td><?php echo $result['ngaythangcat']?></td>
					<td><?php echo $result['gioitinhkhach']?></td>
					<td><?php echo $result['sdtkhach']?></td>
					<td><?php echo $result['diachikhach']?></td>
					<td><?php echo $result['emailkhach']?></td>
					<td><a href="?idDat=<?php echo $result['idDat'] ?>">Xác Nhận Đơn</a></td>		
				</tr>
				<?php
					}
				}else {
					echo '<span class="error"><center>Hiện tại không có Khách Hàng đặt lịch cắt tóc. Vui lòng quay lại sau!</center></span><br>';
				}
				?>
			</tbody>
		</table>
		
       </div>
    </div>
</div>



<script type="text/javascript">
   $(document).ready(function () {
       setupLeftMenu();

       $('.datatable').dataTable();
       setSidebarHeight();
   });
</script>
 


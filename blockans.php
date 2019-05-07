<?php 
	if(isset($_REQUEST["anscode"])){
		$anscode=$_REQUEST["anscode"];
		include("db.php");
		$rs=mysqli_query($con,"select * from answers where code='$anscode'");
		if($r=mysqli_fetch_array($rs)){
			if($r[4]==0){
				mysqli_query($con, "update answers set status=1 where code='$anscode'");
			}
			if($r[4]==1){
				mysqli_query($con, "update answers set status=0 where code='$anscode'");
			}
		}
	}
 ?>
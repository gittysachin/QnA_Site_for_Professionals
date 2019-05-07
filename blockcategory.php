<?php 
	if(isset($_REQUEST["email"])){
		$email=$_REQUEST["email"];
		include("db.php");
		$rs=mysqli_query($con,"select status from record where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($r[0]==0){
				mysqli_query($con, "update record set status=1 where email='$email'");
				echo "1";
			}
			else{
				mysqli_query($con, "update record set status=0 where email='$email'");
				echo "0";
			}
		}
	}
 ?>
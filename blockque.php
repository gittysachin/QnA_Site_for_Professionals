<?php 
		$v=$_REQUEST["v"];
		include("db.php");
		$rs=mysqli_query($con,"select * from questions where code='$v'");
		if($r=mysqli_fetch_array($rs)){
			if($r[4]){
				mysqli_query($con, "update questions set status=1 where code='$v'");
			}
			else{
				mysqli_query($con, "update questions set status=0 where code='$v'");
			}
		}
	
 ?>
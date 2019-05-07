<?php 
	if($_REQUEST["qcode"]){
		$qcode=$_REQUEST["qcode"];
		include("db.php");
		mysqli_query($con,"update questions set status=1 where code='$qcode'");
		mysqli_query($con,"update answers set status=1 where qncode='$qcode'");
		echo "updated";
	}
 ?>
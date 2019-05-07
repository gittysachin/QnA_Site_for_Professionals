<?php 
	if($_REQUEST["category"]){
		$category=$_REQUEST["category"];
		include("db.php");
		mysqli_query($con,"delete from categories where category='$category'");
		mysqli_query($con,"delete from interest where interest='$category'");
	}
 ?>
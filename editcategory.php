<?php 
		$cat=strtoupper($_REQUEST["upcate"]);
		$code=$_REQUEST["id"];
		include("db.php");
		$rs=mysqli_query($con,"select category from categories where code='$code'");
		$count=0;
		while($r=mysqli_fetch_array($rs)){
			if($r["category"]==$cat){
				$count=1;
			}
		}
		if($count==0){
			mysqli_query($con,"update categories set category='$cat' where code='$code'");
			echo "updated";
		}
		
 ?>
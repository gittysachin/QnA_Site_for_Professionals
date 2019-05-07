<?php 
	if($_POST["addcategory"]){
		$addcategory=strtoupper($_POST["addcategory"]);
		include("db.php");
		$rs=mysqli_query($con,"select * from categories");
		$count=0;
		while($r=mysqli_fetch_array($rs)){
			if($r[0]==$addcategory){
				$count=1;
			}
		}
		if($count==0){
			$arra=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,7,8,9,0);

			$ba=array_rand($arra,8);
			$c="";
			for($i=0;$i<sizeof($ba);$i++){
				$c=$c.$arra[$ba[$i]];
			}
			$c=$c."_";
			$addcategor = strtoupper($addcategory);
			mysqli_query($con,"insert into categories values('$addcategor','$c')");
			echo "Category inserted";
		}
		else{
			echo "Category already exists";
		}
		
	}
 ?>
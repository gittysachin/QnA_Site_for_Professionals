<?php 
	if(isset($_COOKIE["user"])){
		header("location:fpage.php");
	}
	else{
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"stackoverflow");
		$email=$_POST["email"];
		$name=$_POST["name"];
		$password=$_POST["password"];
		$mobile=$_POST["mobile"];

		$resulti=mysqli_query($con,"select * from record");
		$count=0;
		while($r=mysqli_fetch_array($resulti)){
			if($r["email"]==$email){
				header("location:login.php?already=1");
			}
			else{
				$count++;
			}
		}
		
			$sn=0;
			$aa=mysqli_query($con,"select max(sn) from record");
			if($a=mysqli_fetch_array($aa)){
				$sn=$a[0];
			}
			$sn++;
				if($count==$sn-1){
						foreach($_POST["interest"] as $selected){
							mysqli_query($con,"insert into interest values('$email','$selected')");
						
						}
					$b=mysqli_query($con,"insert into record values($sn,'$name','$email','$mobile','$password',0,0)");

				if(is_null($b)){
					header("location:fpage.php?err=1");
				}
				else{
					header("location:check.php?upemail=$email");
				}
			}
		
	}
 ?>
<?php 
if(!isset($_COOKIE["user"]) && !isset($_COOKIE["leaduser"])){
	header("location:login.php?err=1");
}
else{
	if(isset($_GET["leadout"])){
		setcookie("leaduser","",time()-1);
		header("location:admin.php?leadout=1");
	}
	else{
		setcookie("user","",time()-1);
		header("location:fpage.php?out=1");
	}
}
?>
<?php 
	$que=$_POST["question"];
	$qdesc=$_POST["qdesc"];
	$code=$_POST["code"];
	include("db.php");
	$rs=mysqli_query($con,"update questions set question='$que', qdesc='$qdesc' where code='$code'");
	header("location:question.php?code=$code&update=1");
 ?>
<?php 
					         include("db.php");
                    $question = $_POST["question"];
                    $qdesc=$_POST["qdesc"];
                    $rs=mysqli_query($con,"select * from questions");
                    $count=0;
                    while($r=mysqli_fetch_array($rs)){
                      if($r[1]=="$question"){
                      	$count=1;
                        header("location:ask.php?already=1&code=$r[0]");
                      }
                    }
                    $email=$_COOKIE["user"];
                    if($count==0){
                    	
                         $arra=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,7,8,9,0);
                          $ba=array_rand($arra,8);
                          $c="";
                          for($i=0;$i<sizeof($ba);$i++){
                            $c=$c.$arra[$ba[$i]];
                          }
                          $i=0;
                          foreach($_POST["categor"] as $z){
                            mysqli_query($con,"insert into quecategory values('$z','$c')");
                          }
                          mysqli_query($con,"insert into questions values('$c','$question','$qdesc',0,0,'$email')");
                          header("location:ask.php?inserted=1");
                    }
                        
                      
 ?>
<?php 
					include("db.php");
                    $answer = $_POST["answer"];
                    $qncode=$_POST["qncode"];
                    $rs=mysqli_query($con,"select * from answers where qncode='$qncode'");
                    $count=0;
                    while($r=mysqli_fetch_array($rs)){
                      if($r[2]==$answer){
                      	$count=1;
                        header("location:questions.php?already=1&code=$qncode");
                      }
                    }
                    if($count==0){
                    	
                         $arra=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,7,8,9,0);
                          $ba=array_rand($arra,8);
                          $c="";
                          for($i=0;$i<sizeof($ba);$i++){
                            $c=$c.$arra[$ba[$i]];
                          }
                          mysqli_query($con,"insert into answers values('$c','$qncode','$answer',0,0)");
                          header("location:questions.php?code=$qncode&inserted=1");
                    }
 ?>
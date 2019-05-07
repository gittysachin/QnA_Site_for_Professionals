<?php 
					$user=$_COOKIE["user"];
					$qncode=$_REQUEST["qncode"];
					include("db.php");
                      $qu=mysqli_query($con,"select * from qnupvote where user='$user'");
                      $count=0;
                      if(mysqli_num_rows($qu)>0){
                        while($q=mysqli_fetch_array($qu)){
                          if($q[0]==$qncode){
                            if($q[1]==1){
                              $count=1;
                            }
                          }
                        }
                        if($count==1){
                        	mysqli_query($con,"update qnupvote set upvote=0 where qncode='$qncode' AND user='$user'");
                        	echo "0";
                        }
                        else{
                        	mysqli_query($con,"update qnupvote set upvote=1 where qncode='$qncode' AND user='$user'");
                        	echo "1";
                        }
                      }
                      else{
                      	mysqli_query($con,"insert into qnupvote values('$qncode',1,'$user')");
                      	echo "2";
                      }
 ?>
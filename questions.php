<head>
  
  <title>Stack Overflow - Where Developers Learn, Share & Build Careers</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).on("click",".upvote",function(){
    var qncode=$(this).attr("id");
    $.post("qnupvote.php",{qncode:qncode},function(data){
      if(data=="0"){
        document.getElementById(qncode).setAttribute("class","btn btn-warning btn-sm pull-right upvote");
      }
      if(data=="1"){
        document.getElementById(qncode).setAttribute("class","btn btn-success btn-sm pull-right upvote");
      }
      if(data=="2"){
        document.getElementById(qncode).setAttribute("class","btn btn-success btn-sm pull-right upvote");
      }
    });
  });
</script>

</head>

<nav class="navbar navbar-fixed-top navbar-inverse" style="background: rgb(215, 219, 199,0.5);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle colapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="fpage.php" style="color:black">stack<b style="color:green">overflow</b></a>
        
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><form class="form-inline my-2 my-lg-0">
            <input class="form-control" name="search" style="margin-top:7px; width: 300px" type="text" placeholder="Search..."><button class="btn btn-outline-success my-2 my-sm-0" style="margin-top:7px"><img src="https://www.oswego.edu/oswego-search/img/search.png" height=17 width=17></button>
          </form></li>
          <li><a href="logout.php" style="color:orange; font-weight:bold">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 ">
         <div class="list-group ">
              <a href="fpage.php" class="list-group-item list-group-item-action">Home</a>
              <a href="ask.php" class="list-group-item list-group-item-action">Ask Question</a>
              <a href="questions.php" class="list-group-item list-group-item-action active">Answer Questions</a>
              <a href="question.php" class="list-group-item list-group-item-action">Your Questions</a> 
            </div>       
    </div>
    <div class="card border-secondary col-md-8" style="border:double; box-shadow: 5px 10px 18px blue;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"> 
                <li class="nav-item">
                    <a class="nav-link active">Answer Questions</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                
                <?php 
                    if(!isset($_GET["code"])){
				?>
				<h4 class="card-title">Answer some questions here. All questions are suitable for your interest.</h4>
                <br>

                <h3 style="color:brown">Answer Question</h3><br>
				<?php
						include("db.php");
						$rs=mysqli_query($con,"select * from questions");
						while($r=mysqli_fetch_array($rs)){
                      echo "<div style='padding:20px; box-shadow: 5px 1px 18px red'><a href='questions.php?code=$r[0]'>".$r[1]."</a>";

                      $answers=0;
                      $answ=mysqli_query($con,"select * from answers where qncode='$r[0]'");
                      $answers=mysqli_num_rows($answ);

                      echo "<button class='btn btn-primary btn-sm pull-right'>$answers Ans</button>";

                      $user=$_COOKIE["user"];
                      $qu=mysqli_query($con,"select * from qnupvote where user='$user'");
                      $count=0;
                      if(mysqli_num_rows($qu)>0){
                        while($q=mysqli_fetch_array($qu)){
                          if($q[0]==$r[0]){
                            if($q[1]==1){
                              $count=1;
                            }
                          }
                        }
                        if($count==1){
                          ?>
                          <button class="btn btn-success btn-sm pull-right upvote" id="<?=$r[0]?>">Upvote
                          <?php
                        }
                        else{
                          ?>
                          <button class="btn btn-warning btn-sm pull-right upvote" id="<?=$r[0]?>">Upvote
                          <?php
                        }
                      }
                      else{
                        ?>
                        <button class="btn btn-danger btn-sm pull-right upvote" id="<?=$r[0]?>">Upvote
                        <?php
                      }
                      echo mysqli_num_rows($qu)."</button></div><hr>";
						}
					}
					else{
						$code=$_GET["code"];
						include("db.php");
						$rs=mysqli_query($con,"select * from questions where code='$code'");
						if($r=mysqli_fetch_array($rs)){
						?>
			                <br>

			                <h3 style="color:brown"><?=$r[1]?></h3>
                      <h4 style="color:black"><?=$r[2]?></h4><br>
						<?php
						$ab=mysqli_query($con,"select * from answers where qncode='$code'");
            if(isset($_GET["inserted"])){
                echo "<div class='alert alert-success'>Your Answer has been submitted.</div>";
            }
            if(isset($_GET["already"])){
                $code=$_GET["code"];
                echo "<div class='alert alert-danger'>Same answer already exists.</div>";
            }
						?>
						<form class="col-sm-8 col-sm-offset-2" method="post" action="submitanswer.php">
							          <input type="hidden" name="qncode" value="<?=$code?>">
			                  <textarea type="text" required class="form-control input-lg" rows=3 placeholder="Type your Answer in here..." name="answer"></textarea>
			                  <br><button type="submit" name="ans" class="btn btn-lg btn-primary pull-right">Answer</button>
			            </form><br>
                  <br><br><br><br><br><br>
                  <hr>
                  <h3 style="color:red">Answers</h3><br>
						<?php
							while($a=mysqli_fetch_array($ab)){
								echo "<div class='card' style='padding:10px; box-shadow: 5px 1px 18px red;'>$a[2]</div><hr>";
							}
							echo "<br>";
						}
						else{
							echo "<div class='alert alert-danger col-md-5' align=center><b>No answers! Be first to answer this question.</b></div>";
							
						}
					}
				?>
            </div>
    </div>
  </div><br>
</div>
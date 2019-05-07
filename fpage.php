<head>
	
	<title>Stack Overflow - Where Developers Learn, Share & Build Careers</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php 
	if(empty($_COOKIE["user"])){
?>
 
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
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br>


<div class="container-fluid">
  <div class="col-sm-3"></div>
  <div class="col-sm-5" style="padding: 10px">
    <form method="post" action="registration.php">
    <label>Display Name</label><input type="text" name="name" class="form-control" required><br>
    <label>Email</label><input type="email" name="email" class="form-control" required><br>
    <label>Mobile No.</label><input type="text" name="mobile" class="form-control" required><br>
    <label>Password</label><input type="password" name="password" class="form-control" required><br>
    <label>Interested In</label>
    <?php 
    include("db.php");
    $er=mysqli_query($con,"select * from categories");
    while($e=mysqli_fetch_array($er)){
      ?>
      <input type="checkbox" name="interest[]" value="<?=$e[0]?>"><?=$e[0]?>
      <?php
    }
    ?><br><br>
    <input type="checkbox" name="accepted" required> By choosing to continue, you agree to our T&C and Privacy Policy and to receive emails and telephonic communications from us. <br><br>
    <button type="submit" class="btn btn-danger btn-lg">Sign Up</button>
  </form>
  </div>
</div>

<?php
	}
  else{
    ?>

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
              <a href="fpage.php" class="list-group-item list-group-item-action active">Home</a>
              <a href="ask.php" class="list-group-item list-group-item-action">Ask Question</a>
              <a href="questions.php" class="list-group-item list-group-item-action">Answer Questions</a>
              <a href="question.php" class="list-group-item list-group-item-action">Your Questions</a> 
            </div>       
    </div>
    <div class="card border-secondary col-md-8" style="border:double; box-shadow: 5px 10px 18px blue;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"> 
                <li class="nav-item">
                    <a class="nav-link active">Home</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Welcome <?php $email=$_COOKIE["user"]; include("db.php"); $rs=mysqli_query($con,"select name from record where email='$email'"); if($r=mysqli_fetch_array($rs)){ echo "<b style='color:orange'>".$r[0]."</b>";}?></h4>
                <br><br>
                <h3 style="color:brown">Top Questions</h3><br>
                  <?php 
                    include("db.php");
                    $rs=mysqli_query($con,"select * from questions");
                    while($r=mysqli_fetch_array($rs)){
                      echo "<a href='questions.php?code=$r[0]' style='font-size:20px'>".$r[1]."</a><br>";
                      $sd=mysqli_query($con,"select * from quecategory where qncode=$r[0]");
                      while($s=mysqli_fetch_array($sd)){
                        echo $s[0];
                      }
                      echo "<hr>";
                    }
                  ?>
                <br>
            </div>
    </div>
  </div>
</div><br>
    <?php
  }
 ?>
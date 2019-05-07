<head>
	<title>Login - StackOverFlow</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
          <li><a href="login.php" class="active" style="color:green">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br>
<?php 
  if(isset($_GET["already"])){
    echo "<div class='alert alert-danger' align='center'>This email has already registered. Try to login...</div>";
    echo "<br><br>";
  }
  if(isset($_GET["invalid"])){
    echo "<div class='alert alert-danger' align='center'>Password didn't match.</div>";
    echo "<br><br>";
  }
  if(isset($_GET["err"])){
    echo "<div class='alert alert-danger' align='center'>Profile did not found.</div>";
    echo "<br><br>";
  }
  if(isset($_GET["block"])){
    echo "<div class='alert alert-danger' align='center'>Your account has been blocked. Contact policy@stackoverflow.com for assistance.</div>";
    echo "<br><br>";
  }
 ?>

<div class="container-fluid">
  <div class="col-sm-3"></div>
  <div class="col-sm-5" style="border: 1px dashed; padding: 10px; box-shadow: 5px 10px 18px red;">
    <form method="post" action="check.php">
    <label>Email</label><input type="email" name="inemail" class="form-control" required><br>
    <label>Password</label><input type="password" name="password" class="form-control" required><br>
    <br>
    <button type="submit" class="btn btn-danger btn-lg">Login</button>
  </form>
  <hr>
  <form>
  	Don't have a account? <br>
  	<a href="fpage.php" role="button" class="btn btn-danger btn-sm">Sign Up</a>
  </form>
  </div>
</div>

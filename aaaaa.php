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
<div style="margin :0; padding : 0; background : #636870">
  <div class="col-sm-6">
    <h2>Learn, Share, Build</h2>
    <h4>Each month, over 50 million developers come to Stack Overflow to learn, share their knowledge, and build their careers.</h4>
    <h4>Join the world’s largest developer community.</h4>
  </div>
  <div class="col-sm-3">
    <form method="post" action="registration.php">
    <label>Display Name</label><input type="text" name="name" class="form-control" required>
    <label>Email</label><input type="email" name="email" class="form-control" required>
    <label>Mobile No.</label><input type="text" name="mobile" class="form-control" required>
    <label>Password</label><input type="password" name="password" class="form-control" required>
    <label>Interested In</label>
    <?php 
    include("db.php");
    $er=mysqli_query($con,"select * from categories");
    while($e=mysqli_fetch_array($er)){
      ?>
      <input type="checkbox" name="interest[]" value="<?=$e[0]?>"><?=$e[0]?>
      <?php
    }
    ?><br>
    <input type="checkbox" name="accepted" required> By choosing to continue, you agree to our T&C<br>
    <button type="submit" class="btn btn-danger btn-lg">Sign Up</button>
  </form>
  </div>
</div>

<?php
}
?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style="background : #ccced1;">
  <div class="col-sm-3">
    <button>Home</button>sach
  </div>
</div>
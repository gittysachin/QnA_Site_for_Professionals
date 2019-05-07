<head>
  <title>Stack Overflow - Where Developers Learn, Share & Build Careers</title>

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
          <li><a style="color:green">BOSS! &mdash; ADMIN</a></li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br>

<?php 
  if(isset($_GET["invalid"])){
    echo "Password didn't match."."<br><br>";
  }
  if(isset($_GET["err"])){
    echo "Profile did not found."."<br><br>";
  }
  if(!isset($_COOKIE["leaduser"])){
 ?>

<div class="container-fluid">
  <div class="col-sm-3"></div>
  <div class="col-sm-5" style="border: 1px dashed; padding: 10px; box-shadow: 5px 10px 18px red;">
    <div class="panel-heading-primary">ADMIN &mdash; Login</div>
    <div class="panel-body">
    <form method="post" action="check.php">
    <label>Email</label><input type="email" name="adminemail" class="form-control" required><br>
    <label>Password</label><input type="password" name="password" class="form-control" required><br>
    <button type="submit" class="btn btn-danger btn-lg">LOGIN</button>
  </form>
</div>
  </div>
</div>

<?php 
}
  if(isset($_COOKIE["leaduser"])){
 ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="admin.php" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="user.php" class="list-group-item list-group-item-action">Users</a>
              <a href="category.php" class="list-group-item list-group-item-action">Categories</a>
              <a href="adminque.php" class="list-group-item list-group-item-action">Questions</a>
              <a href="adminans.php" class="list-group-item list-group-item-action">Answers</a>
              <a href="logout.php?leadout=1" class="list-group-item list-group-item-action">Lead Logout</a>
              
              
            </div> 
            
		</div>

    <div class="card border-secondary col-md-9" style="border:double; box-shadow: 5px 10px 18px blue;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"> 
                <li class="nav-item">
                    <a class="nav-link active">Dashboard</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title" style="color:brown">Welcome Admin</h4>
                <br><br>
                <p class="card-text">You can Edit your users profile here and manage your whole site.</p><br><br>
                <p>You are the <b>LEAD </b>here!</p>
            </div>
        </div>

		
	</div>
</div>

<?php 
  }
 ?>
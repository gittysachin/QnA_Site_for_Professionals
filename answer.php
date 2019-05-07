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
  if(!isset($_COOKIE["leaduser"])){
    header("location:admin.php?outcat=1");
  }
  else{
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-3 ">
         <div class="list-group ">
              <a href="admin.php" class="list-group-item list-group-item-action">Dashboard</a>
              <a href="user.php" class="list-group-item list-group-item-action">Users</a>
              <a href="category.php" class="list-group-item list-group-item-action">Categories</a>
              <a href="question.php" class="list-group-item list-group-item-action">Questions</a>
              <a href="answer.php" class="list-group-item list-group-item-action active">Answers</a>
              <a href="logout.php" class="list-group-item list-group-item-action">Lead Logout</a>
              
              
            </div> 
            
    </div>

    <div class="card border-secondary col-md-9" style="border:double; box-shadow: 5px 10px 18px blue;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"> 
                <li class="nav-item">
                    <a class="nav-link active">Answers</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Edit Answers</h4>
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
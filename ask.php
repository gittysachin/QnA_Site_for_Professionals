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
              <a href="ask.php" class="list-group-item list-group-item-action active">Ask Question</a>
              <a href="questions.php" class="list-group-item list-group-item-action">Answer Questions</a>
              <a href="question.php" class="list-group-item list-group-item-action">Your Questions</a> 
            </div>       
    </div>
    <div class="card border-secondary col-md-8" style="border:double; box-shadow: 5px 10px 18px blue;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"> 
                <li class="nav-item">
                    <a class="nav-link active">Ask Questions</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Ask any question here. It will be answered very soon...</h4>
                <br><br>
                <?php 
                    if(isset($_GET["inserted"])){
                      echo "<div class='alert alert-success'>Your question has been posted. It will be answered very soon..</div>";
                    }
                    if(isset($_GET["already"])){
                      $code=$_GET["code"];
                      echo "<div class='alert alert-danger'>This questions has beed asked already. You can view it's solution <a href='questions.php?code=$code'><b>here</b></a>.</div>";
                    }
                 ?>
                <h3 style="color:brown">Ask Question</h3>
                <form class="col-sm-8 col-sm-offset-2" method="post" action="submitquestion.php">
                  <label>Category</label>
                  <?php 
                    include("db.php");
                    $er=mysqli_query($con,"select * from categories");
                    while($e=mysqli_fetch_array($er)){
                  ?>
                  <input type="checkbox" name="categor[]" value="<?=$e[0]?>"><?=$e[0]?>
                  <?php 
                    }
                   ?><br>
                   <input type="text" class="form-control input-sm" required placeholder="Title" name="question"><br>
                  <textarea type="text" class="form-control input-lg" placeholder="Description..." name="qdesc"></textarea>
                  <br><button type="submit" name="ask" class="btn btn-lg btn-primary pull-right">Ask</button>
                </form>
                  
                <br>
            </div>
    </div>
  </div>
</div>
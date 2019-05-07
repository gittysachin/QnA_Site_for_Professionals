<head>
  <title>Stack Overflow - Where Developers Learn, Share & Build Careers</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).on("click",".addcategory",function(){
      var v=$("#category").val();
        $.post("submit.php",{addcategory:v},function(data){
          $("#msg").html(data);
        });
    });

    
    $(document).on("click",".deleteit",function(){
      var id=$(this).attr("id");
        $.post("del.php",{category:id},function(data){
          $("#"+id).fadeOut(1000);
        });
    });

    $(document).on("click",".editit",function(){
      var id=$(this).attr("id");
      var tex=$("#"+id).text();
      // var tex=$(this).innerText;
      if(tex=="Update"){
        var upcat=$("#edit"+id).val();
        var cod=$
        $.post("editcategory.php",{upcate:upcat,id:id},function(data){
          if(data=="updated"){
            $("#edit"+id).attr("disabled",true);
            $("#"+id).text("Edit");
            $("#"+id).attr("class","btn btn-warning btn-sm");
          }
        });
      }
      if(tex=="Edit"){
        document.getElementById("edit"+id).removeAttribute("disabled");
        document.getElementById(id).setAttribute("class","btn btn-success btn-sm editit");
        document.getElementById(id).innerText="Update";
      }
    });
  </script>

</head>

<nav class="navbar navbar-fixed-top navbar-inverse" style="background: rgb(215, 219, 199,0.5);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle colapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
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
              <a href="category.php" class="list-group-item list-group-item-action active">Categories</a>
              <a href="adminque.php" class="list-group-item list-group-item-action">Questions</a>
              <a href="adminans.php" class="list-group-item list-group-item-action">Answers</a>
              <a href="logout.php?leadout=1" class="list-group-item list-group-item-action">Lead Logout</a>
            </div> 
            
    </div>

    <div class="card border-secondary col-md-9" style="border:double; box-shadow: 5px 10px 18px blue;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"> 
                <li class="nav-item">
                    <a class="nav-link active">Categories</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
              <div style="border: 1px dashed; padding: 10px; box-shadow: 5px 10px 18px red;">
                    <h3 style="color:brown">Add Category</h3>
                    <div id="msg">
                </div>
                    <input type="text" name="category" id="category" required>
                    <button class="btn btn-success btn-sm addcategory" type="submit">Add</button>
                </div>
                <br><br>
                <div style="border: 1px dashed; padding: 10px; box-shadow: 5px 10px 18px green;">
                   <h3 style="color:brown">Optimize Categories</h3>
                   <?php 
                      include("db.php");
                      $pq=mysqli_query($con,"select * from categories");
                      ?>
                      <table class="table-responsive table-hover" width="40%" align="center">
                        <tr><th>Category</th> 
                          <th>Action</th></tr>
                      <?php
                      while($p=mysqli_fetch_array($pq)){
                        ?>
                        <tr id="<?=$p[0]?>"><td><input required type="text" disabled class="form-control input-sm edit" id="edit<?=$p[1]?>" value="<?=$p[0]?>"></td><td><button class="btn btn-warning btn-sm editit" id="<?=$p[1]?>">Edit</button><button class="btn btn-danger btn-sm deleteit" id="<?=$p[0]?>">Delete</button></td></tr>
                        <?php
                      }
                    ?>
                    </table>
                    <br>
                </div>
                <br><br>
            </div>
        </div>
  </div>
</div>

<?php 
  }
 ?>
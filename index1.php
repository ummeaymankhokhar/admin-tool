<?php
session_start();
if(isset($_SESSION['user'])){

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Insert Employees</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  <link rel="stylesheet" href="style.css">
  <style>
  </style>
 </head>
 <body>
 <div class="topnav" id="myTopnav">
  <a href="#home"><img src="logo.jpg" width="100" height="50"></a>
  <a href="administration.php" style="margin-top:1.2%;">Administration</a>
  <a href="index.php" style="margin-top:1.2%;">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br> <br><br>
  <br /><br />
  <div class="container" style="width:900px;">
   <h1 align="center">Insert Details</h1>
   <br /><br />
   <div class="row">
    <div class="col-md-6">
     <h3 align="center"><u>Add New Category</u></h3>
     <br />
     <form method="post" id="treeview_form">
      <div class="form-group">
       <label>Select Parent Category</label>
       <select name="parent_category" id="parent_category" class="form-control">
       
       </select>
      </div>
      <div class="form-group">
       <label>Enter Category designation</label>
       <input type="text" name="category_designation" id="category_designation" class="form-control">
      </div>
      <div class="form-group">
       <label>Enter Category Name</label>
       <input type="text" name="category_name" id="category_name" class="form-control">
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Add" class="btn btn-success" />
      </div>
     </form>
    </div>
    <div class="col-md-6">
     <h3 align="center"><u>Category Tree</u></h3>
     <br />
     <div id="treeview"></div>
    </div>
   </div>
  </div>
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<?php
    }
    else{
        header("location:admin.php");
    }
?>
 </body>
</html>
<script>
 $(document).ready(function(){

  fill_parent_category();

  fill_treeview();
  
  function fill_treeview()
  {
   $.ajax({
    url:"fetch.php",
    dataType:"json",
    success:function(data){
     $('#treeview').treeview({
      data:data
     });
    }
   })
  }

  function fill_parent_category()
  {
   $.ajax({
    url:'fill_parent_category.php',
    success:function(data){
     $('#parent_category').html(data);
    }
   });
   
  }

  $('#treeview_form').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"add.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_parent_category();
     $('#treeview_form')[0].reset();
     alert(data);
    }
   })
  });
 });
</script>
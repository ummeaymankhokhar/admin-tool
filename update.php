<?php
session_start();
if(isset($_SESSION['user'])){

?>
<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="topnav" id="myTopnav">
  <a href="#home"><img src="logo.jpg" width="100" height="50"></a>
  <a href="index.php" style="margin-top:1.2%;">Administration</a>
  <a href="index.php" style="margin-top:1.2%;">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br><br>

<br>
    <!-- Login Form -->
    
    <?php
include 'dbConfig.php';
if(isset($_POST['up_btn']))
{
    $id = $_POST['up_id'];
    $query = "SELECT * FROM tifr WHERE category_id='$id' ";
    $result = mysqli_query($db, $query);

    while(list($category_id,$category_designation,$category_name) = mysqli_fetch_row($result))
    {
        ?>

          <form action="updateback.php" method="POST" class="form-group">
                
              <input type="hidden" name="up_id" value="<?php echo $category_id ?>" >
              <center>
              <br><br>
              
                  <label>Name </label>
                  <input type="text" name="edit_name" value="<?php echo $category_name ?>" ><br><br>
                  
             
              
              <a href="administration.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
              </center>
          </form><br><br>
    <?php
    }
}
?>
<br><br>
        </tbody>
      </table>
 
    <!-- Remind Passowrd -->
    <!--<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

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
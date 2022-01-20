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
  <a href="administration.php" style="margin-top:1.2%;">Administration</a>
  <a href="index.php" style="margin-top:1.2%;">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br><br>

<br>
<br>
    <!-- Login Form -->
<?php
require 'dbConfig.php';
if(isset($_POST['updatebtn']))
{
    $id = $_POST['up_id'];
    $name = $_POST['edit_name'];
    echo "<center><p style='background-color:white;'>".$name. "</p><br></center>";
    $query = "SELECT * FROM tifr WHERE category_name LIKE '%$name%'";
    $result = mysqli_query($db, $query);    
    echo"<table border=1 align='center' >
        <tr>
            <th align='center'>  ID  </th>
            <th align='center'>Designation</th>
            <th align='center'> Name  </th>
            <th align='center'>    </th>
            <th align='center'>    </th>
        </tr>";

       
        if(mysqli_num_rows($result) > 0)        
        {
            while($row = mysqli_fetch_assoc($result))
            {
               ?>
          <tr>
            <td><?php  echo $row['category_id']; ?></td>
            <td><?php  echo $row['category_designation']; ?></td>
            <td><?php  echo $row['category_name']; ?></td>
            
            <td>
                <form action="update.php" method="post">
                    <input type="hidden" name="up_id" value="<?php echo $row['category_id']; ?>">
                    <button  type="submit" name="up_btn" class="btn btn-success"> Update</button>
                    <a href="administration.php" class="btn btn-danger" > CANCEL  </a>
                    
                </form>
            </td>
            </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
   
    $sql = "UPDATE tifr SET category_name = '$name' WHERE category_id = '$id' ";
    if (mysqli_query($db, $sql)) {
        echo '<script type="text/javascript">
        window.alert("Record Updated Sucessfully");
        var r = confirm("Do you want to update?");
  if (r == false) {
    window.location="administration.php";
}

        </script>';

    }
    
    else{
        echo '<script type="text/javascript">
            window.alert("Record Not Updated");
            window.location="administration.php";
        </script>';
    }
}
?>
<?php
    }
    else{
        header("location:admin.php");
    }
?>
</body>
</html>

<?php
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "testing1";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
function categoryTree($parent_category_id = 0, $sub_mark = ''){
    global $db;
    $query = $db->query("SELECT * FROM tifr WHERE parent_category_id = $parent_category_id AND options = 'Enable' ORDER BY parent_category_id ASC");
   
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
          echo '<ul><option value="'.$row['category_id'].'">'.$sub_mark.$row['category_designation'].' : '.$row['category_name'].'</option></ul>';
          categoryTree($row['category_id'], $sub_mark.'---');
        }
    }
}
?>
<!DOCTYPE html>
<html style="backgound-color:white;">
<head>
<title>Administration</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<style>
.select-boxes{
    width: 280px;
    text-align: center;
    margin: 0 auto;
}
select{
    background-color: #F5F5F5;
    border: 1px double #FB4314;
    color: #55BB91;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}
</style>
</head>
<body style="background-color:white;">
<div class="topnav" id="myTopnav">
  <a href="#home"><img src="logo.jpg" width="100" height="50"></a>
  <a href="admin.php" style="margin-top:1.2%; float:right;">Admin Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br><br><br><br>
<!--<div class="select-boxes">
<select name="category">-->
<?php echo categoryTree(); ?>
</select>
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
</body>
</html>
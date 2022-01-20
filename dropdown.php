<?php  
$connect = mysqli_connect("localhost", "root", "", "testing1");
$category_id=$_POST['category_id'];
$options=(int)$_POST["options"];
$sql = "UPDATE tifr SET options ='".$options."' WHERE category_id ='".$category_id."'";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Updated';  
}  
 ?>
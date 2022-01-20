<?php  
$connect = mysqli_connect("localhost", "root", "", "testing1");
$parent_id=(int)$_POST["parent_id"];
$sql = "INSERT INTO tifr (name, parent_id) VALUES ('".$_POST["name"]."', '$parent_id')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>
<?php  
	$connect = mysqli_connect("localhost", "root", "", "testing1");
	$sql = "DELETE FROM tifr WHERE category_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>
<?php  
    $connect = mysqli_connect("localhost", "root", "", "testing1");
    $Enable = "Enable";
	$sql = "UPDATE tifr SET options = '$Enable' WHERE category_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Enabled';  
	}  
 ?>
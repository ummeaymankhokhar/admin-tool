<?php  
    $connect = mysqli_connect("localhost", "root", "", "testing1");
    $Disable = "Disable";
	$sql = "UPDATE tifr SET options = '$Disable' WHERE category_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Disabled';  
	}  
 ?>
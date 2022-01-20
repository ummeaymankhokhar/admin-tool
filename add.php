<?php

//add.php

include('database_connection.php');

$data = array(
 ':category_designation' => $_POST['category_designation'],
 ':category_name'  => $_POST['category_name'],
 ':parent_category_id' => $_POST['parent_category']
);

$query = "
 INSERT INTO tifr(category_designation,category_name, parent_category_id) VALUES (:category_designation, :category_name, :parent_category_id)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo 'Category Added';
}


?>

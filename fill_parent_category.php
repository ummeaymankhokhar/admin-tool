<?php

//fill_parent_category.php

include('database_connection.php');

$query = "SELECT * FROM tifr ORDER BY category_designation ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '<option value="1">Director</option>';

foreach($result as $row)
{
 $output .= '<option value="'.$row["category_id"].'">'.$row["category_designation"].'</option>';
}

echo $output;

?>

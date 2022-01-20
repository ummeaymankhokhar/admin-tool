<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing1");  
 $output = '';  
 $sql = "SELECT * FROM tifr";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" align="center">  
                <tr>  
                     <th align="center" width="5%">  Employee ID  </th>  
                     <th align="center" width="50%">Designation</th> 
                     <th align="center" width="30%">Name</th>  
                     <th align="center" with="15%>Status</th>
                     <th align="center" width="15%">  Parent ID  </th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
     $output .= '  
     <tr>  
          <td></td>  
           <td></td>
           <td></td>
           <td></td>
           <td></td>
          <td colspan="4" align="center"><a href="index1.php"><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Click to Insert</button></a></td>  
     </tr>  
';  
	  /*if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM tifr LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }*/
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["category_id"].'</td>  
                     <td class="category_designation" data-id1="'.$row["category_id"].'" contenteditable>'.$row["category_designation"].'</td> 
                     <td class="category_name" data-id1="'.$row["category_id"].'" contenteditable>'.$row["category_name"].'</td>
                     <td class="parent_category_id" data-id2="'.$row["category_id"].'" contenteditable>'.$row["parent_category_id"].'</td> 
                     <td>'.$row["options"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["category_id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>
                     <td><button type="button" name="enable_btn" data-id4="'.$row["category_id"].'" class="btn btn-xs btn-success btn_enable">Enable</button></td>
                     <td><button type="button" name="disable_btn" data-id5="'.$row["category_id"].'" class="btn btn-xs btn-danger btn_disable">Disable</button></td> 
                     <td><button type="button" name="up_btn" data-id6="'.$row["category_id"].'" class="btn btn-xs btn-primary btn_update">Update</button></td> 
                </tr>  
           ';  
      }  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="category_designation" contenteditable></td>
                         <td id="category_name" contenteditable></td>  
					<td id="parent_category_id" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
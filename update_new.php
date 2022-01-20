<?php
include 'dbConfig.php';
$id = $_POST['id'];
    $query = "SELECT * FROM tifr WHERE category_id='$id' ";
    $result = mysqli_query($db, $query);

    while(list($category_id,$category_designation,$category_name) = mysqli_fetch_row($result))
    {
        ?>

          <form action="updateback.php" method="POST" class="form-group">
                
              <input type="hidden" name="up_id" value="<?php echo $category_id ?>" >
              <center>
              <br><br>
              
                  <label>Name </label>
                  <input type="text" name="edit_name" value="<?php echo $category_name ?>" ><br><br>
                  
             
              
              <a href="administration.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
              </center>
          </form><br><br>
    <?php
    }
    ?>
<?php
session_start();
if(isset($_SESSION['user'])){

?>
<html>  
    <head>  
        <title>administration</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="style.css">
    </head>  
    <body> 
    <div class="topnav" id="myTopnav">
  <a href="#home"><img src="logo.jpg" width="100" height="50"></a>
  <a href="index.php" style="margin-top:1.2%;">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br> 
        <div class="container">  
			<div class="table-responsive">  <br><br><br>
            <h1><b><center>Employees Details</center></b></h1><br>
				<!--<h3 align="center">Back to Tutorial - <a href="http://www.webslesson.info/2016/02/live-table-add-edit-delete-using-ajax-jquery-in-php-mysql.html" title="Live Table Add Edit Delete using Ajax Jquery in PHP Mysql">Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</a></h3><br />-->
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
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
<?php
    }
    else{
        header("location:admin.php");
    }
?>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    /*$(document).on('click', '#btn_add', function(){  
        var name = $('#name').text();  
        var parent_id = $('#parent_id').text();  
        if(name == '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(parent_id == '')  
        {  
            alert("Enter Parent ID");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, parent_id:parent_id},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.parent_id', function(){  
        var id = $(this).data("id2");  
        var parent_id = $(this).text();  
        edit_data(id,parent_id, "parent_id");  
    });*/  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
    $(document).on('click', '.btn_enable', function(){  
        var id=$(this).data("id4");  
        if(confirm("Are you sure you want to change this?"))  
        {  
            $.ajax({  
                url:"enable.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
    $(document).on('click', '.btn_disable', function(){  
        var id=$(this).data("id5");  
        if(confirm("Are you sure you want to change this?"))  
        {  
            $.ajax({  
                url:"disable.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
    $(document).on('click', '.btn_update', function(){  
        var id=$(this).data("id6");  
        if(confirm("Are you sure you want to change this?"))  
        {  
            $.ajax({  
                url:"update_new.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                   // alert(data);  
                   $('#result').html("<div class='alert alert-success'>"+data+"</div>"); 
                }
            });  
        }  
    });  
    /*function edit_options(category_id, options)  
    {  
        $.ajax({  
            url:"dropdown.php",  
            method:"POST",  
            data:{category_id:category_id, options:options},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('change', '.options', function(){  
        var category_id = $(this).data("id4");  
        var options = $(this).text();  
        edit_options(category_id, options, "options");  
    }); */ 
});  
</script>
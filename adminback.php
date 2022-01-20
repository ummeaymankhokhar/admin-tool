<?php
session_start();
include 'dbConfig.php';
$user = $_POST['user'];
$_SESSION['user']=$user;
$pass = $_POST['pass'];
$sql = "select * from admin where username = '$user' and password = '$pass'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
if ($row['username'] == $user && $row['password'] == $pass)
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    header("refresh:2; url=administration.php");
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    header("refresh:2; url=admin.php");
}

?>
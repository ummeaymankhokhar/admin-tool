<?php

session_start();

session_destroy();

?>

<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="topnav" id="myTopnav">
  <a href="#home"><img src="logo.jpg" width="100" height="50"></a>
  <a href="index.php" style="margin-top:1.2%;">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br><br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="profile.png" id="icon" alt="User Icon" />
    </div>
<br>
    <!-- Login Form -->
    <form method="POST">
      <input type="text" autocomplete="off" id="login" class="fadeIn second" name="user" placeholder="username">
      <input type="password" autocomplete="off" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" formaction="adminback.php">
    </form>

    <!-- Remind Passowrd -->
    <!--<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

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
</body>
</html>
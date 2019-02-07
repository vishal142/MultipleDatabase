<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fontendLogin.css">
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>



<div class="wrapper fadeInDown">
  <h3><center>How to connect multiple database in codeIgniter php</center></h3> <br><br>
  <div id="formContent">

    <!-- Tabs Titles -->

    <!-- Icon -->
    <!-- <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div> -->
 
    <!-- Login Form -->
    <form action="<?php echo base_url('index.php/Welcome/do_login')?>" method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="User Name">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

 
</body>
</html>
<?php
session_start();
if(isset($_SESSION['username']))
{
  header("location:index.php?lg=1");
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login Form">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>sign up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="sign-up.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <link rel="stylesheet" type="text/css" href="account.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="sign up">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">

<?php
include("header.php");

if(isset($_GET['err2']))
{
  echo '<script>';
   echo 'alert("Password & Confirm Password must be same.")';
   echo '</script>';
}

?>


    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_6fc1" data-image-width="1920" data-image-height="1080">
      <div class="form-reg">
    <h2 align="center"><b>Register</b></h2>
    <br>
    <form action="server.php" method="post">
      <div class="input-group">
        <label style="margin-left: 17px;">First name</label>
        <input style="height:40px;" type="text" name="fname" placeholder="enter First name">
      </div>
      <br>

      <div class="input-group">
        <label style="margin-left: 17px;">Last name</label>
        <input style="height:40px;" type="text" name="lname" placeholder="enter Last name">
      </div>
      <br>
      <div class="input-group">
        <label style="margin-left: 17px;">Email</label>
        <input style="height:40px;" type="text" name="email" placeholder="example@gmail.com">
      </div>
      <br>
      <div class="input-group">
        <label style="margin-left: 17px;">Password</label>
        <input style="height:40px;" type="password" name="password_1" placeholder="******">
      </div>
      <br>
      <div class="input-group">
        <label style="margin-left: 17px;">Confirm Password</label>
        <input style="height:40px;" type="password" name="password_2" placeholder="******">
      </div>
      <br>
      <div class="input-group">
        <button type="submit" name="register" class="btn-reg">Register</button>
      </div>

      <h5 align="center" id="register">Already registered ..? <a href="Login.php">Login</a></h5>
    </form>
  </div>
   </section>
    
    
    <?php
include("footer.php");
?>

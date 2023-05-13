<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Contact</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" type="text/css" href="account.css">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">


<?php
include("header.php");
?>

    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-7a02" data-image-width="1920" data-image-height="1080">
      <div class="form-reg" style="border: 2px solid black; border-radius: 5px;">
    <h2 align="center">Contact Us</h2>
    <br>
    <form action="sendemail.php" method="post">
      <div class="input-group">
        <label style="margin-left: 13px;">Email</label>
        <input style="height:40px;" type="text" name="unm">
      </div>
      <br>
      <div class="input-group">
        <label style="margin-left: 13px;">Message</label>
        <textarea style="border: 2px solid black; border-radius: 5px;" name="msg"></textarea>
      </div>
      <br>
      <div class="input-group">
        <button type="submit" name="login" class="btn-reg">Submit</button>
      </div>
    </form>
  </div>
      </section>
    
<?php
include("footer.php");
?>
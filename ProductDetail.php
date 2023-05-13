<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Rs.">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>ProductDetail</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="ProductDetail.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ProductDetail">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
<?php
include("header.php");
include("conn.php");
$id=$_GET['id'];
$query = "select * from product where p_id=$id";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result)
?>


    <section class="u-align-center u-clearfix u-section-1" id="sec-10a0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-carousel u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-thumbnails-position-bottom u-gallery-1" id="carousel-e131" data-interval="5000" data-u-ride="carousel">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide">
                <img style="object-fit: contain;" class="u-back-image u-expanded" src="images/<?php echo $row['p_img'];?>">
              </div>
              <div class="u-align-left u-over-slide u-valign-top u-over-slide-1">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"><?php echo $row['p_name'];?></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;">RS. <?php echo $row['price']; ?></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2" data-href="https://nicepage.com">
              <div class="u-back-slide" data-image-width="238" data-image-height="362">
                <img  class="u-back-image u-expanded u-image-contain" src="images/<?php echo $row['p_img2'];?>">
              </div>
              <div class="u-align-left u-over-slide u-valign-top u-over-slide-2">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;">Sample Title</h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="2836" data-image-height="1875">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded u-image-contain" src="images/<?php echo $row['p_img3'];?>">
              </div>
              <div class="u-align-left u-over-slide u-valign-top u-over-slide-3">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;">Sample Title</h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;">Sample Text</p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG" data-visited="true"></style>
              <style data-mode="MD" data-visited="true"></style>
              <style data-mode="SM" data-visited="true"></style>
              <style data-mode="XS" data-visited="true"></style>
            </div>
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-black u-carousel-control-1" href="#carousel-e131" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 8 8"><path d="M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 8 8"><path d="M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z"></path></svg>
            </span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-black u-carousel-control-2" href="#carousel-e131" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 8 8"><path d="M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 8 8"><path d="M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="0">
              <img style="object-fit: contain;" class="u-carousel-thumbnail-image u-image" src="images/<?php echo $row['p_img'];?>">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-e131" data-u-slide-to="1">
              <img style="object-fit: contain;" class="u-carousel-thumbnail-image u-image" src="images/<?php echo $row['p_img2'];?>">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-e131" data-u-slide-to="2">
              <img style="object-fit: contain;" class="u-carousel-thumbnail-image u-image" src="images/<?php echo $row['p_img3'];?>">
            </li>
          </ol>
        </div>
        <h1 class="u-text u-text-1"><?php echo $row['p_name'];?></h1>
        <h2 class="u-text u-text-palette-2-base u-text-2">Rs.<?php echo $row['price']; ?></h2>
        <p class="u-align-justify u-large-text u-text u-text-variant u-text-3"><?php echo $row['p_desc'];?>.</p>
         <?php
                  if(isset($_SESSION['username']))
                  {
                      $p =  $row['p_name'];
                      $pr =  $row['price'];
                      $d = date("y-m-d");

                    $sql = "INSERT INTO oreder(product_nm,price,dt) VALUES('$p',$pr,'$d')";
                    mysqli_query($con,$sql);
          ?>
         <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
            method="post" target="_top">
            <input type='hidden' name='business'
                value='sb-hwcpt15255652@business.example.com'> 
                <input type='hidden'
                name='item_name' value="<?php echo $row['p_name']; ?>"> 
                <input type='hidden'
                name='item_number' value="<?php echo $row['p_id'];?>"> 
                <input type='hidden'name='amount' value="<?php echo $row['price'];?>"> 
                <input type='hidden'
                name='no_shipping' value='1'> 
                <input type='hidden'
                name='currency_code' value='USD'> 
                <input type='hidden'
                name='notify_url'
                value='http://localhost/covictory/notify.php'>
            <input type='hidden' name='cancel_return'
                value='http://localhost/covictory/cancel.php'>
            <input type='hidden' name='return'
                value='http://localhost/covictory/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> 
            <input style="  margin-top: 70px;" class="u-border-none u-btn u-button-style u-grey-15 u-hover-palette-1-dark-1 u-btn-2"
                type="submit" name="pay_now" id="pay_now"
                Value="Pay Now">
        </form>
    <?php
          }
          else
          {
    ?>
              <br><br><h3 id="blink" style="color:red;">Please Login to buy this product ...</h3><br><br>
              <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 500);
    </script>
    <?php
          }
      ?>
      </div>
    </section>
    
    
<?php
include("footer.php");
?>

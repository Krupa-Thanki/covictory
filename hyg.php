<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Medicine</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Surgical.css" media="screen">

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
    <meta property="og:title" content="Surgical">
    <meta property="og:type" content="website">
  </head>
  <body  class="u-body u-xl-mode">

<?php
include("header.php");
include("conn.php");

$query = "select * from product where type=3";
$result = mysqli_query($con,$query);

?>


    <section class="u-align-center u-clearfix u-white u-section-1" id="sec-3df5" style="background-color: powderblue;">
      <br>
      <div class="row">
        <div class="container" style="margin-left: 200px;">
            <?php
            while($row=mysqli_fetch_assoc($result)){    
            ?>
            <div class="col-md-3" style="background-color: white;border: 1px solid black; height: 430px;margin: 20px;">
             
                <img alt="" style="width: 220px; object-fit: contain;height:250px;"data-image-width="400" data-image-height="500" src="images/<?php echo $row['p_img'];?>" >
                <h5 class="u-text u-text-1"><?php echo $row['p_name'];?></h5>
                <p class="u-text u-text-2">RS.<?php echo $row['price']; ?></p>
                <a href="ProductDetail.php?id=<?php echo $row['p_id']; ?>" data-page-id="8866558" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-text-palette-2-base u-btn-1">&nbsp;view Product Detail
                </a>
              </div>         
            <?php
           }
            ?>
        </div>
          
      </div>
    </section>
    
<?php
include("footer.php");
?>

<?php
session_start();
if(isset($_GET['lg']))
{
  echo '<script>';
   echo 'alert("Already logged in")';
   echo '</script>';
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome to COVICTORY, Let&amp;apos;s get victory with co-odination, ABOUT US">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/logo1.png",
        "sameAs": []
      }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

  <body data-home-page="index.php" data-home-page-title="Home" class="u-body u-stick-footer u-xl-mode">

  <?php
    include("header.php");
  ?>

    <section class="u-clearfix u-image u-image-contain u-section-1" id="sec-4474" data-image-width="1910" data-image-height="805">
      <img class="u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-height-xs u-image u-image-default u-image-1" src="images/Copy2ofindex.png" alt="" data-image-width="800" data-image-height="582">
      <h2 class="u-text u-text-default u-text-1"><b>Welcome to COVICTORY</b>
      <br>
      </h2>
      <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2">Let's get victory with co-odination</h2>
    </section>

    <section class="u-clearfix u-section-2" id="sec-3fe5">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

    <section class="u-align-center u-clearfix u-grey-5 u-section-3" id="sec-0768">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">ABOUT US</h1>
        <p class="u-text u-text-2"> CoVictory provides a common platform to user to get knoledge about 
health information, do a discussion about the health related issues and 
buy medicine and any health related product form this site.</p>
        <a href="About.php" data-page-id="7800525" class="u-btn u-btn-rectangle u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-0 u-btn-1">Learn more</a>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-section-4" id="sec-e03b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Our Products</h2>
        <p class="u-text u-text-2">CoVictory provides medical &amp; ayurvedic products selling feature 
for users.&nbsp;</p>
        <div class="u-clearfix u-gutter-50 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-border-2 u-border-grey-25 u-container-layout u-container-layout-1">
                  <img class="u-image u-image-default u-image-1" src="images/bandage.jpg" alt="">
                  <h3 class="u-align-left u-text u-text-3">&nbsp; &nbsp;Surgical Products</h3>
                  <br>
                  <a href="Surgical.php" class="u-btn u-btn-round u-button-style u-grey-10 u-radius-50 u-btn-1">&nbsp;SEE MORE</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-border-2 u-border-palette-1-base u-container-layout u-container-layout-2">
                  <img class="u-image u-image-default u-image-2" src="images/nitroglysrin.png" alt="" >
                  <h3 class="u-align-center u-text u-text-5"> Medicine Products &nbsp;</h3>
                  <br>
                  <a href="Medicine.php" class="u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-50 u-btn-2">&nbsp;SEE MORE</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-white u-layout-cell-3">
                <div class="u-border-2 u-border-grey-25 u-container-layout u-container-layout-3">
                  <img class="u-image u-image-default u-image-3" src="images/surgical-mask2.png" alt="">
                  <h3 class="u-text u-text-7">Hygiene Products&nbsp;</h3>
              
                  <a href="hyg.php" class="u-btn u-btn-round u-button-style u-grey-10 u-radius-50 u-btn-3"><span class="u-icon"></span>&nbsp;SEE MORE
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php
      include("footer.php"); 
    ?>
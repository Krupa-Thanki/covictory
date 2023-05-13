
<header class="u-clearfix u-header u-sticky u-sticky-b921 u-white" id="sec-5224" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">

  <style class="u-sticky-style" data-style-id="b921">
    .u-sticky-fixed.u-sticky-b921, .u-body.u-sticky-fixed .u-sticky-b921 
    {
      box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4) !important
    }
    .u-sticky-fixed.u-sticky-b921:before, .u-body.u-sticky-fixed .u-sticky-b921:before 
    {
      borders: top right bottom left !important; border-color: #adcce9 !important; border-width: 2px !important
    }
  </style>

  <div class="u-clearfix u-sheet u-sheet-1">
   
    <a href="index.php" class="u-image u-logo u-image-1" data-image-width="163" data-image-height="49">
      <img src="images/logo1.png" class="u-logo-image u-logo-image-1">
    </a>

    <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
        <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
          
          <svg class="u-svg-link" viewBox="0 0 24 24">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
          </svg>
          
          <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
            <g>
              <rect y="1" width="16" height="2"></rect>
              <rect y="7" width="16" height="2"></rect>
              <rect y="13" width="16" height="2"></rect>
            </g>
          </svg>
        </a>
      </div>
      
      <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 20px;">Home</a>
          </li>
          
          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="About.php" style="padding: 10px 20px;">About</a>
          </li>

          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="info.php" style="padding: 10px 20px;">Info</a>
          </li>

          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" style="padding: 10px 20px;" href="Product.php">Products</a>

            <div class="u-nav-popup">
              <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-white" href="Medicine.php">Medicine</a>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-white" href="Surgical.php">Sergicals</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="hyg.php">Hygiene</a>
                </li>
              </ul>
            </div>  
          </li>

          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Contact.php" style="padding: 10px 20px;">Contact</a>
          </li>

          <?php
                  if(isset($_SESSION['username']))
                  {
          ?>
          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="logout.php" style="padding: 10px 20px;">Logout</a>
          </li>
           <?php
                }
                else
                { 
          ?>

          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Login.php" style="padding: 10px 20px;">Sign In</a>
          </li>

          <li class="u-nav-item">
            <a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="sign-up.php" style="padding: 10px 20px;">sign up</a>
          </li>
        </ul>
      </div>
      <?php
      }
      ?>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="index.php">Home</a>
                </li>
                
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="About.php">About</a>
                </li>

                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" target="info.php">Info</a>
                </li>

                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="Product.php">Products</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link" target="_self">Medicine</a>
                      </li>

                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link" href="Surgical.php">Sergicals</a>
                      </li>

                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link" target="_self">Higenic</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
                </li>

                <?php
                  if(isset($_SESSION['username']))
                  {
                ?>
                 <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="logout.php">Log out</a>
                </li>
                <?php
                }
                else
                { 
                ?>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="Login.php">Sign In</a>
                </li>

                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="sign-up.php">sign up</a>
                </li>
                <?php
                }
              ?>

              </ul>
            </div>
          </div>
          
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
</header>


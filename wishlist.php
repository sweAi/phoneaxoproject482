<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title >PHONE AXO</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
 <style>
  .element {
  display: inline-block;
  width: 100px;
  height: 100px;
  background: #ce8888;

}
</style>
</head>

<body>

    <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" style="color:black;">PHONEAXO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="indexloged.php"style="color:black;">Home</a></li>
          <li><a href="#portfolio" style="color:black;">Product</a>
          <!-- nested menu  -->
          <ul>
          <li><a href="cart.php">Shopping Cart</a>
          <li><a href="wishlist.php">WishList</a>
          </ul>
          <!-- nested menu  -->
          </li>
          <li><a href="index.php" class="px-2 links" style="color:black;">signout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">WishList</h3>
        </header>
        <br>
        <br>
        <br>
        

          <div class="row portfolio-container">
 <!--==========================
      wish Section
    =======================================================-->
    <section id="wish">
      <div class="container">

        <div class="section-header">
          <br>
          <br>
          <br>
          <!-- <h3>WishList</h3> -->
          <!-- <p>If you have any problem or feedback you can contact us here </p> -->
        

          <div class="col-lg-4 col-md-6 portfolio-item filter-Hawawi wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/hawawi mate 20 cover.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/hawawi mate 20 cover.jpg" class="link-preview" data-lightbox="portfolio" data-title="hawawi mate 20 cover" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Hawawi</h4>
                <p>hawawi mate 20 cover</p>
                <?php
                $available = true;//TRUE --> AVAILABLE ___ FALSE --> NOT AVAILABLE
                $price = "59.99SR";//CHOOSE ANY PRICE FOR PRUDUCT
                echo "The item is ";
                if ($available){
                echo '<span style="color:green ; font-weight:bold">Available</span>' ;
                echo "<h3>Price : $price</h3>";
                echo '<form method="post" action="#cart">';
                echo '<button onclick="alert(\'The item has been added\')" class="btn btn-lg btn-success btn-block" type="submit">Add to Shopping Cart</button>';
                echo '</form>';
                echo '<br>';
                echo '<form method="post" action="#wish">';
                echo '<button onclick="alert(\'The Item Is Removed From Cart\')" class="btn btn-lg btn-danger btn-block" type="submit">remove from wishlist</button>';
                
                echo '</form><br>';
              }
                else{
                echo '<span style="color:red ; font-weight:bold">NOT Available</span>';
                echo "<h3>Price : $price</h3>";
                echo '<form method="post" action="#wish">';
                echo '<button onclick="alert(\'The Item Is Removed From Cart\')" class="btn btn-lg btn-danger btn-block" type="submit">remove from wishlist</button>';
                echo '</form>';                }
                ?>
              </div>
            </div>
          </div>
        
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-Samsung wow fadeInUp">
            <div class="portfolio-wrap" >
              <figure>
                <img src="img/portfolio/samsung s20 screen protector.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/samsung s20 screen protector.jpg" class="link-preview" data-lightbox="portfolio" data-title="samsung s20 screen protector" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Samsung</h4>
                <p>samsung s20 screen protector</p>
                <?php
                $available = false;//TRUE --> AVAILABLE ___ FALSE --> NOT AVAILABLE
                $price = "49.99SR";//CHOOSE ANY PRICE FOR PRUDUCT
                echo "The item is ";
                if ($available){
                echo '<span style="color:green ; font-weight:bold">Available</span>' ;
                echo "<h3>Price : $price</h3>";
                echo '<form method="post" action="#cart">';
                echo '<button onclick="alert(\'The item has been added\')" class="btn btn-lg btn-success btn-block" type="submit">Add to Shopping Cart</button>';
                echo '</form>';
                echo '<br>';
                echo '<form method="post" action="#wish">';
                echo '<button onclick="alert(\'The Item Is Removed From Cart\')" class="btn btn-lg btn-danger btn-block" type="submit">remove from wishlist</button>';
                echo '</form>';
              }
                else{
                echo '<span style="color:red ; font-weight:bold">NOT Available</span>';
                echo "<h3>Price : $price</h3>";
                echo '<form method="post" action="#wish">';
                echo '<button onclick="alert(\'The Item Is Removed From Cart\')" class="btn btn-lg btn-danger btn-block" type="submit">remove from wishlist</button>';
                echo '</form>';                }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-apple wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/iphone 11 screen.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/iphone 11 screen.jpg" data-lightbox="portfolio" data-title="Iphone 11 screen protector" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <!-- <a href="" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4>Apple</h4>
                <p>Iphone 11 screen protector </p>
                <!-- copy from hereeeeeeeeeeeeeeeeeee -->
                <?php
                $available = true;//TRUE --> AVAILABLE ___ FALSE --> NOT AVAILABLE
                $price = "99.99SR";//CHOOSE ANY PRICE FOR PRUDUCT   // if there is an edit , edit in intex.php too
                echo "The item is ";
                if ($available){
                echo '<span style="color:green ; font-weight:bold">Available</span>' ;
                echo "<h3>Price : $price</h3>";
                echo '<form method="post" action="#cart">';
                echo '<button onclick="alert(\'The item has been added\')" class="btn btn-lg btn-success btn-block" type="submit">Add to Shopping Cart</button>';
                echo '</form>';
                echo '<br>';
                echo '<form method="post" action="#wish">';
                echo '<button onclick="alert(\'The Item Is Removed From Cart\')" class="btn btn-lg btn-danger btn-block" type="submit">remove from wishlist</button>';
                echo '</form>';
              }
                else{
                echo '<span style="color:red ; font-weight:bold">NOT Available</span>';
                echo "<h3>Price : $price</h3>";
                echo '<form method="post" action="#wish">';
                echo '<button onclick="alert(\'The Item Is Removed From Cart\')" class="btn btn-lg btn-danger btn-block" type="submit">remove from wishlist</button>';
                echo '</form>';                }
                ?>
                <!-- till hereeeeeeeeeeeeeeeeeeeeeee -->
              </div>
            </div>
          </div>
      </div>
      <br>
      <br>
      <br>
     </section>
    </div>
    <br>
    <br>
 
    </div>
     <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>PHONEAXO</h3>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>Riyadh , , Suadi Arabia
              street abu bakar <br>
              Riyadh, Yassmin 1214<br>
              Saudi Arabia <br>
              <strong>Phone:</strong> 059 938 8068<br>
              <strong>Email:</strong> d7oombinsaleh@hotmail.com<br>
            </p>



          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PHONEAXO</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

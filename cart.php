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
  .center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
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
          <li class="menu-active" style="color:black;"><a href="indexloged.php">Home</a></li>
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
  
<section id="cart" class="section-bg wow fadeInUp">
      <div class="container" style = "position:relative; left:80px; top:2px; ">

        <div class="section-header">
          <h3>Shopping Cart</h3>
          <!-- <p>If you have any problem or feedback you can contact us here </p> -->
          <div class="row-md-4 wow fadeInUp">
          <table style="width:100%">
       <!-- needs css -->
          <thead>
          <tr>
         <th>Product category</th>
          <th>Product Name</th>
           <th>Quantity</th>
           <th>Price</th>
           <th></th>
        </tr>
        </thead>

        <tbody>
         <tr>
         <!-- <td><img src="img/portfolio/hawawi mate 20 screen.jpg" class="img-fluid" alt=""></td> -->
          <td>Apple</td>
          <td>IPHONE 11 SCREEN PROTECTOR</td>
          <td>2</td>
          <td>199.98SR</td>
          <td>
<button onclick="alert('You Added One Quantity')" class="btn btn-outline-secondary">+</button>
<button onclick="alert('You Reduced One Quantity')" class="btn btn-outline-secondary">-</button>
          </td>
          <td>
<button onclick="alert('The Item Is Removed From Cart')" class="btn btn-lg btn-danger btn-block">REMOVE</button>
          </td>
      </tr>
       <tr>
          <td>Hawawi</td>
          <td>HAWAWI MATE 20 SCREEN PROTECTOR</td>
          <td>1</td>
          <td>199.99SR</td>
          <td>
<button onclick="alert('You Added One Quantity')" class="btn btn-outline-secondary">+</button>
<button onclick="alert('You Reduced One Quantity')" class="btn btn-outline-secondary">-</button>
          </td>
          <td>
<button onclick="alert('The Item Is Removed From Cart')" class="btn btn-lg btn-danger btn-block">REMOVE</button>
          </td>
       </tr>
       <tr>
          <td>Samsung</td>
          <td>SAMSUNG NOTE 10 SCREEN PROTECTOR</td>
          <td>1</td>
          <td>99.99SR</td>
          <td>
<button onclick="alert('You Added One Quantity')" class="btn btn-outline-secondary">+</button>
<button onclick="alert('You Reduced One Quantity')" class="btn btn-outline-secondary">-</button>
          </td>
          <td>
<button onclick="alert('The Item Is Removed From Cart')" class="btn btn-lg btn-danger btn-block">REMOVE</button>
          </td>
       </tr>
       <br>
       <!-- <tr>
         <td>.</td>
      </tr> -->
        </tbody>

        <tfoot>
    <tr>
      <td></td>
      <td></td>
    <th>Total</th>
      <th>499.96SR</th>
      <td>
      <form class="form-signin" method="post" action="payment.php">
      <button onclick="" type="submit" class="btn btn-lg btn-success btn-block">PAY NOW</button></form>
      </td>
    </tr>
        </tfoot>


        </table>
        <br>
        <br>
        <br>
        </div>
      </div>
      </div>
    </section>
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
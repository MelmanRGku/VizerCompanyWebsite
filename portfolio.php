<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Browse Homes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head>

<body>

    <!--Header-->
   <header>       
         <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="images/IzerLabsLogo.png" alt="logo" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
               <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="services.html">Browse Home</a></li>
                            <li class="active"><a href="portfolio.html">Pricing</a></li>
                 <li><a href="contact-us.html">Request Listing</a></li>
                       
              </ul>
            </div><!--/.nav-collapse -->
          </div>
         </nav>
       </header>  <!-- /header -->

<?php

$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$allListings =  getAllListings();
$counter =  1;
?>


    <section class="title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Browse Homes</h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li> 
                        <li class="active">Browse Homes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->     

    <section id="portfolio" class="container main">  
<div class="head-title">
            <h2>Browse Homes</h2>
            <p class="lead">Available Houses</p>
        </div>  
        <ul class="gallery">
            <!--Item 1-->
           <?php
            echo count($allListings);
            foreach($allListings as $listing)
            {
            ?>
            <li>
                <div class="preview">
                      <?php
                        echo '<img alt=" " src="images/portfolio/thumb/House'.$counter.'.jpg">';
                      ?>                      
                    <div class="overlay">
                    </div>
                    <?php
                        echo '<div class="links">';
                        echo '<a href="" data-toggle="modal" data-target=".modal-'.$counter.'"><i class="fa fa-eye"></i></a>';
                        echo "</div>";
                    ?>    
                </div>
                  <?php
                    echo '<div class="desc">';
                    echo "<h5>".$listing["Address"]["S"]."</h5>";
                    echo "</div>";
                    echo '<div class="modal fade modal-'.$counter.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">'
                  ?>                
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <?php
                        echo '<img src="images/portfolio/full/House'.$counter.'.jpg" alt=" " width="100%" style="max-height:400px">';
                        echo '<div class="desc">';
                        echo "<h5>".$listing["Address"]["S"]."</h5>";
                        echo "<small>".$listing["City"]["S"]."</small>";
                        echo "</div>";
                      ?>
                    </div>
                  </div>
                </div>                           
            </li>
            <!--/Item 1--> 
            <?php
            $counter = $counter + 1;
            }

            ?>
            
        </ul>
        
    </section>

  <!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--rows-->
        <div class="row">

            <div class="col-md-3">
                <h4>Our Company</h4>
                <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                 
            </div>

        </div>

            <!--Important Links-->
            <div id="tweets" class="col-md-3">
                <h4>Useful links</h4>
                <div>
                    <ul class="arrow">
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Home</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">About Us</a></li> 
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Services</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Portfolio</a></li> 
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Pricing</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Contacts</a></li>
                        </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="col-md-3">
                <h4>Latest News</h4>
                <div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">Incredible content</a>
                                    <small>May 8, 2015</small>
                                </li>
                                <li>
                                    <a href="#">Best shoots</a>
                                    <small>June 23, 2015</small>
                                </li>
                                <li>
                                    <a href="#">New Terms and Conditions</a>
                                    <small>September 15, 2015</small>
                                </li>
                                  <li>
                                    <a href="#">Terms and Conditions</a>
                                    <small>September 18, 2015</small>
                                </li>
                            </ul>
                </div>
            </div>
             
            <!--End Archives-->

        
            <!--Contact Form-->
            <div class="col-md-3">
                <h4>Contact Us</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="fa fa-home"></i>1234 Andrews Street, Micigana<br>NewYork 10250
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        support@youremail.com
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        www.yoursite.com
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        123-456-7891
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

    </div>
    <!--/row-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 cp">
                &copy; 2015 All Rights Reserved. Template By <a target="_blank" href="http://webthemez.com/" title="Free Bootstrap HTML templates">Webthemez</a>
            </div>
            <!--/Copyright-->

            <div class="col-md-6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>                  
                </ul>
            </div>

            <div class="col-md-1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->


<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

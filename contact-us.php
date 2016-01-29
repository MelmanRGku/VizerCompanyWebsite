<?php

$projectRoot = "./";
include_once($projectRoot."/template/header.php");

?>
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
              <a class="navbar-brand" href="index.php"><img src="images/IzerLabsLogo.png" alt="logo" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="portfolio.php">Browse Homes</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li class="active"><a href="contact-us.php">Request a listing</a></li>                     
              </ul>
            </div><!--/.nav-collapse -->
          </div>
         </nav>
       </header>
    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Request A Listing </h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li> 
                        <li class="active">Request A Listing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->  
    <section id="contact-page" class="container">
	 <div class="head-title">
            <h2>Want to stand out from the crowd? Start your virtual toruing service today!</h2>
            <p class="lead">Request a house scan</p>
        </div>
        <div class="row">
 
        <div class="col-md-3">
            <h4>Our Place</h4>
            <p>We  offer a fast response service! We want to make sure you get the scan as fast as possible.</p>
            <p>Have any questions? Our doors are always open.</p>
          <ul class="unstyled address">
                    <li>
                        <i class="fa fa-home"></i>University of Calgary<br>Calgary Alberta
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        contact@IzerLabs.com
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        www.izerlabs.com
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        555-Taco
                    </li>
                </ul>
        </div>
         <div class="col-md-8"> 
                <div class="status alert alert-success" style="display: none"></div>

                 <form role="form" method="post" action="./submitRequest.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5">
                        <label>First Name</label>
                        <input type="text" class="form-control" required="required" placeholder="Your First Name" name="firstName">
                        <label>Last Name</label>
                        <input type="text" class="form-control" required="required" placeholder="Your Last Name" name="lastName">
                        <label>Email Address</label>    
                        <input type="text" class="form-control" required="required" placeholder="Your email address" name="emailAddress">
                    </div>
                    <div class="col-md-7">
                        <label>House Address</label>    
                        <input type="text" class="form-control" required="required" placeholder="123 Taco Street" name="houseAddress">
                        <label>Phone Number</label>    
                        <input type="text" class="form-control" required="required" placeholder="123-456-7890" name="phoneNumber">
                        <label>Message</label>
                        <input type="text" class="form-control" required="required" placeholder="Additional Information" name="messageField">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Submit</button>
                <p> </p>

            </form>
        </div>

    </div>

</section>
 <section class="no-margin">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.294899169211!2d-74.01454923459501!3d40.711524179332095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a19881b83fb%3A0x979b0a4fe0492ce6!2sWorld+Trade+Center%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1446220860553" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>   

</body>
</html>
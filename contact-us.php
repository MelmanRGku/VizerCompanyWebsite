<?php

session_start();

$projectRoot = "./";
include_once($projectRoot."/template/header.php");
include_once($projectRoot."/includes/functions.php");

if(isset($_SESSION['user'])) {
    $user = getUser($_SESSION['user']);
}

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
                            
                            <li><a href="portfolio.php">Browse Homes</a></li>
                            
                            <li class="active"><a href="contact-us.php">Request a Listing</a></li>
                            <?php if(!isset($_SESSION['user'])) : ?> 
                            <li><a href="login.php">Login</a></li>
                            <?php endif; ?>  
                            <?php if(isset($_SESSION['user'])) : ?>  
                            <li><a href="logout.php">Logout
                                <?php print_r(getUser($_SESSION['user'])['Items'][0]['Name']['S']); ?></a></li>
                            <?php endif; ?>                      
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
            <h2>Want to stand out from the crowd? Start your virtual touring service today!</h2>
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
                        403-555-IZER
                    </li>
                </ul>
        </div>
         <div class="col-md-8"> 
                <div class="status alert alert-success" style="display: none"></div>

                 <form role="form" method="post" action="./submitRequest.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5">
                        <?php if(!isset($_SESSION['user'])) : ?>
                            <label>First Name</label>
                            <input type="text" class="form-control" required="required" placeholder="Your First Name" name="firstName" required>
                            <label>Last Name</label>
                            <input type="text" class="form-control" required="required" placeholder="Your Last Name" name="lastName" required>
                            <label>Email Address</label>    
                            <input type="text" class="form-control" required="required" placeholder="Your email address" name="emailAddress" required>
                        <?php endif; ?>
                        <?php if(isset($_SESSION['user'])) : ?>
                            <label>First Name</label>
                            <input type="text" class="form-control" required="required" value=<?php print_r($user['Items'][0]['Name']['S']) ?> name="firstName" required>
                            <label>Last Name</label>
                            <input type="text" class="form-control" required="required" value=<?php print_r($user['Items'][0]['Name']['S']) ?> name="lastName" required>
                            <label>Email Address</label>    
                            <input type="text" class="form-control" required="required" value=<?php print_r($user['Items'][0]['Email']['S']) ?> name="emailAddress" required>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-7">
                        <label>House Address</label>    
                        <input type="text" class="form-control" required="required" placeholder="123 Taco Street" name="houseAddress" required>
                        <?php if(!isset($_SESSION['user'])) : ?>
                        <label>Phone Number</label>    
                        <input type="text" class="form-control" required="required" placeholder="123-456-7890" name="phoneNumber" required>
                        <?php endif; ?>
                        <?php if(isset($_SESSION['user'])) : ?>
                        <label>Phone Number</label>    
                        <input type="text" class="form-control" required="required" value=<?php print_r($user['Items'][0]['ContactPhone']['S']) ?> name="phoneNumber" required>
                        <?php endif; ?>
                        <label>Message</label>
                        <input type="text" class="form-control" required="required" placeholder="Additional Information" name="messageField">
                    </div>

                </div>
                <p></p>
                <button type="submit" class="btn btn-primary btn-large pull-right">Submit</button>
                <p> </p>

            </form>
        </div>

    </div>

</section>
 <section class="no-margin">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.641736003033!2d-114.1379893845653!3d51.07816324981723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717db7481cb3b1%3A0x36aff4a9e3c803fb!2sUniversity+of+Calgary!5e0!3m2!1sen!2sca!4v1459198422944!" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>   

</body>
</html>

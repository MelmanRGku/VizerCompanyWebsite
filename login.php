<?php

session_start();

$projectRoot = "./";
include_once($projectRoot."/template/header.php");
include_once($projectRoot."/includes/functions.php");

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
                            <li><a href="contact-us.php">Request a listing</a></li>
                            <li class="active"><a href="login.php">Login</a></li>
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
                    <h1>Login </h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li> 
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->  
    <section id="contact-page" class="container">
	 <div class="head-title">
            <h2>Have you requested our services before? Login to edit your listings and request new ones.</h2>
            <p class="lead">Login</p>
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
                        izerlabs@gmail.com
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        555-Taco
                    </li>
                </ul>
        </div>
         <div class="col-md-8"> 
                <div class="status alert alert-success" style="display: none"></div>

                 <form role="form" method="post" action="./verifyLogin.php" enctype="multipart/form-data">
                  <div class="row">
                    <label>Email</label>
                    <input type="email" class="form-control" required="required" placeholder="Email" name="username">
                    <label>Password</label>
                    <input type="password" class="form-control" required="required" placeholder="Password" name="password">
                </div>
                <p> </p>
                <button type="submit" class="btn btn-primary btn-large pull-right">Submit</button>
                <p> </p>

            </form>
        </div>

    </div>

</section>

<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>   

</body>
</html>

<?php

session_start();

$projectRoot = "./";
include_once($projectRoot."/template/header.php");
include_once($projectRoot."/includes/functions.php");

?>

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
              <a class="navbar-brand" href="index.php"><img src="images/IzerLabsLogo.png" alt="logo" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li class="active"><a href="services.php">Services</a></li>
                            <li><a href="portfolio.php">Browse Homes</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="contact-us.php">Request a listing</a></li>
                            <?php if(!isset($_SESSION['user'])) : ?>  
                            <li><a href="login.php">Login</a></li>
                            <?php endif; ?>  
                            <?php if(isset($_SESSION['user'])) : ?>  
                            <li><a href="userListings.php">My Listings</a></li> 
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
                    <h1>Services</h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li> 
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->    

    
<!--Services-->
<section id="services">
    <div class="container">
	 <div class="head-title">
            <h2>Our Offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        </div>
	<div class="row">
            <div class="col-md-6"> 
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p><br>
               
 
            </div>
            <div class="col-md-6">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p><br>
               
 
            </div>
        </div>
		
        <div class="head-title">
            <h2>Our Services</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        </div>

          <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">User Research</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-info"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Information Architect</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">UI Designing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="head-title"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">UI Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Back-end Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Quality Analysis</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->
<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

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
                            <li class="active"><a href="pricing.php">Pricing</a></li>
                            <li><a href="contact-us.php">Request a listing</a></li>                     
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
                    <h1>Pricing</h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li> 
                        <li class="active">Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->  

    <section id="pricing-table" class="container">
	<div class="head-title">
            <h2>Our Portfolio</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
			 
        </div>	
        

        <div class="row center clearfix">
            <div class="col-md-3">
                <ul class="plan plan1">
                    <li class="plan-name">
                        <h3>Basic</h3>
                    </li>
                    <li class="plan-price">
                        <strong>$29</strong> / month
                    </li>
                    <li>
                        <strong>5GB</strong> Storage
                    </li>
                    <li>
                        <strong>1GB</strong> RAM
                    </li>
                    <li>
                        <strong>400GB</strong> Bandwidth
                    </li>
                    <li>
                        <strong>10</strong> Email Address
                    </li>
                    <li>
                        <strong>Forum</strong> Support
                    </li>
                    <li class="plan-action">
                        <a href="#" class="btn btn-transparent">Signup Now!</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="plan plan2 featured">
                    <li class="plan-name">
                        <h3>Standard</h3>
                    </li>
                    <li class="plan-price">
                        <strong>$39</strong> / month
                    </li>
                    <li>
                        <strong>5GB</strong> Storage
                    </li>
                    <li>
                        <strong>1GB</strong> RAM
                    </li>
                    <li>
                        <strong>400GB</strong> Bandwidth
                    </li>
                    <li>
                        <strong>10</strong> Email Address
                    </li>
                    <li>
                        <strong>Forum</strong> Support
                    </li>
                    <li class="plan-action">
                        <a href="#" class="btn btn-transparent">Signup Now!</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="plan plan3">
                    <li class="plan-name">
                        <h3>Advanced</h3>
                    </li>
                    <li class="plan-price">
                        <strong>$199</strong> / month
                    </li>
                    <li>
                        <strong>50GB</strong> Storage
                    </li>
                    <li>
                        <strong>8GB</strong> RAM
                    </li>
                    <li>
                        <strong>1024GB</strong> Bandwidth
                    </li>
                    <li>
                        <strong>Unlimited</strong> Email Address
                    </li>
                    <li>
                        <strong>Forum</strong> Support
                    </li>
                    <li class="plan-action">
                        <a href="#" class="btn btn-transparent">Signup Now!</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="plan plan4">
                    <li class="plan-name">
                        <h3>Advanced</h3>
                    </li>
                    <li class="plan-price">
                        <strong>$199</strong> / month
                    </li>
                    <li>
                        <strong>50GB</strong> Storage
                    </li>
                    <li>
                        <strong>8GB</strong> RAM
                    </li>
                    <li>
                        <strong>1024GB</strong> Bandwidth
                    </li>
                    <li>
                        <strong>Unlimited</strong> Email Address
                    </li>
                    <li>
                        <strong>Forum</strong> Support
                    </li>
                    <li class="plan-action">
                        <a href="#" class="btn btn-transparent">Signup Now!</a>
                    </li>
                </ul>
            </div>
        </div>
        <p>&nbsp;</p>
    </section>

<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

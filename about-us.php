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
                            <li class="active"><a href="about-us.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="portfolio.php">Browse Homes</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="contact-us.php">Request a listing</a></li>
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
                    <h1>About Us </h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li> 
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->    
    <section id="about-us" class="container main">
        <div class="row">
            <div class="col-md-6">
			<h2>Who We Are?</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p><br>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida</li>
                    <li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
                    <li><i class="fa fa-check color-green"></i> Responsive Bootstrap Template</li>
                    <li><i class="fa fa-check color-green"></i> Elit non mi porta gravida</li>
                    <li><i class="fa fa-check color-green"></i> Award winning digital agency</li>
                </ul><br>
 
            </div>
            <div class="col-md-6">
          <img class="img-responsive margin-bottom-20" src="images/portfolio/thumb/item1.jpg" alt="">
            </div>
        </div> 
<section class="team"> 
 <div class="head-title">
 <br>
 <br> 
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
            <h2>Our Team</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/team1.jpg" alt="" >
      <div class="caption">
        <h4>Keant Michell</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
         <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>

            <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/team2.jpg" alt="" >
      <div class="caption">
        <h4>Vincen Jemesl</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>

            <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/team3.jpg" alt="" >
      <div class="caption">
        <h4>Rechn Kristean</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
         <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>
           <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/team4.jpg" alt="" >
      <div class="caption">
        <h4>John Kernrl</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
         <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>
        </div>
		</section> 

 </section>

<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

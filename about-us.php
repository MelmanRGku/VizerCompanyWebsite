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
               <p>We are a group of fourth year engineering students with desire to change and optimize the real estate market today!</p>
                    <p>In order to complete our degrees in engineering we were required to do a design project from start to finish. Through a group interest in gaming and virtual reality we decided that new technology that was entering the gaming world could be used in other markets.  This is what lead to the development of the Izer Labs Vizer that brings virtual reality touring to the real estate market. This product work to:</p><br>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Decrease time spent viewing homes in person</li>
                    <li><i class="fa fa-check color-green"></i> Increase realiabilty of images</li>
                    <li><i class="fa fa-check color-green"></i> Help realtors highlight key features of a home</li>
                    <li><i class="fa fa-check color-green"></i> Enhance the home viewing experience</li>
                    <li><i class="fa fa-check color-green"></i> Change the real estate market for the better</li>
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
               <p>Pictures from online listings for houses can undersell a property or be deciving so that is why we came up with Vizer. This product allows the user to turn their smartphone into a virtual reality viewer throught the use of our website and a Google Cardboard. Besides getting a more accurate view of a home the Vizer also helps to save time by eliminating the need to see numerous homes in person.</p>
                    <p>  </p><br>
               
 
            </div>
            <div class="col-md-6">
         <p>  </p>
                    <p>  </p><br>
               
 
            </div>
        </div>
            <h2>Our Team</h2>
            <p class="lead">The brains and faces behind Izer Labs</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/Fadi.jpg" alt="" >
      <div class="caption">
        <h4>Fadi Botros</h4>
        <p>Fourth year software engineering student at the University of Calgary and team leader for Izer Labs.</p>
         <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>

            <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/Katherine.jpg" alt="" >
      <div class="caption">
        <h4>Katherine Juhasz</h4>
        <p>Fourth year electrical engineering student at the University of Calgary.</p>
          <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>

            <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/Melvin.jpg" alt="" >
      <div class="caption">
        <h4>Melvin Rodriguez</h4>
        <p>Fourth year software engineering student at the University of Calgary.</p>
         <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>
           <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <img src="images/Matt.jpg" alt="" >
      <div class="caption">
        <h4>Matthew Howitt</h4>
        <p>Fourth year software engineering student at the University of Calgary.</p>
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

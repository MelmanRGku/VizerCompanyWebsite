<?php
session_unset();
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
			   <li class="active"><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About Us</a></li>
							
                            <li><a href="portfolio.php">Browse Homes</a></li>
							
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

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container"> 
                        <h2>360° Viewing</h2>
                        <h3 class="head-title">View a house from all possible angles</h3> 
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container"> 
                        <h2>A New Perspective</h2>
                        <h3 class="head-title">Experience a full touring experience without leaving the comfort of your own home</h3> 
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container"> 
                    <h2>Obtain Specific House Details</h2>
                    <h3 class="head-title">Got a new furnace? Recently replaced the counter tops? Highlight features as potential buyers take a tour</h3> 
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="fa fa-chevron-left"></i></span>
        <span class="nav-arrow-next"><i class="fa fa-chevron-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->
 

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center head-title">
            <h2>Virtual Reality Real Estate Touring</h2>
            <p class="lead">Experience various houses without physically leaving your home</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Virtual Reality</h4>
                        <p>A simple and inexpensive cardboard viewer allows you to transform your smartphone into a full virtual touring experience</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-info"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Desktop Touring</h4>
                        <p>Don't have a viewer? Fire up a brwoser from your computer or smartphone and start touring!</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Discover Hidden Features</h4>
                        <p>Discover more information about specific features around the house while you take your virtual tour</p>
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
                        <h4 class="media-heading">Make Your House Stand out</h4>
                        <p>Standout from average picture listings. Offer a full virtual touring experience to potential buyers</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">An Easy Way to Promote your House</h4>
                        <p>Place the link to your Vritual Tour anywhere!</p>
                    </div>
                </div>
            </div>            

            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Add a New Dimension to Home Viewing</h4>
                        <p>Highlight everything from floor to ceiling!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->
<section id="about-us" class="bgColor">
 <div class="container">
<div class="row margin-bottom-30">
        	<!-- Welcome Block -->
    		<div class="col-md-8 md-margin-bottom-40">
    			<div class="headline"><h2>About Us</h2></div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive margin-bottom-20" src="images/portfolio/thumb/item1.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p>Izer labs was formed by a group of university students looking to improve the home buying and selling experience.</p>
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-check color-green"></i> Fast Service</li>
                            <li><i class="fa fa-check color-green"></i> Reliable</li>
                            <li><i class="fa fa-check color-green"></i> Scalable</li>
                            <li><i class="fa fa-check color-green"></i> Easy To Use</li>
                        </ul>                    
                    </div>
                </div>

                <blockquote class="hero-unify">
                    <p>"Success is in the eye of the beholder".</p>
                    <small>Project Manager, Fadi Botros</small>
                </blockquote>
            </div><!--/col-md-8-->        

            <!-- Latest Shots -->
            <div class="col-md-4">
    			<div class="headline"><h2>Latest News</h2></div>
    			<p>
				Izer labs welcomes you to attend the capstone fair on March 30th 2016 to get a hands on experience with the latest protype of Vizer, The Virtual Reality Touring service.
				</p>
            </div><!--/col-md-4-->
    	</div>
</div>		
</section>

<?php

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>
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
                            <li><a href="services.html">Services</a></li>
                            <li class="active"><a href="portfolio.php">Browse Homes</a></li>
                            <li><a href="portfolio.php">Pricing</a></li>
                            <li><a href="contact-us.html">Request a listing</a></li>                     
              </ul>
            </div><!--/.nav-collapse -->
          </div>
         </nav>
       </header>
    <!-- /header -->

<?php

$projectRoot = "./";
include_once($projectRoot."/template/header.php");
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

<?php

include_once("/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>



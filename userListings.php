<?php

session_start();

$projectRoot = "./";
include_once($projectRoot."/template/header.php");
include_once($projectRoot."/includes/functions.php");

$allListings =  getUsersListings($_SESSION["user"]);
$counter =  1;
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
                            <li><a href="contact-us.php">Request a listing</a></li>
                            <?php if(!isset($_SESSION['user'])) : ?>  
                            <li><a href="login.php">Login</a></li>
                            <?php endif; ?>  
                            <?php if(isset($_SESSION['user'])) : ?> 
                                <?php if(!empty(getUser($_SESSION['user'])['Items'])) : ?>
                                <li><a href="userListings.php">My Listings</a></li> 
                                <li><a href="logout.php">Logout
                                    <?php print_r(getUser($_SESSION['user'])['Items'][0]['Name']['S']); ?></a></li>
                                <?php else: session_unset(); header('Location: ./'); endif; ?>    
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
                    <h1>My Listings</h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li> 
                        <li class="active">My Listings</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->     

    <section id="portfolio" class="container main">  
<div class="head-title">
            <h2>My Listings</h2>
            <p class="lead">Currently Listed Houses</p>
        </div>  
        <ul class="gallery">
            <!--Item 1-->
           <?php
            foreach($allListings["Items"] as $listing)
            {
            ?>
            <li>
                <div class="preview">
                      <?php
                        echo '<img alt=" " src="https://s3-us-west-2.amazonaws.com/izerlabshousestorage/'.$listing["HousePhotoID"]["S"].'">';
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
                    echo '<td><a type="button" href="./editListing.php?id='.$listing["ListingID"]["S"].'" class="btn btn-block btn-warning">Edit</a></td>';
                    echo "</div>";
                    echo '<div class="modal fade modal-'.$counter.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">'
                  ?>                
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <?php
                        echo '<img alt=" " src="https://s3-us-west-2.amazonaws.com/izerlabshousestorage/'.$listing["HousePhotoID"]["S"].'"width="100%" style="max-height:400px">';
                        echo '<div class="desc">';
                        echo "<h5>".$listing["Address"]["S"]."</h5>";
                        echo "<small>".$listing["City"]["S"]."</small>";
                        echo '<h6><a href="http://ec2-52-35-129-61.us-west-2.compute.amazonaws.com/VizerVR/cardboard2/prototype1_VR.html" class="btn btn-transparent">Virtual Reality</a>         <a href="http://ec2-52-35-129-61.us-west-2.compute.amazonaws.com/VizerVR/cardboard2/prototype1.html" class="btn btn-transparent">Desktop Touring</a></h6>';
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

include_once($projectRoot."/template/footer.php");
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>



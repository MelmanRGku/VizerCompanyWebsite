<?php

session_start();

$projectRoot = "./";
include_once($projectRoot."/template/header.php");
include_once($projectRoot."/includes/functions.php");

$listing = getListing($_GET["id"]);

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
                            <?php if(isset($_SESSION['user'])) : ?>
                            <li class="active"><a href="userListings.php">My Listings</a></li> 
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
                    <h1>Edit a Listing </h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="userListings.php">My Listings</a></li>
                        <li class="active">Edit a Listing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->  
    <section id="contact-page" class="container">
	 <div class="head-title">
            <h2>Edit this Property.</h2>
            <p class="lead">Edit Listing.</p>
        </div>
        <div class="row">
 
         <div class="col-md-8"> 
                <div class="status alert alert-success" style="display: none"></div>

                 <form role="form" method="post" action="./submitEditListing.php" enctype="multipart/form-data">
                  <div class="row">
                    
                    <input type="hidden" class="form-control" name="idField" value=<?php print_r($listing["Item"]["ListingID"]["S"]) ?> required>

                    <label>Description</label>
                    <input type="text" class="form-control" required="required" value=<?php print_r($listing["Item"]["Description"]["S"]) ?> name="descriptionField">
                    <label>Private</label>
                    <input type="checkbox" name="privateField" <?php if($listing["Item"]["Private"]["BOOL"]) : ?> checked="checked" <?php endif; ?>>
                </div>
                <p> </p>
                <button type="submit" class="btn btn-primary btn-large">Submit</button>
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

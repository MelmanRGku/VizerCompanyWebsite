<?php

header('Content-type: application/jason');

session_start();	

$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$rooms = getListingAll($_POST['ListingID']);

echo json_encode( $rooms );

?>
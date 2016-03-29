<?php

session_start();
$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

print_r(getListingAll("3c35beeefeb84c676fd991fcaa2cfb2c"));

?>
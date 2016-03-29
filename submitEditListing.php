<?php

session_start();

$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$item = getListing($_POST["idField"]);
$item["Item"]["Description"]["S"] = $_POST["descriptionField"];
if(isset($_POST["privateField"]))
{
	$item["Item"]["Private"]["BOOL"] = true;
}
else
{
	$item["Item"]["Private"]["BOOL"] = false;
}

addToListingDB($item["Item"]);

header('Location: ./userListings.php');

?>
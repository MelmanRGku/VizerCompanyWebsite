<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$NameOfRequester = $_POST["firstName"]." ".$_POST["lastName"];
$userEmail = $_POST["emailAddress"];
$houseAddress = $_POST["houseAddress"];
$phoneNumber = $_POST["phoneNumber"];
$message = $_POST["messageField"];
$status = "unhandled";
$php_timestamp = time();
$php_timestamp_date = date("Y/m/d", $php_timestamp);

$requestID = createUUID();

$item = array(
  "RequestID" => array('S' => $requestID),
  "Address" => array('S' => $houseAddress),
  "Email" => array('S' => $userEmail),
  "Handeled" => array('BOOL' => false),
  "Name" => array('S' => $NameOfRequester),
  "Phone" => array('S' => $phoneNumber),
  "Status" => array('S' => $status),
  "Timestamp" => array('S' => $php_timestamp_date),
  "LastEditedBy" => array('S' => 'NULL'),
  "LastEditedOn" => array('S' => 'NULL'),
  );

/*$user = array(
  "UserID" => array('S' => $requestID),
  "Email" => array('S' => $userEmail),
  "Name" => array('S' => $NameOfRequester),
  "ContactPhone" => array('S' => $phoneNumber),
  "Password" => array('S' => $phoneNumber)
  );*/

addToRequestDB($item);

header('Location: ./');

?>
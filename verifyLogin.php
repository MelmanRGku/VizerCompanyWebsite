<?php

session_start();
$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$email = $_POST["username"];
$password = $_POST["password"];
//$password = hash("sha256", $_POST["password"], false);
$truePassword = getUserPassword($email);

if (strcmp ($password, $truePassword) == 0) {
  session_unset();
  $_SESSION["state"] = "active";
  $_SESSION["user"] = $email;
  header('Location: ./');
}
else {
  session_unset();
  $_SESSION["pass"] = "wrong";
  header('Location: ./');
}

?>
<?php

session_start();
$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$email = $_POST["username"];
$password = hash("sha256", $_POST["password"], false);
$truePassword = getUser($email)['Items'][0]['Password']['S'];

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
<?php

header('Content-type: application/jason');

session_start();	

$projectRoot = "./";
include_once($projectRoot."/includes/functions.php");

$links = getRoomLinks($_POST['RoomID']);



echo json_encode( $links['Items'] );

?>
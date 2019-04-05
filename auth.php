<?php

include 'functions.php';

session_start();
$_SESSION['authenticated'] = false;
$_SESSION['username'] = null;
require 'functions.php';

//Get user and pass
$username = $_POST['username'];
$password = $_POST['password'];
//$password = password_hash($password, PASSWORD_DEFAULT);
//$password = password_hash($password, PASSWORD_BCRYPT);

$sql = "SELECT * FROM `users` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "'";
echo $sql;
$stm = $con->prepare($sql);
$stm->execute();
$row_count = $stm->rowCount();
$result = $stm->fetchAll();

//If there is a row in the DB with this $username, check the password
echo $row_count;
if($row_count > 0){
	$_SESSION['authenticated'] = true;
	$_SESSION['username'] = $username;
}

header('Location: index.php');

?>
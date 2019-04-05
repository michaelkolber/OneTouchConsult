<?php
/**
* Functions Page
*/

//MySQL Connection
$con = new PDO("mysql:host=localhost;dbname=hack", "ben", "hack");

//SafeSQL - Sherman fix
function safesql($input){
	return filter_var(ucwords(strtolower($input)),FILTER_SANITIZE_STRING);
}

?>
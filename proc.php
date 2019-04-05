<?php
//Proc.php
include 'functions.php';
$sql = "INSERT INTO `transactions` (cchash, reciptarray, rewards, total, mechant_name) VALUES ('422222222222222', 'Adidas Clima Cool Pants - Medium,1,45,Pennant Baseball ¼ Zip with Name - Large Name: Akiva Sherman, Number: 3,1,33', 150,78,'Yeshiva Uniforms - Frisch')";
//echo $sql;
$stm = $con->prepare($sql);
										$stm->execute();

										header('Location: end.html');

?>
<?php

$user="root";
$host="localhost";
$pass="";
$db="ds";


try {
	$conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
} catch (Exception $e) {
	echo "work";
}



?>
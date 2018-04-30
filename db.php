<?php 

$dsn = 'mysql:host=localhost; dbname=company';
$username = 'root';
$password = 'root';
$options = [];



try{
	$connection = new PDO($dsn, $username, $password, $options);


} catch(PDOException $e){

}
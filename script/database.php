<?php
// Server and database info
$server = 'localhost';
$username = 'root';
$password = 'admin';
$database = 'permissionimpossible';

// Attempting to connect to server and database
try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	die("Connection Failed: " . $e->getMessage());
}
//echo 'connected to database';
?>
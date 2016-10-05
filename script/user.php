<?php 
require 'database.php';
if(isset($_SESSION['user_id']))
{	
	// Gets the Users info and puts it in the $user variable
	$records = $conn->prepare('SELECT * FROM user WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	
	$user = NULL;
	
	if( count($results) > 0)
	{
		$user = $results;
	}
}
?>
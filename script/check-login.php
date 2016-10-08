<?php
require 'database.php';

	// Makes sure the fields are filled
	if(!empty($_POST['username_email']) && !empty($_POST['password'])):
		
		// Retrives the record of the entered username from the user table
		$records = $conn->prepare('SELECT * FROM user WHERE username = :username');
		$records->bindParam(':username', $_POST['username_email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		
		// Checks to see if the password matches
		if(count($results) > 0 && password_verify($_POST['password'], $results['password']))
		{
			// Sets the session's 'user_id' to the user's 'id'
			$_SESSION['user_id'] = $results['id'];
			header("Location: index.php");
		} 
		else
		{
			$msg = "Incorrect username or password";
		}
	endif;
?>
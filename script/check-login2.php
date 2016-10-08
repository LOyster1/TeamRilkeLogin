<?php
require 'database.php';

	// Makes sure the fields are filled
	if(!empty($_POST['username']) && !empty($_POST['password'])):
		
		// Retrives the record of the entered username from the user table
		$records = $conn->prepare('SELECT * FROM user WHERE username = :username OR email = :email LIMIT 1');
		$records->execute(array(':username'=>$_POST['username_email'], ':email'=>$_POST['username_email']));
		$results = $records->fetch(PDO::FETCH_ASSOC);
		
		print_r($results);
		
		// Checks to see if the password matches
		if(password_verify($_POST['password'], $results['password']))
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
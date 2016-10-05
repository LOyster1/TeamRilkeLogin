<?php
require 'database.php';

// Checks to see if the fields are filled.
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['confirm_password'])):
	//echo "All Fields Entered!";
	
	// Preparing to insert the form data into the database table
	$sql = "INSERT INTO user (first_name, last_name, email, username, password) VALUES(:first_name, :last_name, :email, :username, :password)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':first_name', $_POST['first_name']);
	$stmt->bindParam(':last_name', $_POST['last_name']);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':username', $_POST['username']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	
	// Boolean to check for errors in the registration process
	$error = false;
	
	// Checking if the username is already in the database
	$username_check = $conn->query('SELECT username FROM user');
	while($username_results = $username_check->fetch(PDO::FETCH_ASSOC))
	{
		if($username_results['username'] == $_POST['username'])
		{
			echo "The username you entered is already taken<br />";
			$error = true;
		}
	}
	// Checking if the email is already in the database
	$email_check = $conn->query('SELECT email FROM user');
	while($email_results = $email_check->fetch(PDO::FETCH_ASSOC))
	{
		if($email_results['email'] == $_POST['email'])
		{
			echo "The email you entered is already registered<br />";
			$error = true;
		}
	}
	// Checking if the password and confirm password are the same
	if($_POST['password'] != $_POST['confirm_password'])
	{
		echo "the passwords you entered do not match<br />";
		$error = true;
	}
	
	// Enters the user into the database only if no errors were found
	if($error==false)
	{
		if( $stmt->execute() ):
			header("Location: /PermissionImpossible/test/");
			$message = 'Successfully created the new account';
		else:
			$message = 'Sorry there was an issue creating the new account';
		endif;
	}
	else
	{
		echo "Could not complete your registration";
	}
	
else:
	//header("Location: /PermissionImpossible/test/register.php");
	// Send Registration error message back to register.php page
	
endif;

?>
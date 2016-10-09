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
			$username_msg = "Username Taken";
			$error = true;
		}
	}
	// Checking if the chosen username is already in the database as an email
	$email_check = $conn->query('SELECT email FROM user');
	while($email_results = $email_check->fetch(PDO::FETCH_ASSOC))
	{
		if($email_results['email'] == $_POST['username'])
		{
			$username_msg = "The username you entered is already registered";
			$error = true;
		}
	}	
	// Checking if the email is already in the database
	$email_check = $conn->query('SELECT email FROM user');
	while($email_results = $email_check->fetch(PDO::FETCH_ASSOC))
	{
		if($email_results['email'] == $_POST['email'])
		{
			$email_msg = "The email you entered is already registered";
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
			header("Location: index.php");
			$message = 'Successfully created the new account';
		else:
			$message = 'Sorry there was an issue creating the new account';
		endif;
	}
	else
	{
		$message = 'Sorry there was an error while creating your account';
	}
	
else:
	$message = 'All fields must be filled';
	
endif;
?>
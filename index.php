<?php 
session_start(); 
include 'script/user.php';
require 'script/check-login.php';
?>

<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
	<div id="holder">
		<?php include('include/header.php'); ?>
		<?php include('include/nav-bar.php'); ?>
		<div id="content">
		
		<!-- If the user successfully logins and is in session then the content below will be shown -->
		<?php if(!empty($user)): ?>
			<h6>Welcome <?= ucfirst($user['first_name']); ?>  You are logged in!</h6>
			<a href="script/logout.php">Logout</a>
			
		<!-- Else the login will be shown -->
		<?php else: ?>
			<div id="login">
				<h1>Login</h1>
				<?php if(isset($msg)) echo $msg; ?>
				<form action="index.php" onsubmit="validate_login()" method="POST">
					<input type="text" placeholder="Enter Your Username or Email" name="username_email">
					<input type="password" placeholder="Enter Your Password" name="password">
					<input type="submit">
				</form>
			</div>
		<?php endif; ?>
		</div>
		<div id="footer"></div>
	</div>

</body>
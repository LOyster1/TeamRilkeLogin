<?php 
session_start(); 
include 'script/user.php';
require 'script/check-login.php';
?>

<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
	<
	<div class="container">
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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>
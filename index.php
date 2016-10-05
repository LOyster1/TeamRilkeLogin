<?php 
session_start(); 
include 'script/user.php';
include 'script/check-login2.php';
?>

<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
	<div id="holder">
		<?php include('include/header.php'); ?>
		<?php include('include/nav-bar.php'); ?>
		<div id="content">
		<?php if(!empty($user)): ?>
			<h6>Welcome <?= $user['first_name']; ?>  You are logged in!</h6>
			<a href="script/logout.php">Logout</a>
		<?php else: ?>
			<div id="login">
				<h1>Login</h1>
				<?php if(isset($msg)) echo $msg; ?>
				<form action="index.php" onsubmit="validate_login()" method="POST">
					<input type="text" placeholder="Enter Your Username" name="username_email">
					<input type="password" placeholder="Enter Your Password" name="password">
					<input type="submit">
				</form>
			</div>
		<?php endif; ?>
		</div>
		<div id="footer"></div>
	</div>

</body>
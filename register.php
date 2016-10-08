<?php 
session_start();
// If the user is already logged in and in session then the user will be redirected to the index.php
if(isset($_SESSION['user_id']))
{
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
	<body>
		<div id="holder">
			<?php include ('include/header.php'); ?>
			<?php include('include/nav-bar.php'); ?>
			<div id="content">
				<div id="page-heading">
					<h1>Sign Up!</h1>
				</div>
				<div id="content-left">
					<h2>Your Message Here</h2><br />
					<br />
					<h6>Your Message</h6>
				</div>
				<div id="content-right">
					<?php if(!empty($message)): ?>
						<h6><?= $message ?></h6>
					<?php endif; ?>
					<form action="script/send-register.php" method="POST">
						<input type="text" name="first_name" placeholder="First Name">
						<input type="text" name="last_name" placeholder="Last Name">
						<input type="email" name="email" placeholder="Email">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<input type="password" name="confirm_password" placeholder="Confirm Password">
						<input type="submit">
					</form>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>
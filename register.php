<?php 
session_start();
// If the user is already logged in and in session then the user will be redirected to the index.php
if(isset($_SESSION['user_id']))
{
	header("Location: index.php");
}
require 'script/send-register.php';

?>

<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
	<body>
		<div class="container">
			//
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
					<form action="#" method="POST">
						<table>
							<tr>
								<td><h6>First Name:</h6></td><td><input type="text" name="first_name" placeholder="First Name"></td>
							</tr>
							<tr>
								<td><h6>Last Name:</h6></td><td><input type="text" name="last_name" placeholder="Last Name"></td>
							</tr>
							<tr>
								<td><h6>Email:</h6></td><td><input type="email" name="email" placeholder="Email">
								<?php if(!empty($email_msg)): ?><h6><?= $email_msg ?></h6><?php endif; ?></td>
							</tr>
							<tr>
								<td><h6>Username:</h6></td><td><input type="text" name="username" placeholder="Username">
								<?php if(!empty($username_msg)): ?><h6><?= $username_msg ?></h6><?php endif; ?>
								</td>
							</tr>
							<tr>
								<td><h6>Password:</h6></td><td><input type="password" name="password" placeholder="Password"></td>
							</tr>
							<tr>
								<td><h6>Password:</h6></td><td><input type="password" name="confirm_password" placeholder="Confirm Password"></td>
							</tr>
							<tr>
								<td></td> <td><input type="submit"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>
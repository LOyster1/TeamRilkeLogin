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
				<form action="script/send-post.php" method="post">
					<table>
						<tr>
							<td><h6>First Name:</h6></td><td><input class="style-txt-field" type="text" name="firstName" placeholder="First Name"></td>
						</tr>
						<tr>
							<td><h6>Last Name:</h6></td><td><input class="style-txt-field" type="text" name="lastName" placeholder="Last Name"></td>
						</tr>
						<tr>
							<td><h6>Email:</h6></td><td><input class="style-txt-field" type="email" name="email" placeholder="Email"></td>
						</tr>
						<tr>
							<td><h6>Username:</h6></td><td><input class="style-txt-field" type="text" name="username" placeholder="Username"></td>
						</tr>
						<tr>
							<td><h6>Password:</h6></td><td><input class="style-txt-field" type="password" name="password" placeholder="Password"></td>
						</tr>
						<tr>
							<td><h6>Password:</h6></td><td><input class="style-txt-field" type="password" name="confirmPassword" placeholder="Confirm Password"></td>
						</tr>
						<tr>
							<td><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="footer"></div>
	</div>

</body>
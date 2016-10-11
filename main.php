<?php 
session_start(); 
include 'script/user.php';
require 'script/check-login.php';
?>


<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>


<body>
	<div class="container">
			<?php include('include/header.php'); ?>
			<?php include('include/nav-bar.php'); ?>
				<ul>
					<li><a href="#">After School Program Sign Up</a></li>
					<li><a href="./PermissionImpossible/slip-management.php">Field Trip Permission Slip</a></li>
				</ul>
				
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
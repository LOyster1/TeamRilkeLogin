<?php 
session_start(); 
include './../script/user.php';
require './../script/check-login.php';
?>


<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>


<body>
	<div class="container">
			<?php include('include/header.php'); ?>
			<?php include('include/nav-bar.php'); ?>
			<form action="#" method="POST">
					<table>
						<tr>
							<td><h6>Field Trip Name: </h6></td><td><input type="text" name="trip_name" placeholder="Field Trip Name"></td>
						</tr>
						<tr>
							<td><h6>Submit By Date: </h6></td><td><input type="date" name="by_date" placeholder="MM/DD/YYYY"></td>
						</tr>
						<tr>
							<td><h6>Field Trip Date: </h6></td><td><input type="date" name="trip_date" placeholder="MM/DD/YYYY"></td>
						</tr>
						<tr>
							<td><h6>Chapperone Arrival Time: </h6></td><td><input type="time" name="ch_time" placeholder="00:00"></td>
						</tr>
						<tr>
							<td><h6>Departure Time: </h6></td><td><input type="time" name="dep_time" placeholder="00:00"></td>
						</tr>
						<tr>
							<td><h6>Arrival Time: </h6></td><td><input type="time" name="ret_time" placeholder="00:00"></td>
						</tr>
						<tr>
							<td><h6>Transportation Provided By: </h6></td><td><input type="text" name="trans" placeholder="Bus/Parent"></td>
						</tr>
						<tr>
							<td></td> <td><input type="submit"></td>
						</tr>
					</table>
				</form>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>
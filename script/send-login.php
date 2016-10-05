<?php
// Connecting to sql database.
$conn = mysqli_connect("localhost", "root", "admin", "permissionimpossible");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Sending form data to sql db.
$sql = "INSERT INTO user (username, password) VALUES ('$_POST[first_name]', '$_POST[last_name]', '$_POST[username]', '$_POST[email]', '$_POST[password]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?php
// Connecting to sql database.
$connect = mysqli_connect("localhost", "root", "admin", "permissionimpossible");
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
// Sending form data to sql db.
$sql = "INSERT INTO user (first-name, last-name, username, email, password) VALUES ('$_POST[first-name]', '$_POST[last-name]', '$_POST[username]', '$_POST[email]', '$_POST[password]')";
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>
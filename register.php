<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (empty($fname) || empty($lname)|| empty($email) || empty($phone)) {
	echo '<script>alert("Kindly verify your details")
			window.location.replace("index.html")</script>';
} else {
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS yennum_yazhuthum";
if ($conn->query($sql) === TRUE) {
  $sql1 = "USE yennum_yazhuthum";
  $conn->query($sql1);
  $sql2 = "CREATE TABLE IF NOT EXISTS register(id int NOT NULL AUTO_INCREMENT, fname varchar(25), lname varchar(25), email varchar(50), phone varchar(25), PRIMARY KEY(id))";
  $conn->query($sql2);
  $sql3 = "INSERT INTO register(id, fname, lname, email, phone) VALUES('', '$fname', '$lname', '$email', '$phone')";
  echo '<script>window.location.replace("index.html")</script>';
  $conn->query($sql3);
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
}
?>
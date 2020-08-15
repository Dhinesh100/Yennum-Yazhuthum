<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$date = $_POST['date'];
$desc = $_POST['description'];
$conn = mysqli_connect("localhost", "root", "", "yennum_yazhuthum") or die("Database not conncted");
if(isset($_POST['upload'])) {
	if(empty($fname) || empty($lname) || empty($email) || enpty($phone) || empty($title) || empty($date) ||empty($desc)) {
		echo $desc;
	}
}
?>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$date = $_POST['date'];
$desc = $_POST['description'];
$file = $_FILES['file']['name'];
$dbh = new PDO("mysql:host=localhost;dbname=yennum_yazhuthum", "root", "");
$sql = $dbh->prepare("CREATE TABLE IF NOT EXISTS files(id int NOT NULL AUTO_INCREMENT, title varchar(25), date varchar(25), description blob, file varchar(200), PRIMARY KEY(id))");
$sql->execute();
if(isset($_POST['upload'])) {
	if(empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($title) || empty($date) ||empty($desc)) {
		echo '<script>alert("Kindly verify your details")
				window.location.replace("blog.html")</script>';
	} else {
		if($fname=="Dhinesh" && $lname=="Carlsen" && $email=="dhineshcarlsen@gmail.com" && $phone=="9524981913") {
			$stmt = $dbh->prepare("insert into files values('',?,?,?,'/common/$file')");
			$stmt->bindParam(1,$title);
			$stmt->bindParam(2,$date);
			$stmt->bindParam(3,$desc);
			$stmt->execute();
			if (move_uploaded_file($_FILES['file']['tmp_name'], "common/$file")) {
				echo '<script>alert("File successfully uploaded")
					window.location.replace("index.html")</script>';
			} else {
				echo '<script>alert("File uploaded was unsuccessful")
					window.location.replace("blog.html")</script>';
			}
		} else {
			echo '<script>alert("You are not the authorized person to upload files or kindly check the credentials")
				window.location.replace("blog.html")</script>';
		}
	}
}
?>
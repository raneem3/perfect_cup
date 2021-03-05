<?php
session_start();


$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'prefectcup');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
    //if the email exists
		if ($num_row >= 1) {
			if (password_verify($password,$row['$password'])) {

				$_SESSION['login'] = $row['id'];
				$_SESSION['firstName'] = $firstName;
				$_SESSION['lastName'] = $lastName;
				echo 'true';
			}
		} 
        else {
			echo 'false';
		}
?>
<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'prefectcup');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$firstName = mysqli_real_escape_string($mysqli, $_POST['firstName']);
$lastName = mysqli_real_escape_string($mysqli, $_POST['lastName']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION

if (strlen($firstName) < 2) {
    echo 'firstName';
} elseif (strlen($lastName) < 2) {
    echo 'lastName';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($password) <= 3) {
    echo 'pshort';
	
//VALIDATION
	
} else {
	
	//PASSWORD ENCRYPT
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO members (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$spassword')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['firstName'] = $firstName;
				$_SESSION['lastName'] = $lastName;

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

?>
<?php 

if (isset($_POST["submit"])){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$dateOfBirth = $_POST['dateOfBirth'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	// $photo = $_FILES['photo'];
	// $fileName = $photo['name'];
	// $fileTmpName = $photo['tmp_name'];
	// $fileSize = $photo['size'];
	// $fileError = $photo['error'];
	// $fileType = $photo['type'];

	// $fileExt = explode('.', $fileName);
	// $fileActualExt = strtolower(end($fileExt));

	// $allowed = array('jpg', 'jpeg', 'png');

	// if (in_array($fileActualExt, $allowed)) {
	// 	if ($fileError === 0) {
	// 		if ($fileSize < 1000000) {
	// 			$fileNameNew = "profile" . $firstName . $lastName . uniqid('', true) . "." . $fileActualExt;
	// 			$fileDestination = 'uploads/'. $fileNameNew;
	// 			move_uploaded_file($fileTmpName, $fileDestination);
	// 		}
	// 		else {
	// 			echo "Your photo is too large.";
	// 		}
	// 	}
	// 	else {
	// 		"There was an error uploading your file.";
	// 	}
		
	// }
	// else {
	// 	echo "You cannot upload this type of file for your profile.";
	// }

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputRegister($firstName, $lastName, $dateOfBirth, $email, $street, $city, $state, $zip) !== false) {
		header("location: ../register.php?error=emptyinput");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../register.php?error=invalidEmail");
		exit();
	}
	
	if (emailExists($conn, $email) !== false) {
		header("location: ../register.php?error=emailAlreadyActive");
		exit();
	}
	createUser($conn, $firstName, $lastName, $dateOfBirth, $email, $street, $city, $state, $zip);
	header('location: ../index.php');
} else {
	echo "Oops, you need to sign up or sign in.";
	header("location: ../register.php?error=must_signup_or_login");
	exit();
}
<?php 

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (empty($email)) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
	 loginUser($conn, $email);
}
else{
	header('location: ../login.php?error=mustlogin');
	exit();
}
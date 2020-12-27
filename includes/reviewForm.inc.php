<?php 
session_start();

	if (isset($_POST['submit'])) {
		$userID = $_SESSION['userID'];
		$reviewDate = date('Y-m-d');
		$heightFt = $_POST['heightFt'];
		$heightIn = $_POST['heightIn'];
		$totalHeightIn = ($heightFt*12) + $heightIn;
		$weight = $_POST['weight'];
		$bmi = ($weight/$totalHeightIn/$totalHeightIn) * 703;
		$tobacco = $_POST['tobacco'];
		$alcUse = $_POST['alcUse'];
		$drugUse = $_POST['drugUse'];
		$active = $_POST['active'];
		$mood = $_POST['mood'];
		$urgent = $_POST['urgent'];
		
		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';

		if (emptyInputReview($heightFt, $heightIn, $weight, $tobacco, $alcUse, $drugUse, $active, $mood) !== false) {
			header("location: ../review.php?error=emptyinput");
			exit();
		}
		updateUserBMI($conn, $heightFt, $heightIn, $weight, $bmi, $userID);
		recordReview($conn, $reviewDate, $userID, $heightFt, $heightIn, $bmi, $weight, $tobacco, $alcUse, $drugUse, $active, $mood);
		placeOrders($conn, $reviewDate, $userID, $heightFt, $heightIn, $bmi, $weight, $tobacco, $alcUse, $drugUse, $active, $mood, $urgent);
		 
	}
	else{
		header('location: ../review.php?error=submitReview');
		exit();

}
<?php 
session_start();

	if (isset($_POST['submit'])) {
		$userID = $_SESSION['userID'];
		$responseDate = date('Y-m-d');
		$response = $_POST['response'];
		$orderID = $_POST['orderID'];
		$orderType = $_POST['orderType'];
		$totalHeight = $_SESSION['totalHeight'];
		
		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';

		if (empty($response) !== false) {
			header("location: ../review.php?error=emptyinput");
			exit();
		}
		updateOrder($conn, $response, $orderID);
		newOrders($conn, $userID, $responseDate, $orderType, $totalHeight, $response);

		header("location: ../index.php?orderupdate=success");
		 
	}
	else{
		header('location: ../review.php?error=submitReview');
		exit();

}
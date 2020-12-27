<?php 
session_start();

	if (isset($_POST['submit'])) {
		$userID = $_SESSION['userID'];
		
		$weight = $_POST['weight'];
		$tobacco = strval(date('Y-m-d', strtotime($_POST['tobacco'])));
		$alcUse = $_POST['alcUse'];
		$drugUse = $_POST['drugUse'];
		$active = $_POST['active'];
		$mood = $_POST['mood'];
		$water = $_POST['water'];
		$bpm = $_POST['bpm'];
		
		
		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';

		
		if (empty($weight) == False) {
			updateWeightGoal($conn, $weight, $userID);
		} else {}
		if (empty($tobacco) == False) {
			updateTobaccoGoal($conn, $tobacco, $userID);
		} else {}
		if (empty($alcUse) == False) {
			updateAlcoholGoal($conn, $alcUse, $userID);
		} else {}
		if (empty($drugUse) == False) {
			updateDrugGoal($conn, $drugUse, $userID);
		} else {}
		if (empty($active) == False) {
			updateActiveGoal($conn, $active, $userID);
		} else {}
		if (empty($mood) == False) {
			updateMoodGoal($conn, $mood, $userID);
		} else {}
		if (empty($water) == False) {
			updateWaterGoal($conn, $water, $userID);
		} else {}
		if (empty($bpm) == False) {
			updateBPMGoal($conn, $bpm, $userID);
		} else {}
		header('location: ../index.php?success=setgoals');
		exit();
		 
	}
	else{
		header('location: ../goals.php?error=updategoals');
		exit();

}
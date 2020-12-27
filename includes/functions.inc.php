<?php 

function emptyInputRegister($firstName, $lastName, $dateOfBirth, $email, $street, $city, $state, $zip) {
	$result;
	if (empty($firstName) || empty($lastName) || empty($email) ||  empty($street) || empty($city) || empty($state) || empty($zip)) {
		$result = true;
		
	} else {
		$result = false;
	}
	return $result;
	
}

function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
		
	} else {
		$result = false;
	}
	return $result;
	
}

function emailExists($conn, $email) {
	$sql = "SELECT * FROM user WHERE email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../register.php?error=stmtfailed');
		exit();
	}
	mysqli_stmt_bind_param($stmt, 's', $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
		header('location: ../register.php?error=emailexists');
		exit();
	}
mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $dateOfBirth, $email, $street, $city, $state, $zip) {
	

	$sql = "INSERT INTO user(firstName, lastName, dateOfBirth, email, street, city, state, zip) VALUES(?,?,?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../register.php?error=stmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $dateOfBirth, $email, $street, $city, $state, $zip);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	$emailExists = emailExists($conn, $email);
	session_start();
	$_SESSION["userID"] = $emailExists['userID'];
	$_SESSION["firstName"] = $emailExists['firstName'];
	$_SESSION["lastName"] = $emailExists['lastName'];

	$sql = "INSERT INTO goals (userID) Value (?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=goalstmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "i", $_SESSION["userID"]);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../review.php?registration=success");
	exit();
}

// login functions


function loginUser($conn, $email){
	$emailExists = emailExists($conn, $email);

	if ($emailExists == false) {
		header('location: ../login.php?error=emailerror');
		exit();
	} else {
		session_start();
		$_SESSION["userID"] = $emailExists['userID'];
		$_SESSION["firstName"] = $emailExists['firstName'];
		$_SESSION["lastName"] = $emailExists['lastName'];
	}
	header("location: ../index.php?login=success");
	exit();
}

//review Of Systems Functions
function userExists($conn, $userID) {
	$sql = "SELECT * FROM user WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=stmtfailed');
		exit();
	}
	mysqli_stmt_bind_param($stmt, 's', $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
		exit();
	}
mysqli_stmt_close($stmt);
}

function emptyInputReview($heightFt, $heightIn, $weight, $tobacco, $alcUse, $drugUse, $active, $mood) {
	$result;
	if (empty($heightFt) || empty($heightIn) || empty($weight) || empty($tobacco) || empty($alcUse) || empty($drugUse) || empty($active) || !isset($mood)) {
		$result = true;
		
	} else {
		$result = false;
	}
	return $result;
	
}



function recordReview($conn, $reviewDate, $userID, $heightFt, $heightIn, $bmi, $weight, $tobacco, $alcUse, $drugUse, $active, $mood){

	$sql = "INSERT INTO reviewOfSystems (reviewDate, userID, heightFt, heightIn, bmi, weight, tobacco, alcUse, drugUse, active, mood) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=weightstmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "siiidiiiiii", $reviewDate, $userID, $heightFt, $heightIn, $bmi, $weight, $tobacco, $alcUse, $drugUse, $active, $mood);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function placeOrders($conn, $reviewDate, $userID, $heightFt, $heightIn, $bmi, $weight, $tobacco, $alcUse, $drugUse, $active, $mood, $urgent){
// place order to record weight based on bmi
	if ($bmi < 18.5) {		
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($bmi > 18.4 and $bmi < 24.9) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 30 days')));
	} elseif ($bmi > 24.8 and $bmi < 29.9) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($bmi > 29.8) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	}
	$orderType = 'recordWeight';
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=weightstmtfailed');
		exit();
	}
			mysqli_stmt_prepare($stmt, $sql);
			mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
	
	//end BMI case
	if ($urgent == 1){
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate)));
	}
		
	$orderType = 'urgentOrder';			
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=urgentstmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
		
	
	//end urgent order

	if ($tobacco == 2) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate))); // add 1 days after presentation
	} elseif ($tobacco == 1) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($tobacco == -1){
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 360 days')));
	}
		
	$orderType = 'recordTobacco';			
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
		
	
	//end tobacco order

	if ($alcUse == 2) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate)));// add 1 days after presentation
	} elseif ($alcUse == 1) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($alcUse -1){
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 360 days')));
	}
	$orderType = 'recordAlcohol';
	
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	//end alc order
	if ($drugUse == 2) {
		$alcDate = strval(date('Y-m-d', strtotime($reviewDate)));// add 1 days after presentation
	} elseif ($drugUse == 1) {
		$alcDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($drugUse == -1){
		$alcDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 360 days')));
	}
	$orderType = 'recordDrugUse';
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $alcDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	

	//end drug order
	if ($bmi < 18.5) {		
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate)));// add 1 days after presentation
	} elseif ($bmi > 18.4 and $bmi < 24.9) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 30 days')));
	} elseif ($bmi > 24.8 and $bmi < 29.9) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($bmi > 29.8) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	}
		
	$orderType = 'recordActivity';
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	//end active order

	$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ ' . $mood . ' days')));
	$orderType = 'recordMood';
		
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	

	
	header("location: ../goals.php?review=success");
	exit();
}


//Additional functions
function updateUserBMI($conn, $heightFt, $heightIn, $weight, $bmi, $userID){
	$sql = "UPDATE user SET heightFt = ?, heightIn = ?, weight = ?, bmi = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../index.php?error=bmiupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iiidi", $heightFt, $heightIn, $weight, $bmi, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);


}

function updateWeightGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET weightGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} // end updateWeightGoal

function updateAlcoholGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET alcoholGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateAlcoholGoal

function updateTobaccoGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET tobaccoGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "si", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateTobaccoGoal

function updateDrugGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET drugGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateDrugGoal

function updateActiveGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET activeGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateActiveGoal

function updateWaterGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET waterGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateWaterGoal

function updateMoodGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET moodGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateMoodGoal

function updateBPMGoal($conn, $value, $userID){
	$sql = "UPDATE goals SET bpmGoal = ? WHERE userID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../goals.php?error=goalupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $value, $userID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

} //end updateBPMGoal

function updateOrder($conn, $response, $orderID){
	$sql = "UPDATE orders SET response = ? WHERE orderID = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../index.php?error=orderupdatestmtfailed');
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ii", $response, $orderID);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);


}

function newOrders($conn, $userID, $responseDate, $orderType, $totalHeight, $response){
// place order to record weight based on bmi
	$reviewDate = $responseDate;
	if ($orderType == 'recordWeight') {
		$weight = $response;
		$bmi = ($weight/$totalHeight/$totalHeight) * 703;
		$sql = "UPDATE user SET weight = ?, bmi = ? WHERE userID = ?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header('location: ../index.php?error=bmiupdatestmtfailed');
			exit();
		}
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "idi", $weight, $bmi, $userID);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	if ($bmi < 18.5) {		
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($bmi > 18.4 and $bmi < 24.9) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 30 days')));
	} elseif ($bmi > 24.8 and $bmi < 29.9) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($bmi > 29.8) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	}
	$orderType = 'recordWeight';
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=weightstmtfailed');
		exit();
	}
			mysqli_stmt_prepare($stmt, $sql);
			mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
	}
	//end BMI case
	if ($orderType == 'urgentOrder') {
	$urgent = $response;

	if ($urgent == 2) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate)));
		$orderType = 'urgentOrder2';
	} elseif ($urgent == 1) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($urgent == -1){
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 14 days')));
	}
		
	$orderType = 'urgentOrder';			
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=urgentstmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
		
	}
	//end urgent order

	if ($orderType == 'recordTobacco') {
	$tobacco = $response;

	if ($tobacco == 2) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($tobacco == 1) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($tobacco == -1){
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 360 days')));
	}
		
	$orderType = 'recordTobacco';			
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
		
	}
	//end tobacco order

	if($orderType == 'recordAlcohol'){
		$alcUse = $response;
	if ($alcUse == 2) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($alcUse == 1) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($alcUse == -1){
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 360 days')));
	}
	$orderType = 'recordAlcohol';
	
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	}
	//end alc order

	if($orderType == 'recordDrugUse'){
		$drugUse = $response;
	if ($drugUse == 2) {
		$alcDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($drugUse == 1) {
		$alcDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($drugUse == -1){
		$alcDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 360 days')));
	}
	$orderType = 'recordDrugUse';
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $alcDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
}
	//end drug order

	if($orderType == 'recordActivity'){
		$minutes = $response;
	if ($minutes < 20) {		
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 1 days')));
	} elseif ($minutes > 19 and $minutes < 35) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 7 days')));
	} elseif ($minutes > 34 and $minutes < 45) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 8 days')));
	} elseif ($minutes > 45) {
		$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ 9 days')));
	}
		
	$orderType = 'recordActivity';
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	}
	//end active order

	if($orderType == 'recordMood'){
		$mood = $response;

	$orderDate = strval(date('Y-m-d', strtotime($reviewDate. '+ ' . $mood . ' days')));
	$orderType = 'recordMood';
		
	$sql = "INSERT INTO orders (userID, orderDate, orderType) VALUES(?,?,?);";
	$stmt = mysqli_stmt_init($conn);
			
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: ../review.php?error=tobaccostmtfailed');
				
		exit();
	}
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $userID, $orderDate, $orderType);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}
	
	header("location: ../index.php?review=success");
	exit();
}

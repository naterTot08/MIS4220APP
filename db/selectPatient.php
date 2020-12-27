<?php  
session_start();
$sql = "SELECT * FROM user WHERE userID =" . $_SESSION["userID"] .";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $userID = $row['userID'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $fullName = $firstName . ' ' . $lastName;
    $photo = $row['photo'];
    $dateOfBirth = date("d/m/Y", strtotime($row['dateOfBirth']));
    $heightFt = $row['heightFt'];
    $heightIn = $row['heightIn'];
    $_SESSION['totalHeight'] = ($heightFt*12) + $heightIn;
    
    // $address = $row['address'];
    // $city = $row['city'];
    // $state = $row['state'];
    // $zip = $row['zip'];
    // $fullAddress = $address . ", " . $city . ", " .$state . " " . $zip;
  }
  

} else {
  echo "Error" ;
}



?>
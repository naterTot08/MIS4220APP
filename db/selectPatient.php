<?php  

$sql = "SELECT * FROM patients WHERE patientID = 1;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $patientID = $row['patientID'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $fullName = $firstName . ' ' . $lastName;
    $patientPhoto = $row['patientPhoto'];
    $dateOfBirth = $row['dateOfBirth'] ;
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip'];
    $fullAddress = $address . ", " . $city . ", " .$state . " " . $zip;
  }
  

} else {
  echo "Error" ;
}



?>
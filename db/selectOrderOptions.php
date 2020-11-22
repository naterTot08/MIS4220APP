<?php  

$sql = "SELECT * FROM orderType;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $nurseOrderID = $row['nurseOrderID'];
    $orderType = $row['orderType'];
    $orderDescription = $row['orderDescription'];

  }
  

} else {
  echo "Error" ;
}



?>
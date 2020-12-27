<?php  
$sql = "SELECT response, orderDate FROM orders WHERE orderType='recordWeight' AND response IS NOT NULL AND userID=" . $userID . " ORDER BY orderDate DESC LIMIT 7;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {

  	$weightBars_data .= "{date: '" . strval(date('Y-m-d', strtotime($row['orderDate']))) ."', weight: " . $row['response'] . "}, ";
  	}
  $weightBars_data = substr($weightBars_data, 0, -2);


  }
  else {

  } // end else

?>
<div class="card shadow mb-4 col-sm-6 ">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Past 7 Weights:</h6>
                </div>
                <div class="card-body">
                  <div id="weightBars" style="height: 250px;"></div>
                </div>
              </div>
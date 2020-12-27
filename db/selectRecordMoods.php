<?php  
$sql = "SELECT A.orderDate as weightDate, B.orderDate as moodDate, A.response AS weightResp, B.response AS moodResp from orders A, orders B WHERE A.orderType = 'recordWeight' AND B.orderType = 'recordMood' AND A.orderDate = B.orderDate AND A.response IS NOT NULL AND B.response IS NOT NULL AND  A.userID=" . $userID . " ORDER BY A.orderDate DESC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {

  	$moodWeight_data .= "{date: '" . strval(date('Y-m-d', strtotime($row['weightDate']))) ."', weight: " . ($row['weightResp']) . ", mood: " . $row['moodResp']*20 . "}, ";
  	}
  $moodWeight_data = substr($moodWeight_data, 0, -2);

  }
  else {

  } // end else

?>
			<div class="card shadow mb-4 col-sm-12 ">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Are your mood and weight connected:</h6>
                </div>
                <div class="card-body">
                  <div id="moodWeight" style="height: 250px;"></div>
                </div>
             </div>
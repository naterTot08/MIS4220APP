<?php  
$sql = "SELECT count(response) as countMood, response as labelMood FROM orders WHERE orderType='recordMood' AND response IS NOT NULL AND userID=" . $userID . " GROUP BY response;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    if (($row['labelMood']) == '5') {
      $labelMood = '<i class="far fa-4x fa-smile-beam"></i>';
    } elseif (($row['labelMood']) == '4') {
      $labelMood = '<i class="far fa-4x fa-smile"></i>';
    } elseif (($row['labelMood']) == '3') {
      $labelMood = '<i class="far fa-4x fa-meh"></i>';
    } elseif (($row['labelMood']) == '2') {
      $labelMood = '<i class="far fa-4x fa-frown"></i>';
    } elseif (($row['labelMood']) == '1') {
      $labelMood = '<i class="far fa-4x fa-tired"></i>';
    } else
    {$labelMood = ($row['labelMood']);}
    
    $countMood = ($row['countMood']);


  	$moodBars_data .= "{mood: '" . $labelMood . "', count: " . $countMood . "}, ";
  	}
  $moodBars_data = substr($moodBars_data, 0, -2);

  }
  else {

  } // end else

?>
			<div class="card shadow mb-4 col-sm-12 ">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Count of total Moods:</h6>
                </div>
                <div class="card-body">
                  <div id="moodBars" style="height: 250px;"></div>
                </div>
             </div>
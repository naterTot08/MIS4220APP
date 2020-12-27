<?php  
$today = new dateTime();


$sql = "SELECT * FROM orderType;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $orderID = $row['orderID'];
    $orderType = $row['orderType'];
    $orderDescription = $row['orderDescription'];
// $sql = "SELECT * FROM ((patientAssessments INNER JOIN orders ON patientAssessments.orderID = orders.orderID) INNER JOIN review ON orders.reviewID = review.reviewID) Where responseDate =". $today . "AND review.patientID =" . $id . ";";
// $result = mysqli_query($conn, $sql);
// $resultCheck = mysqli_num_rows($result);

// if ($resultCheck > 0) {
//   while ($row = mysqli_fetch_assoc($result)) {
//     $assessmentID = $row['assessmentID'];
//     $orderID = $row['orderID'];
//     $orderDescription = $row['orderDescription'];
//     $responseDate = $row['responseDate'];
//     $orderResponse = $row['orderResponse'];

    ?>
          <div class="row"> <!-- Nurse order heartRateMonitor-->
        <div class="col-lg-12">
          <h1><?php echo $orderDescription; ?></h1>
          <div class="row">
            
            <div class="col-lg-3">
             
                <h2>Response Date: <?php echo $today->format('m/d/Y'); ?></h2>
                                       
            </div><!--end response date-->
            <div class="col-lg-2">                            
              <div class="input-group">
                <label class="input-group" for="inputGroupSelect01">Order End Date: </label>
                <div class="input-group-prepend">
                  <div class="input-group">
                    <input type="Date" name="orderEndDate">
                  </div>
                </div>                          
              </div>
            </div><!-- end end date-->
            <div class="col-lg-3">
              <div class="input-group">
                <label class="input-group" for="inputGroupSelect01">Interval</label>
                <div class="input-group">
                  <div class="input-group">
                    <select class="custom-select" id="orderInterval">
                      <option selected>Choose...</option>
                      <option value="1">Minutes</option>
                      <option value="2">Hours</option>
                      <option value="3">Days</option>
                    </select>
                  </div>
                </div>                              
              </div>                        
            </div><!--end interval-->
            <div class="col-lg-3">                            
              <div class="input-group">
                <label class="input-group" for="inputGroupSelect01">Duration</label>
                <div class="input-group-prepend">
                  <div class="input-group">
                    <input type="text" name="Duration">
                  </div>
                </div>                          
              </div>
            </div><!-- end duration-->
          </div><!-- end input-->
        </div>                         
      </div><!--end Nurse order heartRateMonitor-->
      <hr>



<?php 
  }
  

} else {
  echo "Error" ;
}



?>
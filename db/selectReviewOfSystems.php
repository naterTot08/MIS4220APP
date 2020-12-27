<?php  

$sql = "SELECT * FROM reviewType;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $reviewID = $row['reviewID'];
    $reviewType = $row['reviewType'];
    $reviewDescription = $row['reviewDescription'];
    $reviewStyle = $row['reviewstyle'];

    
    if $reviewStyle == 'text' { ?>
    <div class="col-lg-3 input-group mb-3">
  		<div class="input-group-prepend">
  			<span class="input-group-text" id="<?php echo $reviewType.$reviewID; ?>"><?php echo $reviewDescription; ?></span>
  		</div>
  		<input type="text" class="form-control" name="<?php echo $reviewType; ?>">
  	</div>


		

    <?php } else if reviewStyle == 'radio' { ?>
    <div class="col-lg-2">
            <p> <?php echo $reviewDescription; ?> </p>
          </div>
            <div class="col-lg-1 mb-3">
            <div class="input-group-prepend mb-1">
              <div class="input-group-text">
                <input type="radio" id="yes<?php echo $reviewType; ?>" name="<?php echo $reviewType; ?>" value="yes">
              </div>
              <label class="input-group-text" for="yes<?php echo $reviewType; ?>">Yes</label><br>
            </div>
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" id="no<?php echo $reviewType; ?>" name="<?php echo $reviewType; ?>" value="no">
              </div>
              <label class="input-group-text" for="no<?php echo $reviewType; ?>">No</label><br>
            </div>
          </div>

    <?php }else {
    	echo 'error';
    	}
  }
  

} else {
  echo "Error" ;
}



?>
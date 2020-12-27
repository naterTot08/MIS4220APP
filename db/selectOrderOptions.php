<?php  
$today = date('Y-m-d');
$sql = "SELECT orderType.orderType AS orderType, orderType.orderDescription AS orderDescription, orders.orderID as orderID, orders.response AS response FROM orderType  JOIN orders ON orderType.orderType=orders.orderType WHERE orders.response is NULL AND orders.userID=" . $userID . " AND orders.orderDate <=" . "'" . $today . "'" . "LIMIT 1;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $orderID = $row['orderID'];
    $orderType = $row['orderType'];
    $orderDescription = $row['orderDescription'];?>

    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCard<?php echo $orderType; ?>" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard<?php echo $orderType; ?>">
        <h1 class="m-0 font-weight-bold text-primary"><?php echo $orderDescription; ?></h1>
      </a>
      <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCard<?php echo $orderType; ?>">
          <div class="card-body">
            <form action="includes/orderForm.inc.php" method="POST">
              <input type="hidden" name="orderID" value="<?php echo $orderID; ?>">
              <input type="hidden" name="orderType" value="<?php echo $orderType; ?>">
              
    <?php 
    if ($orderType === "urgentOrder") { ?>

        <div class="row alert alert-primary"><!--start urgent-->
          <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="urgent" name="response" value="2">
            </div>
            <label class="input-group-text" for="yesUrgent">Yes</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="noUrgent" name="response" value="1">
            </div>
            <label class="input-group-text" for="noUrgent">No</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="neverUrgent" name="response" value="-1">
            </div>
            <label class="input-group-text" for="neverUrgent">Never</label><br>
          </div>
        </div>
        </div><!-- end urgent -->
    <hr>

    <hr>

    <?php 
  } elseif ($orderType === "recordWeight") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Weight</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->

    <hr>

    <?php 
  } elseif ($orderType === "recordActivity") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Active Minutes</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->

    <hr>

    <?php 
  } elseif ($orderType === "recordDrugUse") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesDrugs" name="response" value="2">
            </div>
            <label class="input-group-text" for="yesDrugs">Yes</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="noDrugs" name="response" value="1">
            </div>
            <label class="input-group-text" for="noDrugs">No</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="neverDrugs" name="response" value="-1">
            </div>
            <label class="input-group-text" for="neverDrugs">Never</label><br>
          </div>
        </div>
        </div><!-- end druguse -->
    <hr>

    <?php 
  }  elseif ($orderType === "recordAlcohol") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Drinks</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->
    <hr>

    <?php 
  }  else if ($orderType === "recordTobacco") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesTobacco" name="response" value="2">
            </div>
            <label class="input-group-text" for="yesTobacco">Yes</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="noTobacco" name="response" value="1">
            </div>
            <label class="input-group-text" for="noTobacco">No</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="neverTobacco" name="response" value="-1">
            </div>
            <label class="input-group-text" for="neverTobacco">Never</label><br>
          </div>
        </div>
        </div><!-- end weight -->
    <hr>

    <?php 
  }  else if ($orderType === "recordMood") { ?>

         <!--mood rating-->
          <div class="col-sm-12 mb-3">
            <div class="col-sm-1 ">
              <div class="input-group-prepend mb-1">
                <label class="input-group-text" for="noActive"><i class="far fa-4x fa-tired"></i></label>
                <div class="input-group-text">
                  <input type="radio" class="btn btn-secondary" name="response" id="worstMood" value="1">
                </div>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="input-group-prepend mb-1">
                  <label for="badMood" class="input-group-text"><i class="far fa-4x fa-frown"></i></label>
                <div class="input-group-text">
                  <input type="radio" class="btn btn-secondary" name="response" id="badMood" value="2">
                </div>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="input-group-prepend mb-1">
                <label for="mehMood" class="input-group-text"><i class="far fa-4x fa-meh"></i></label>
              <div class="input-group-text">
                <input type="radio" class="btn btn-secondary" name="response" id="mehMood" value="3">
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="input-group-prepend mb-1">
                <label for="goodMood" class="input-group-text"><i class="far fa-4x fa-smile"></i></label>
              <div class="input-group-text">
                <input type="radio" class="btn btn-secondary" name="response" id="goodMood" value="4">
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="input-group-prepend mb-1">
              <label for="greatMood" class="input-group-text"><i class="far fa-4x fa-smile-beam"></i></label>
              <div class="input-group-text">
                <input type="radio" class="btn btn-secondary" name="response" id="greatMood" value="5">
              </div>
            </div>
          </div>
        </div> <!-- end mood icons -->
    <hr>

    <?php 
  }  else if ($orderType === "recordSleep") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Hours</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->
    <hr>

    <?php 
  }  else if ($orderType === "heartRateMonitor") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">BPM</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->
    <hr>

    <?php 
  }  else if ($orderType === "recordTemp") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Temperature</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->
    <hr>

    <?php 
  }  else if ($orderType === "recordWater") { ?>

        <div class="row"><!--start weight-->
          <div class="col-sm-6 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Ounces</span>
            </div>
            <input type="text" class="form-control" name="response">
          </div>
        </div><!-- end weight -->
    <hr>

    <?php 
  } 

    ?>             

                  <div class="row"><!--start button-->
                    <div class="my-2"></div>
                    <button type="submit" class="ml-3 btn-light btn-icon-split" name="submit">
                      <span class="icon text-primary">
                        <i class="fas fa-heartbeat fa-sm"></i>
                      </span>
                      <span class="text">Complete Order</span></button>
                  </div><!-- end submit-->
                </div>
              </div>
            </div>



<?php 
  }
  

} else { ?>
  <div class="row">
    <h1>No Orders Today!</h1>
  </div>
<?php }



?>
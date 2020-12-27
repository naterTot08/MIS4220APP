<?php  
$today = date('Y-m-d');
$sql = "SELECT orderType.orderType AS orderType, orderType.orderDescription AS orderDescription, orders.orderID as orderID, orders.orderDate AS orderDate,orders.response AS response FROM orderType  JOIN orders ON orderType.orderType=orders.orderType WHERE orders.response is NULL AND orders.userID=" . $userID . " AND orders.orderDate <= " . "'" . $today . "'" . " ORDER BY orders.OrderDate ASC LIMIT 3;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $orderID = $row['orderID'];
    $orderDate = strval(date('m-d-Y', strtotime($row['orderDate'])));
    $orderType = $row['orderType'];
    $orderDescription = $row['orderDescription'];?>

  
              
    <?php 
    if ($orderType === "recordWeight") { ?>

                <a class="dropdown-item d-flex align-items-center" href="img/BenefitsofExercise.jpg" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">

                      <i class="fas fa-weight text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
                

    <?php 
  } else if ($orderType === "urgentOrder") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/covid-cdc.png" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-danger">

                      <i class="fas fa-exclamation text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>    

        
    <?php 
  }  else if ($orderType === "recordDrugUse") { ?>
                <a class="dropdown-item d-flex align-items-center" href="https://youtu.be/8PcP-cbrW24" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">

                      <i class="fas fa-joint text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>      

        
    <?php 
  }  else if ($orderType === "recordAlcohol") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/AlcoholHealthRisks.jpg" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-info">

                      <i class="fas fa-cocktail text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
        

    <?php 
  }  else if ($orderType === "recordTobacco") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/SmokingCancer.JPG" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-secondary">

                      <i class="fas fa-smoking text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
        

    <?php 
  }  else if ($orderType === "recordMood") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/Stress infographic FINAL.jpg" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">

                      <i class="fas fa-theater-masks text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
         

    <?php 
  }  else if ($orderType === "recordSleep") { ?>
                <a class="dropdown-item d-flex align-items-center" href="https://www.cdc.gov/sleep/publications/factsheets.html" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-light">

                      <i class="fas fa-sleep text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
      

    <?php 
  }  else if ($orderType === "heartRateMonitor") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/healthyHeart.png" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">

                      <i class="fas fa-heartbeat text-white"></i>
                    </div>
                  </div>
        

    <?php 
  }  else if ($orderType === "recordTemp") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/feelingSick.png">
                  <div class="dropdown-list-image mr-3">
                  <div class="mr-3">
                    <div class="icon-circle bg-danger">

                      <i class="fas fa-temperature-high text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
        

    <?php 
  }  else if ($orderType === "recordWater") { ?>
                <a class="dropdown-item d-flex align-items-center" href="img/waterFacts.png" target="_blank">
                  <div class="mr-3">
                    <div class="icon-circle bg-info">

                      <i class="fas fa-tint text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                    <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                    <div class="small text-gray-500">Learn more!</div>
                  </div>
                </a>
        

    <?php 
  } 

    ?>             
                  
                 



<?php 
  }
  

} else { ?>
  <div class="row dropdown-item d-flex align-items-center">
    <h1>No Orders Today!</h1>
  </div>
<?php }



?>

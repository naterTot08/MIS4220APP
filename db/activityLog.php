<?php  
$today = date('Y-m-d');
$sql = "SELECT orderType.orderType AS orderType, orderType.orderDescription AS orderDescription, orders.orderID as orderID, orders.orderDate AS orderDate,orders.response AS response FROM orderType  JOIN orders ON orderType.orderType=orders.orderType WHERE orders.response IS NOT NULL AND orders.userID=" . $userID . " AND orders.orderDate < " . "'" . $today . "'" . " ORDER BY orderDate DESC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $orderID = $row['orderID'];
    $orderDate = strval(date('m-d-Y', strtotime($row['orderDate'])));
    $orderType = $row['orderType'];
    $orderDescription = $row['orderDescription'];
    $response = $row['response'];

  
              
    
    if ($orderType === "recordWeight") { 
      $color = 'bg-info';
      $icon = 'fa-weight';
                          

                

  
  } 
    else if ($orderType === "recordDrugUse") {
      $color = 'bg-success';
      $icon = 'fa-joint';
                    
                      

        
    
  }  else if ($orderType === "recordAlcohol") {
      $color = 'bg-info';
      $icon = 'fa-cocktail';
                   
                  
        

    
  }  else if ($orderType === "recordTobacco") {
      $color = 'bg-secondary';
      $icon = 'fa-smoking';
                  
                  
        

    
  } else if ($orderType === "recordMood") {
      $color = 'bg-warning';
      $icon = 'fa-theater-masks';
                  
                  
         

    
  }  else if ($orderType === "recordSleep") {
      $color = 'bg-light';
      $icon = 'fa-sleep';
               
                  
      

    
  } else if ($orderType === "heartRateMonitor") {
      $color = 'bg-primary';
      $icon = 'fa-heartbeat';
                    
                  
        

    
  } else if ($orderType === "recordTemp") {
      $color = 'bg-danger';
      $icon = 'fa-temperature-high'; 
                    
                  
        

    
  } else if ($orderType === "recordWater") {
      $color = 'bg-info';
      $icon = 'fa-tint';


  
  } ?>
                  <a href="#">
                    <tr>
                      
                      <td>
                        <div class="mr-3">
                          <div class="icon-circle <?php echo $color; ?>">
                            <i class="fas <?php echo $icon; ?> text-white"></i>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div>
                          <span class="font-weight-bold"><?php echo $orderDescription; ?></span>
                        </div>
                      </td>
                      <td><?php echo $response; ?></td>
                      <td>
                        <div class="small text-gray-500"><?php echo $orderDate; ?></div>
                      </td>
                      <td>155</td>
                      
                    </tr>  
                    </a>              
                  
               


 <?php }
  

} else { ?>
  <div class="row dropdown-item d-flex align-items-center">
    <h1>No Orders Today!</h1>
  </div>
<?php }



?>



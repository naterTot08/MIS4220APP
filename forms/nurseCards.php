<!-- Declare Nurse Card Date -->
<?php
$nurseDate = new DateTime();
$nurseDate->setDate(2020, 11, 4);

$dueDate = new DateTime();
$dueDate->setDate(2020, 12, 12);


$totalDays = $nurseDate->diff($dueDate);
$today = new dateTime();
$daysFrom = $today->diff($nurseDate);
$daysTill = $today->diff($dueDate);

$percentComplete = ($daysFrom->format('%R%a')*-1) % $totalDays->format('%R%a');


?>

<!-- Content Row -->
          <div class="row">

            <!-- Nurse Encounter Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="nurseEncounter.php">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nurse Encounter</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Encounter Date</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nurseDate->format('m/d/Y'); ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Form Two Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="formTwo.php">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Health Check Up</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Status: Pending</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $daysTill->format('%R%a days'); ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Form Three Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="formThree.php">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Patient Check-In</div>
                        <div class="row no-gutters align-items-center">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Status: Action</div>
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $percentComplete; ?>%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percentComplete; ?>%" aria-valuenow="<?php echo $percentComplete; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Form Four Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="formFour.php">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Form Four</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Status: Due</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dueDate->format('m/d/Y'); ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            
          </div>
          <!-- Content Row -->
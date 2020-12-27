<?php $page = 'goals'; $pageType= 'components'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

        <form method="POST" action="includes/goalsForm.inc.php">
          
          <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Set your Goals:</h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-info text-uppercase mb-1">Weight</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><input class="col-sm-10" type="number" min="75" max="1000" name="weight"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-weight fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-warning text-uppercase mb-1">Weekly Alcoholic Drinks:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><input class="col-sm-10" type="number" min="0" name="alcUse"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-beer fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-danger text-uppercase mb-1">Tobacco Cessation Date:</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><input class='col-sm-11' type="date" name="tobacco"></div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-smoking fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-success text-uppercase mb-1">Days using Recreational Drugs:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><input class="col-sm-10" type="number" min="0" max="" name="drugUse"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-joint fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-success text-uppercase mb-1">Active Minutes:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><input class="col-sm-10" type="number" min="20" name="active"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hiking fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-info text-uppercase mb-1">Daily Water Intake (Oz):</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><input class="col-sm-10" type="number" min="8" name="water"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hand-holding-water fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-warning text-uppercase mb-1">Mood Booster Value (1 - 5):</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><input class='col-sm-11' type="number" min="1" max="5" name="mood"></div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-smile-beam fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text font-weight-bold text-primary text-uppercase mb-1">Resting BPM:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><input class="col-sm-10" type="number" min="50" name="bpm"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-heartbeat fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <hr>
          <div class="row"><!--start submit-->
          
         <button type="submit" class="form-control btn-primary" name="submit"><i class="fas fa-heartbeat fa-sm text-white-50"></i> Update Goals</button>
        </div><!-- end submit-->

          

        </div>
        <!-- /.container-fluid -->
        </form>

      </div>
      <!-- End of Main Content -->


    <?php include 'includes/footer.php'; ?>
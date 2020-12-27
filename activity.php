<?php $page = 'activity'; $pageType= 'user'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">User Activity</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><div class="icon-circle bg-dark">
                            <i class="fas fa-heartbeat text-white"></i>
                          </div></th>
                      <th>Activity</th>
                      <th>Response</th>
                      <th>Response Date</th>
                      <th>Goal</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th>Activity</th>
                      <th>Response</th>
                      <th>Response Date</th>
                      <th>Goal</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php include 'db/activityLog.php'; ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          	

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include 'includes/footer.php'; ?>
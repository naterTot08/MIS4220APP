<?php include 'includes/header.php'; ?>
<?php $page = 'nurse'; include 'includes/nav.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nurse Orders</h1>
            
          </div>

          Review of systems form


          <?php include 'forms/nurseCards.php' ;?>

          <?php include "forms/ptValidation.php" ;?>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nurses Orders:</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-heartbeat fa-sm text-white-50"></i> Nurse Button </a>
          </div>
           <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <?php include 'forms/nurseOrders.php' ;?>
              <?php include 'forms/nurseOrderStatus.php'; ?>

            </div><!--end main col-->
          </div><!--end main row-->

         


              



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include 'includes/footer.php';?>

      

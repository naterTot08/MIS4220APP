<?php include 'includes/header.php'; ?>
<?php $page = 'home'; include 'includes/nav.php'; ?>
<?php 


if (date('H') < 12) {
   $greeting = 'Good Morning!';
 } elseif (date('h') > 11 && date('H') < 17) {
   $greeting = 'How is your day going?';
 } elseif (date('H') > 16 ) {
   $greeting = 'How are you doing tonight?';
 }

 ?>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $greeting; ?></h1>
            
          </div>
          <?php include 'db/selectOrderOptions.php' ;?>


          


          </div><!--end container-->

      </div>
      <!-- End of Main Content -->

      <?php include 'includes/footer.php';?>

      

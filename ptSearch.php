<?php $page = 'ptSearch'; $pageType= ''; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Patient Search</h1>
          <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Patient Name</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Date of Birth</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Address</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Chief Complaint</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Nurse Notes</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include 'includes/footer.php'; ?>
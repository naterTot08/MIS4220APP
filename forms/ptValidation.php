<!-- Patient Validation form:
Includes pt picture, id, and validation card -->

<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardPtValidation" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardPtValidation">
    <h6 class="m-0 font-weight-bold text-primary">Verify Patient Information</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardPtValidation">
    <div class="card-body">
                    

<!-- Validation Section -->
          <?php include 'forms/patientID.php' ?>

          <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Patient Name: <?php echo $fullName; ?></h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Patient Photo:</div>
                      <a class="dropdown-item" href="#">Correct</a>
                      <a class="dropdown-item" href="#">Change</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <img src="<?php echo $patientPhoto ?>" class="img-fluid" alt="Responsive image">
                </div>
              </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Patient Information</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">First Name</span>
                      </div>
                    </div>
                    <input type="text" value ="<?php echo $firstName; ?>" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Last Name</span>
                      </div>
                    </div>
                    <input type="text" value ="<?php echo $lastName; ?>" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Date of Birth</span>
                      </div>
                    </div>
                    <input type="text" value ="<?php echo $dateOfBirth; ?>" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Address</span>
                      </div>
                    </div>
                    <input type="text" value ="<?php echo $fullAddress; ?>" class="form-control" aria-label="Text input with checkbox">
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
              </div>
            </div>
          </div><!-- End verify row-->
          <!-- Validation Section -->

    </div><!-- end verify pt card body-->
  </div>
</div><!-- end verify pt card-->
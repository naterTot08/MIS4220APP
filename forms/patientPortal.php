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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Guy Example</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-heartbeat fa-sm text-white-50"></i> Patient #02345678 </a>
          </div>
          <!-- Content Row -->

          <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Patient Name: Guy Example</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Patient Photo:</div>
                      <a class="dropdown-item" href="#">Download</a>
                      <a class="dropdown-item" href="#">Replace</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Remove Photo</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <img src="img/guy.jpg" class="img-fluid" alt="Responsive image">
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
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Insurance</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Primary Language</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Sex</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input"><span class="ml-2">Pronouns</span>
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
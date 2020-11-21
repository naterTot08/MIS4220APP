 <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              <!-- Nurse order status-->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardNurseStatus" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardNurseStatus">
                  <h6 class="m-0 font-weight-bold text-primary">Order Form</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardNurseStatus">
                  <!-- Order Status Example -->
                  <div class="card-body">
                      <h4 class="small font-weight-bold">Heart Rate<span class="float-right">20%</span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">Temperature<span class="float-right">40%</span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">Alcoholic Beverages<span class="float-right">60%</span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">Recreational Drug Use<span class="float-right">80%</span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">Activity X<span class="float-right">Complete!</span></h4>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  
                     
                </div>

              </div><!--end Nurse order status-->

              

              <!-- Nurse order form-->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardNurse" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardNurse">
                  <h6 class="m-0 font-weight-bold text-primary">Order Form</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardNurse">
                  <div class="card-body">
                    <div class="row">
                      
                      <div class="col-lg-3">Record Heart Rate with Device:</div>
                      
                      <div class="col-lg-3">
                        <!--options-->
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="radio" aria-label="Radio button for following text input">
                            </div>
                          </div>
                          <label class="input-group-text" for="inputGroupSelect01">Yes</label>
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="radio" aria-label="Radio button for following text input">
                            </div>
                          </div>
                          <label class="input-group-text" for="inputGroupSelect01">No</label>
                        </div>
                      </div>
                      <!--end options-->
                      <div class="col-lg-3">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button type="button" class="btn btn-outline-secondary">Interval</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Minutes</a>
                              <a class="dropdown-item" href="#">Hours</a>
                              <a class="dropdown-item" href="#">Days</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Weeks</a>
                              <a class="dropdown-item" href="#">Years</a>
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        </div>

                        <div class="input-group">
                          <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-outline-secondary">Duration</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Minutes</a>
                              <a class="dropdown-item" href="#">Hours</a>
                              <a class="dropdown-item" href="#">Days</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Weeks</a>
                              <a class="dropdown-item" href="#">Years</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end duration options-->
                    </div><!-- end input-->
                  </div>
                     
                    </div>

                  </div><!--end Nurse order form-->
                </div><!--end main col-->
              </div><!--end main row-->
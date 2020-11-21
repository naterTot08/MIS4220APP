 <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              <!-- Nurse order status-->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardNurseStatus" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardNurseStatus">
                  <h6 class="m-0 font-weight-bold text-primary">Patient Order Status</h6>
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
                    Record Heart Rate with Device:
                    <div class="row">
                      
                      <div class="col-lg-2">
                        <div class="input-group mb-1">
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
                      
                      <div class="col-lg-2">
                        
                        <div class="input-group">
                          <label class="input-group" for="inputGroupSelect01">Order Start Date: </label>
                          <div class="input-group">
                            <div class="input-group">
                              <input type="Date" name="orderStartDate">
                            </div>
                          </div>
                          
                        </div>                        
                      </div><!--end start date-->
                      <div class="col-lg-2">
                        
                        <div class="input-group">
                          <label class="input-group" for="inputGroupSelect01">Order End Date: </label>
                          <div class="input-group-prepend">
                            <div class="input-group">
                              <input type="Date" name="orderEndDate">
                            </div>
                          </div>                          
                        </div>
                      </div><!-- end end date-->

                        
                      <div class="col-lg-3">
                        
                        <div class="input-group">
                          <label class="input-group" for="inputGroupSelect01">Interval</label>
                          <div class="input-group">
                            <div class="input-group">
                              <select class="custom-select" id="orderInterval">
                                <option selected>Choose...</option>
                                <option value="1">Minutes</option>
                                <option value="2">Hours</option>
                                <option value="3">Days</option>
                              </select>
                            </div>
                          </div>
                          
                        </div>                        
                      </div><!--end interval-->
                      <div class="col-lg-3">
                        
                        <div class="input-group">
                          <label class="input-group" for="inputGroupSelect01">Duration</label>
                          <div class="input-group-prepend">
                            <div class="input-group">
                              <input type="text" name="Duration">
                            </div>
                          </div>                          
                        </div>
                      </div><!-- end duration-->
                    </div><!-- end input-->
                  </div>
                     
                    </div>

                  </div><!--end Nurse order form-->
                </div><!--end main col-->
              </div><!--end main row-->
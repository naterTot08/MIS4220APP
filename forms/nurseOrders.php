
    

              
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardNurse" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardNurse">
    <h6 class="m-0 font-weight-bold text-primary">Order Form</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardNurse">
    <div class="card-body">
      <div class="row"> <!-- Nurse order heartRateMonitor-->
        <div class="col-lg-12">
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
      </div><!--end Nurse order heartRateMonitor-->
    </div>
  </div>
</div>
                

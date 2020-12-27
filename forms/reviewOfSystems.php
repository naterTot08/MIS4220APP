
<div class="col-lg-12 mb-4">
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardPhysician" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardPhysician">
    <h6 class="m-0 font-weight-bold text-primary">Wellness Check-In</h6>
  </a>
  <form action="includes/reviewForm.inc.php" method="POST"><!--start form-->
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <span><strong>Urgent Notice</strong> Please select this for urgent orders.
                <div class="input-group-prepend mb-1">
                  <div class="input-group-text">
                    <input type="checkbox" id="urgent" name="urgent" value="1">
                  </div>
                  <label class="input-group-text" for="urgent">Urgent</label><br>
                </div></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardPhysician">
    <div class="card-body">
      
      <div class="row"><!--start height-->
        <div class="col-sm-6 input-group mb-3">
  				<div class="input-group-prepend">
  					<span class="input-group-text" id="inputGroup-sizing-default">Height in Feet</span>
  				</div>
  				<input type="number" min="1" max="9" class="form-control" name="heightFt">
  			</div>
        <div class="col-sm-6 input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Height in Inches</span>
          </div>
          <input type="number" min="0" max="11" class="form-control" name="heightIn">
        </div>
      </div><!-- end height-->
      <div class="row"><!--start weight-->
        <div class="col-sm-6 input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Weight</span>
          </div>
          <input type="number" min="75" max="1000" class="form-control" name="weight">
        </div>
        
      </div><!-- end weight -->

      <hr>

      

      
      <div class="form-group row"><!--questions-->
        <div class="col-sm-12">
        <hr>  <h1>Do you use tobacco or nicotine products?</h1>
        </div>
        <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesTobacco" name="tobacco" value="2">
            </div>
            <label class="input-group-text" for="yesTobacco">Yes, sometimes</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="noTobacco" name="tobacco" value="1">
            </div>
            <label class="input-group-text" for="noTobacco">Not usually</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="neverTobacco" name="tobacco" value="-1">
            </div>
            <label class="input-group-text" for="neverTobacco">Never</label><br>
          </div>
        </div>
       
        <div class="col-sm-12">
        <hr>  <h1>Do you consume more than 14 alcoholic beverages a week on average?</h1>
        </div>
        <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesAlc" name="alcUse" value="2">
            </div>
            <label class="input-group-text" for="yesAlc">Yes, sometimes</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="noAlc" name="alcUse" value="1">
            </div>
            <label class="input-group-text" for="noAlc">Not usally</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="neverAlc" name="alcUse" value="-1">
            </div>
            <label class="input-group-text" for="neverAlc">Never</label><br>
          </div>
        </div>

        <div class="col-sm-12">
        <hr>  <h1>Do you use recreational drugs?</h1>
        </div>
        <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesDrugs" name="drugUse" value="2">
            </div>
            <label class="input-group-text" for="yesDrugs">Yes, sometimes</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="noDrugs" name="drugUse" value="1">
            </div>
            <label class="input-group-text" for="noDrugs">Not usually</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="neverDrugs" name="drugUse" value="-1">
            </div>
            <label class="input-group-text" for="neverDrugs">Never</label><br>
          </div>
        </div>


          <div class="col-sm-12">
          <hr>  <h1>Are you active for at least 20 minutes a day or 150 minutes a week?</h1>
          </div>
          <div class="col-sm-1 mb-3">
            <div class="input-group-prepend mb-1">
              <div class="input-group-text">
                <input type="radio" id="yesActive" name="active" value="2">
              </div>
              <label class="input-group-text" for="yesActive">Yes, usually</label><br>
            </div>
            <div class="input-group-prepend mb-1">
              <div class="input-group-text">
                <input type="radio" id="noActive" name="active" value="1">
              </div>
              <label class="input-group-text" for="noActive">Sometimes</label><br>
            </div>
            <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="neverActive" name="active" value="-1">
            </div>
            <label class="input-group-text" for="neverActive">Not recently</label><br>
          </div>
          </div>

          <!--mood rating-->
          <div class="col-sm-12">
            <hr>  
            <h1>How would your rate your mood right now?</h1>
          </div>
          <div class="col-sm-12 mb-3">
            <div class="col-sm-1 ">
              <div class="input-group-prepend mb-1">
                <label class="input-group-text" for="noActive"><i class="far fa-4x fa-tired"></i></label>
                <div class="input-group-text">
                  <input type="radio" class="btn btn-secondary" name="mood" id="worstMood" value="1">
                </div>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="input-group-prepend mb-1">
                  <label for="badMood" class="input-group-text"><i class="far fa-4x fa-frown"></i></label>
                <div class="input-group-text">
                  <input type="radio" class="btn btn-secondary" name="mood" id="badMood" value="2">
                </div>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="input-group-prepend mb-1">
                <label for="mehMood" class="input-group-text"><i class="far fa-4x fa-meh"></i></label>
              <div class="input-group-text">
                <input type="radio" class="btn btn-secondary" name="mood" id="mehMood" value="3">
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="input-group-prepend mb-1">
                <label for="goodMood" class="input-group-text"><i class="far fa-4x fa-smile"></i></label>
              <div class="input-group-text">
                <input type="radio" class="btn btn-secondary" name="mood" id="goodMood" value="4">
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="input-group-prepend mb-1">
              <label for="greatMood" class="input-group-text"><i class="far fa-4x fa-smile-beam"></i></label>
              <div class="input-group-text">
                <input type="radio" class="btn btn-secondary" name="mood" id="greatMood" value="5">
              </div>
            </div>
          </div>
        </div> <!-- end mood icons -->
            
          
        
      </div><!-- end questions-->
<hr>
      
      <div class="row"><!--start submit-->
          
         <button type="submit" class="form-control btn-primary" name="submit"><i class="fas fa-heartbeat fa-sm text-white-50"></i> Submit Review</button>
        </div><!-- end submit-->
      </form>
    </div>


		
    
    </div><!-- end card body-->
  </div>
</div>


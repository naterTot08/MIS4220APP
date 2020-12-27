
<div class="col-lg-6 mb-4">
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardPhysician" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardPhysician">
    <h6 class="m-0 font-weight-bold text-primary">Purpose of Review</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardPhysician">
    <div class="card-body">
      <form action="includes/goalsForm.inc.php" method="POST"><!--start form-->
      <div class="row"><!--start height-->
        <div class="col-sm-6 input-group mb-3">
  				<div class="input-group-prepend">
  					<span class="input-group-text" id="inputGroup-sizing-default">Goal</span>
  				</div>
  				<input type="text" class="form-control" name="heightFt">
  			</div>
        <div class="col-sm-6 input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Height in Inches</span>
          </div>
          <input type="text" class="form-control" name="heightIn">
        </div>
      </div><!-- end height-->

      <div class="row"><!--start weight-->
        <div class="col-sm-12 input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Weight</span>
          </div>
          <input type="text" class="form-control" name="weight">
        </div>
       
      </div><!-- end weight-->
      <hr>

      

      
      <div class="form-group row"><!--questions-->
        <div class="col-sm-6">
          <p>Do you use tobacco or nicotine products?</p>
        </div>
        <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesTobacco" name="tobacco" value="yes">
            </div>
            <label class="input-group-text" for="yesTobacco">Yes</label><br>
          </div>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" id="noTobacco" name="tobacco" value="no">
            </div>
            <label class="input-group-text" for="noTobacco">No</label><br>
          </div>
        </div>
       
        <div class="col-sm-6">
          <p>Do you consume more than 14 alcoholic beverages a week on average?</p>
        </div>
        <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesAlc" name="alcUse" value="yes">
            </div>
            <label class="input-group-text" for="yesAlc">Yes</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="noAlc" name="alcUse" value="no">
            </div>
            <label class="input-group-text" for="noAlc">No</label><br>
          </div>
        </div>

        <div class="col-sm-6">
          <p>Do you use recreational drugs?</p>
        </div>
        <div class="col-sm-1 mb-3">
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="yesDrugs" name="drugUse" value="yes">
            </div>
            <label class="input-group-text" for="yesDrugs">Yes</label><br>
          </div>
          <div class="input-group-prepend mb-1">
            <div class="input-group-text">
              <input type="radio" id="noDrugs" name="drugUse" value="no">
            </div>
            <label class="input-group-text" for="noDrugs">No</label><br>
          </div>
        </div>


          <div class="col-sm-6">
            <p>Are you active for at least 20 minutes a day or 150 minutes a week?</p>
          </div>
          <div class="col-sm-1 mb-3">
            <div class="input-group-prepend mb-1">
              <div class="input-group-text">
                <input type="radio" id="yesActive" name="active" value="yes">
              </div>
              <label class="input-group-text" for="yesActive">Yes</label><br>
            </div>
            <div class="input-group-prepend mb-1">
              <div class="input-group-text">
                <input type="radio" id="noActive" name="active" value="no">
              </div>
              <label class="input-group-text" for="noActive">No</label><br>
            </div>
          </div>
        
      </div><!-- end questions-->

      <div class="row"><!--start temp-->
        <div class="col-sm-3 input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Temperature</span>
          </div>
          <input type="text" class="form-control" name="temp">
        </div>
       
      </div><!-- end temp-->
      <div class="row"><!--start patientID-->
          <div class="col-sm-3 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Patient ID:</span>
            </div>
            <input type="text" class="form-control" name="patientID" value="<?php echo $patientID; ?>">
          </div>
         <button type="submit" class="form-control btn-primary" name="submitReview"><i class="fas fa-heartbeat fa-sm text-white-50"></i> Submit Review</button>
        </div><!-- end submit-->
      </form>
    </div>


		
    
    </div><!-- end card body-->
  </div>
</div>



Height
                    Weight
          BMI
          Body Fat %
          Heart Rate
          Blood Pressure
          Tempurature

--Daily Tasks--
Did you consume alcohol?
How much?
Frequency

Did you smoke?
What?
How much?
Frequency

Have you been active?
Activity?
Duration?
Frequency?
Goals?

Comorbitities Experienced
Heart Palpitations
Heart palpitations
Hypertension
Pulmonary disease
Obesity
Depression

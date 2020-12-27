
<!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardPtCheckIn" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardPtCheckIn">
                  <h6 class="m-0 font-weight-bold text-primary">Action Assessment</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardPtCheckIn">
                  <div class="card-body">
                  	<?php include 'db/selectPatientAssessments.php'; ?>

                  </div>
                </div>
              </div>

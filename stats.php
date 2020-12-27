<?php $page = 'stats'; $pageType= 'components';?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<!-- Begin Page Content -->
        <div class="container-fluid">
      <div class="row">
      
      <?php include 'db/selectRecordMoods.php'; ?>
      <?php include 'db/moodBars.php'; ?>
      <?php include 'db/selectRecordWeights.php'; ?>
      <?php include 'db/pastMoods.php'; ?>

      
      </div>
      
      
              
      
        
</div>
      </div>
      <!-- End of Main Content -->


    <?php include 'includes/footer.php'; ?>
    <script>
          new Morris.Bar({
          // ID of the element in which to draw the chart.
          element: 'moodBars',
          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.
          data: [
          <?php echo $moodBars_data; ?>
          
          ],
          // The name of the data record attribute that contains x-values.
          xkey: 'mood',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['count'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['count']
        });
        </script>
        <script>
          new Morris.Bar({
          // ID of the element in which to draw the chart.
          element: 'weightBars',

          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.
          data: [
          <?php echo $weightBars_data; ?>
          
          ],
          // The name of the data record attribute that contains x-values.
          xkey: 'date',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['weight'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['weight']
        });
        </script>
        <script>
          new Morris.Bar({
          // ID of the element in which to draw the chart.
          element: 'pastMoodBars',

          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.
          data: [
          <?php echo $pastMoodBars_data; ?>
          
          ],
          // The name of the data record attribute that contains x-values.
          xkey: 'date',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['mood'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['mood']
        });
        </script>
         <script>
          new Morris.Area({
          // ID of the element in which to draw the chart.
          element: 'moodWeight',
          //hideHover disables legend on hover
          hideHover: 'always',
          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.
          data: [
          <?php echo $moodWeight_data; ?>
          
          ],
          // The name of the data record attribute that contains x-values.
          xkey: 'date',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['weight', 'mood'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['weight', 'mood']
        });
        </script>
    
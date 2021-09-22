<?php

/*Template Name: Worker Assessments */ 

get_header();
?>
<div id="page-content">

	<div id="worker-assessment-page" class="assessment-page">
		
		<div class="row">
            <h4><strong>Assessment Summary</strong></h4>
            <div class="card padding-top-6 padding-x-6 margin-y-2">
                <div class="row">
                    <p class="col-2 padding-top-1">Training Status</p>
                    <div class="progress-bar col-8 bg-lightergrey text-center text-white" data-total='11'>
                        <div class="progress bg-blue-gradient" data-completed='4'></div>
                    </div>
                </div>
            </div>
        </div>


        <div id="completed-and-pending-assessments">

            <div class="row margin-top-4 options">
                <h5 data-action='toggle-completed-assessments-table'><strong>Completed Assessments</strong></h5>
                <h5 class="text-light-grey margin-x-1"><strong>|</strong></h5>
                <h5 data-action='toggle-pending-assessments-table' class="text-light-grey"><strong>Pending Assessments</strong></h5>
            </div>

            <div  class="card margin-y-2">
                <div id="completed-assessments-table" class="table-container">
                <?php 
                    generateTable([
                        'headers' => [
                            'Experience',
                            'Succesfully Completed',
                        ],
                        'rows' => [
                            ['Proper Use of a Loadbust Tool', '08/31/2020'],
                            ['Proper Spreading of Energized Phases', '08/31/2020'],
                            ['Crossarm Replacement', '08/31/2020'],
                            ['Bucket Tutorial', '09/01/2020'],
                        ]
                    ], 'left-col-bold first-col-large'); 
                ?>
                </div>

                <div id="pending-assessments-table" class="table-container">
                <?php 
                    generateTable([
                        'headers' => [
                            'Experience',
                            'Due Date',
                        ],
                        'rows' => [
                            ['Proper Use of a Loadbust Tool', '10/31/2020'],
                            ['Proper Spreading of Energized Phases', '10/31/2020'],
                            ['Crossarm Replacement', '10/31/2020'],
                            ['Bucket Tutorial', '10/31/2020'],
                        ]
                    ], 'left-col-bold first-col-large'); 
                ?>
                </div>
            </div>

        </div>

	</div>

</div>

<?php get_footer(); ?>
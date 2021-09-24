 <?php

/*Template Name: Executive Training */ 

get_header();

// Only letting executives and administrators view this page
if( !in_array('executive', $current_user->roles) && !in_array('administrator', $current_user->roles) ){
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( 404 ); exit();
}

?>

<div id="page-content">

    <div id="executive-training-page" class="training-page">

       <div class="card padding-2">
            <div class="row align-center margin-2">
                <p class="text-light-grey">Scores Use: All attempts</p>
                <label class="btn-switch">
                <input type="checkbox">
                <span class="switch round"></span>
                </label>
                <p class="text-sky-blue">Rolling Average (Last 5 Attempts)</p>
            </div>

            <div class="row align-center margin-2">
                <select>
                    <option disabled selected>Select Report Period</option>
                    <option>Eastern</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <span class="text-light-grey margin-x-4 margin-y-2">----OR----</span>
                <p class="text-light-grey margin-x-1">Start Date <input class="margin-2" type="date" name="start_date"></p>
                <p class="text-light-grey margin-x-1">End Date <input class="margin-2" type="date" name="end_date"></p>
                <button class="btn btn-skyBlue" type="submit">Generate Report</button>
            </div>

        </div>


        <div id="training-summaries" class="row slider slider-arrows-fixed">
            <div class="training-summary">
                <h3 class="text-dark-blue margin-y-1"><strong>Overall</strong></h3>
                <div class="card padding-y-5">
                    <p class="text-center"><strong>Training Summary</strong></p>
                    <div class="padding-bottom-6 border-bottom-grey">
                        <div class="progress-ring margin-x-auto" data-progress='47'>
                            <span class="progress-num">0</span>
                            <svg>
                              <circle class="progress-ring-circle"/>
                              <text x="33%" y="70%">Completed</text>
                            </svg>
                        </div>
                        <div class="progress-ring-key text-center">
                            <div><span class="bg-skyBlue margin-x-1" style="padding: .5em; display: inline-block;"></span>Complete</div>
                            <div><span class="bg-lightergrey margin-x-1" style="padding: .5em; display: inline-block;"></span>Incomplete</div>
                        </div>
                    </div>
                    <div class="text-center padding-6">
         
                        <?php $highcharts->displayBarChart('% Completed', 5); ?>

                        <hr class="margin-y-6">

                        <?php $highcharts->displayBarChart('Average Score', 5); ?>

                        <hr class="margin-y-6">

                        <p class="text-center margin-bottom-2"><strong>Training Experience % Complete</strong></p>

                        <?php 
                            generateTable([
                                'headers' => [
                                    'Training Experience',
                                    '% Completed',
                                ],
                                'rows' => [
                                    ['Proper Use of a Loadbust Tool', '60%'],
                                    ['Proper Spreading of Energized...', '20%'],
                                    ['Proper Spreading of Energized...', '16%'],
                                    ['Jumper Removal for New Pole...', '60%'],
                                    ['Termination of Underground...', '30%'],
                                ]
                            ], 'left-col-bold first-col-large'); 
                        ?>

                        <p class="text-center margin-top-6 margin-bottom-2"><strong>Training Experience Score</strong></p>

                        <?php 
                            generateTable([
                                'headers' => [
                                    'Training Experience',
                                    '% Completed',
                                ],
                                'rows' => [
                                    ['Proper Use of a Loadbust Tool', '75%'],
                                    ['Proper Spreading of Energized...', '60%'],
                                    ['Proper Spreading of Energized...', '70%'],
                                    ['Jumper Removal for New Pole...', '85%'],
                                    ['Termination of Underground...', '80%'],
                                ]
                            ], 'left-col-bold first-col-large'); 
                        ?>

                    </div>
                </div>
            </div>

            <div class="training-summary">
                <h3 class="text-dark-blue margin-y-1"><strong>West Region</strong></h3>
                <div class="card padding-y-5">
                    <p class="text-center"><strong>Training Summary</strong></p>
                    <div class="padding-bottom-6 border-bottom-grey">
                        <div class="progress-ring margin-x-auto" data-progress='54'>
                            <span class="progress-num">0</span>
                            <svg>
                              <circle class="progress-ring-circle"/>
                              <text x="33%" y="70%">Completed</text>
                            </svg>
                        </div>
                        <div class="progress-ring-key text-center">
                            <div><span class="bg-skyBlue margin-x-1" style="padding: .5em; display: inline-block;"></span>Complete</div>
                            <div><span class="bg-lightergrey margin-x-1" style="padding: .5em; display: inline-block;"></span>Incomplete</div>
                        </div>
                    </div>
                    <div class="text-center padding-6">
         
                        <?php $highcharts->displayBarChart('% Completed', 5); ?>

                        <hr class="margin-y-6">

                        <?php $highcharts->displayBarChart('Average Score', 5); ?>

                        <hr class="margin-y-6">

                        <p class="text-center margin-bottom-2"><strong>Training Experience % Complete</strong></p>

                        <?php 
                            generateTable([
                                'headers' => [
                                    'Training Experience',
                                    '% Completed',
                                ],
                                'rows' => [
                                    ['Proper Use of a Loadbust Tool', '60%'],
                                    ['Proper Spreading of Energized...', '20%'],
                                    ['Proper Spreading of Energized...', '16%'],
                                    ['Jumper Removal for New Pole...', '60%'],
                                    ['Termination of Underground...', '30%'],
                                ]
                            ], 'left-col-bold first-col-large'); 
                        ?>

                        <p class="text-center margin-top-6 margin-bottom-2"><strong>Training Experience Score</strong></p>

                        <?php 
                            generateTable([
                                'headers' => [
                                    'Training Experience',
                                    '% Completed',
                                ],
                                'rows' => [
                                    ['Proper Use of a Loadbust Tool', '75%'],
                                    ['Proper Spreading of Energized...', '60%'],
                                    ['Proper Spreading of Energized...', '70%'],
                                    ['Jumper Removal for New Pole...', '85%'],
                                    ['Termination of Underground...', '80%'],
                                ]
                            ], 'left-col-bold first-col-large'); 
                        ?>

                    </div>
                </div>
            </div>

            <div class="training-summary">
                <h3 class="text-dark-blue margin-y-1"><strong>East Region</strong></h3>
                <div class="card padding-y-5">
                    <p class="text-center"><strong>Training Summary</strong></p>
                    <div class="padding-bottom-6 border-bottom-grey">
                        <div class="progress-ring margin-x-auto" data-progress='54'>
                            <span class="progress-num">0</span>
                            <svg>
                              <circle class="progress-ring-circle"/>
                              <text x="33%" y="70%">Completed</text>
                            </svg>
                        </div>
                        <div class="progress-ring-key text-center">
                            <div><span class="bg-skyBlue margin-x-1" style="padding: .5em; display: inline-block;"></span>Complete</div>
                            <div><span class="bg-lightergrey margin-x-1" style="padding: .5em; display: inline-block;"></span>Incomplete</div>
                        </div>
                    </div>
                    <div class="text-center padding-6">
         
                        <?php $highcharts->displayBarChart('% Completed', 5); ?>

                        <hr class="margin-y-6">

                        <?php $highcharts->displayBarChart('Average Score', 5); ?>

                        <hr class="margin-y-6">

                        <p class="text-center margin-bottom-2"><strong>Training Experience % Complete</strong></p>

                        
                        <?php 
                            generateTable([
                                'headers' => [
                                    'Training Experience',
                                    '% Completed',
                                ],
                                'rows' => [
                                    ['Proper Use of a Loadbust Tool', '60%'],
                                    ['Proper Spreading of Energized...', '20%'],
                                    ['Proper Spreading of Energized...', '16%'],
                                    ['Jumper Removal for New Pole...', '60%'],
                                    ['Termination of Underground...', '30%'],
                                ]
                            ], 'left-col-bold first-col-large'); 
                        ?>

                        <p class="text-center margin-top-6 margin-bottom-2"><strong>Training Experience Score</strong></p>

                        <?php 
                            generateTable([
                                'headers' => [
                                    'Training Experience',
                                    '% Completed',
                                ],
                                'rows' => [
                                    ['Proper Use of a Loadbust Tool', '75%'],
                                    ['Proper Spreading of Energized...', '60%'],
                                    ['Proper Spreading of Energized...', '70%'],
                                    ['Jumper Removal for New Pole...', '85%'],
                                    ['Termination of Underground...', '80%'],
                                ]
                            ], 'left-col-bold first-col-large'); 
                        ?>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
 <?php

/*Template Name: Worker Training */ 

get_header();

?>

<div id="page-content">

    <div id="worker-training-page" class="training-page" >

        <div id="training-summary" class="row">
            <h4><strong>Training Summary</strong></h4>
            <div class="card padding-top-6 padding-x-6 margin-y-2">
                <div class="row">
                    <p class="col-2 padding-top-1">Training Status</p>
                    <div class="progress-bar col-8 bg-lightergrey text-center text-white" data-total='11'>
                        <div class="progress bg-blue-gradient" data-completed='7'></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="assignments-and-pending-training">

            <div class="row margin-top-4 margin-bottom-1 options">
                <h5 data-action='toggle-assignments-and-pending-table'><strong>Assignments and Pending Training (4) </strong></h5>
                <h5 class="text-light-grey margin-x-1"><strong>|</strong></h5>
                <h5 data-action='toggle-completed-training-table' class="text-light-grey"><strong>Completed Training(7) </strong></h5>
            </div>

            <div  class="card margin-y-2">
                <div id="assignments-and-pending-table" class="table-container">
                <?php 
                    generateTable([
                        'headers' => [
                            'Experience',
                            'Due Date',
                            'Assigner',
                            'Action'
                        ],
                        'rows' => [
                            ['Applying Proper Cover Up <button class="btn-yellow btn-round">New Assignment</button>', '01/29/2021', 'Manager 1', '<p class="text-sky-blue">Sign Up/Request</p>'],
                           ['Distribution Gas Pipe Fusion <button class="btn-yellow btn-round">New Assignment</button>', '02/01/2021', 'Manager 2', '<p class="text-sky-blue">Sign Up/Request</p>'],
                           ['Jumper Removal for New Pole Installation <button class="btn-yellow btn-round">New Assignment</button>', '02/03/2021', 'Manager 1', '<p class="text-sky-blue">Sign Up/Request</p>'],
                           ['3-Phase Transformer Bank Replacement', 'N/A', 'N/A', '<p class="text-sky-blue">Sign Up/Request</p>'],
                        ]
                    ], 'left-col-bold first-col-large'); 
                ?>
                </div>

                <div id="completed-training-table" class="table-container">
                <?php 
                    generateTable([
                        'headers' => [
                            'Experience',
                            'Most Recent Score',
                            'Best Score',
                            'Most Recent Time',
                            'Best Time',
                            'Attempts'
                        ],
                        'rows' => [
                            ['Proper Use of a Loadbust Tool', 70, 80, '1:40', '1:30', 2],
                            ['Proper Spreading of Energized Phases', 30, 30, '3:30', '3:30', 1],
                            ['Crossarm Replacement', 30, 30, '6:00', '6:00', 1],
                            ['Bucket Tutorial', 95, 95, '1:15', '1:15', 1],
                            ['Termination of Underground Transformers', 65, 70, '3:02', '2:02', 2],
                            ['Moving a Dead-End Trap', 75, 75, '1:30', '1:30', 1],
                            ['Proper Use of Mechanical Jumpers', 55, 65, '2:25', '1:25', 3],
                        ]
                    ], 'left-col-bold first-col-large', false); 
                ?>
                </div>
            </div>

        </div>

        <h5 class="margin-top-4 margin-x-2 margin-bottom-1"><strong>Performance Summary</strong></h5>
        <div id="performance-summary" class="row align-center card padding-5 margin-y-2">
            <div class="col-7">

                <?php $highcharts->generateSpiderChart('performance-summary-spider-chart', [
                    'Safety Score' => [
                        'name' => 'Safety Score',
                        'value' => 80,
                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                    ],
                    'Efficiency Score' => [
                        'name' => 'Efficiency Score',
                        'value' => 68,
                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                    ],
                    'Process Score' => [
                        'name' => 'Process Score',
                        'value' => 53,
                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                    ],
                    'Procedure Familiarity' => [
                        'name' => 'Procedure Familiarity',
                        'value' => 68,
                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                    ],
                    'Effectiveness Score' => [
                        'name' => 'Effectiveness Score',
                        'value' => 70,
                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                    ],
                    'Consistency Score' => [
                        'name' => 'Consistency Score',
                        'value' => 55,
                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                    ]
                ]); ?>
                
            </div>
            <div class="col-5 padding-5">
                <p class="margin-bottom-3"><strong>Safety Score:</strong><br>Based on number of safety incidents or critical faults during training sessions.</p>
                <p class="margin-bottom-3"><strong>Efficiency Score:</strong><br>Based on the trainee's time to complete a module versus the expected time to complete an experience.</p>
                <p class="margin-bottom-3"><strong>Process Score:</strong><br>Based on how well the trainee follows the process (do they deviate from the suggested path, is there rework, etc).</p>
                <p class="margin-bottom-3"><strong>Procedure Familiarity:</strong><br>Based on the trainee's familiarity with the required actions and order of operations for each experience.</p>
                <p class="margin-bottom-3"><strong>Effectiveness Score:</strong><br>Based on the number of failed attempts compared to the overall number of attempts.</p>
                <p class="margin-bottom-3"><strong>Consistency Score:</strong><br>Based on the consistency of a trainee's scores and times for each experience.</p>
            </div>
        </div>

        <div id="no-data-available-modal" class="modal-container">
            <div class="modal medium">
                <div class="modal-header text-center">
                   <div class="modal-options">
                        <span class="dashicons dashicons-no modal-exit"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row justify-center align-center text-center padding-10">
                        <p>You have not attempted this training experience.<br>No data is currently available.</p>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>

         <div id="completed-training-modal" class="modal-container">
            <div class="modal large">
                <div class="modal-header text-center">
                    <h3 class="text-white padding-bottom-1"><strong>Training Results</strong></h3>
                    <p class="text-sky-blue padding-bottom-1">Experience: Proper Use of a Loadbust Tool</p>
                   <div class="modal-options">
                        <div class="training-results">
                            <img class="tiny-icon" src="<?php echo get_template_directory_uri() . '/assets/images/training-results.svg' ?>">
                            <span>Training Results</span>
                        </div>
                        <div class="performance-trends">
                            <img class="tiny-icon" src="<?php echo get_template_directory_uri() . '/assets/images/line-and-bar-chart.svg' ?>">
                            <span>Performance Trends</span>
                        </div>
                        <span class="dashicons dashicons-no modal-exit"></span>
                    </div>
                </div>
                <div class="modal-body">
                    
                    <div id="training-results">
                        <div class="row align-center justify-center text-center">
                            <span class="dashicons dashicons-arrow-left-alt2 tiny-icon radius-circle border-skyBlue text-sky-blue margin-x-2"></span>
                            <div>
                                <h6 class="padding-y-1"><strong>Attempt 2</strong></h6>
                                <p class="text-sky-blue">08/31/2020</p>
                            </div>
                            <span class="dashicons dashicons-arrow-right-alt2 tiny-icon radius-circle border-skyBlue text-sky-blue margin-x-2"></span>
                        </div>

                        <div class="row justify-center padding-3 text-center">
                            <div class="col-3">
                                <p class="text-dark-blue padding-2">Score</p>
                                <h2 class="text-sky-blue"><strong>70</strong></h2>
                            </div>
                            <div class="col-3 border-x-grey">
                                <p class="text-dark-blue padding-2">Time</p>
                                <h2 class="text-sky-blue"><strong>1:40</strong></h2>
                            </div>
                            <div class="col-3">
                                <p class="text-dark-blue padding-2">Proper Tools</p>
                                <h2 class="text-sky-blue"><strong>90%</strong></h2>
                            </div>
                        </div>

                        <div class="table-container margin-y-2">
                        <?php 
                            generateTable([
                                'headers' => [
                                    'Event',
                                    'Pass/Fail',
                                    'Critical Fault',
                                ],
                                'rows' => [
                                    ['Properly cover the system neutral', "<button class='btn-round btn-yellow'>Fail</button>", 'Yes'],
                                    ['Disengage the right-hand cutout switch', "<button class='btn-round btn-green'>Pass</button>", 'No'],
                                    ['Disengage the left-hand cutout switch', "<button class='btn-round btn-yellow'>Fail</button>", 'No'],
                                    ['Cover Road Phase', "<button class='btn-round btn-green'>Pass</button>", 'No'],
                                    ['Cover Middle Phase', "<button class='btn-round btn-green'>Pass</button>", 'No'],
                                ]
                            ], 'left-col-bold header-dark-blue first-col-large', false); 
                        ?>
                        </div>

                        <div class="table-container margin-y-2">
                        <?php 
                            generateTable([
                                'headers' => [
                                    'Tool',
                                    'Used (Y/N)',
                                    '# Required',
                                    '# Taken',
                                ],
                                'rows' => [
                                    ['Tool 1', "<button class='btn-round btn-green'>Y</button>", 1, 1],
                                    ['Tool 2', "<button class='btn-round btn-green'>Y</button>", 2, 2],
                                    ['Tool 3', "<button class='btn-round btn-yellow'>N</button>", 1, 2],
                                    ['Tool 4', "<button class='btn-round btn-green'>Y</button>", 1, 1],
                                    ['Tool 5', "<button class='btn-round btn-yellow'>N</button>", 1, 2],
                                ]
                            ], 'left-col-bold header-dark-blue first-col-large', false); 
                        ?>
                        </div>

                        <h5><strong>Feedback</strong></h5>
                        <ul class="padding-2">
                            <li class="margin-top-1 margin-bottom-3"><strong class="text-sky-blue">Failed to cover the system neutral</strong><br>Lorem ipsum dolor sit amet, duo facete comprehensam te, minimum  posidonium has an, vel eu atqui numquam. Id nam illum posse aliquam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
                            <li class="margin-y-3"><strong class="text-sky-blue">Feedback Item 2</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
                            <li class="margin-y-3"><strong class="text-sky-blue">Feedback Item 3</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                        </ul>

                        <h5><strong>Area of Improvement</strong></h5>
                        <ul class="padding-2">
                            <li class="margin-top-1 margin-bottom-3"><strong class="text-sky-blue">Switches were loadbusted in</strong><br>Lorem ipsum dolor sit amet, duo facete comprehensam te, minimum  posidonium has an, vel eu atqui numquam. Id nam illum posse aliquam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
                            <li class="margin-y-3"><strong class="text-sky-blue">Improvement 2</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
                            <li class="margin-y-3"><strong class="text-sky-blue">Improvement 3</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                        </ul>
                    </div>

                    <div id="performance-trends" style="display: none;">

                        <div class="row">
                            <div class="col-2 text-center border-right-grey margin-right-2">
                                <div class="margin-y-3">
                                    <p>Latest Score</p>
                                    <h2 class="text-green"><strong>70</strong></h2>
                                </div>
                                <div class="margin-y-3">
                                    <p>Best Score</p>
                                    <h2 class="text-green"><strong>80</strong></h2>
                                </div>
                                <div class="margin-y-3">
                                    <p>Latest Time</p>
                                    <h2 class="text-green"><strong>1:30</strong></h2>
                                </div>
                                <div class="margin-y-3">
                                    <p>Best Time</p>
                                    <h2 class="text-green"><strong>1:15</strong></h2>
                                </div>
                            </div>
                            <div class="col-9">
                                 <?php $highcharts->generateSpiderChart('performance-trends-spider-chart', [
                                    'Safety Score' => [
                                        'name' => 'Safety Score',
                                        'value' => 80,
                                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                                    ],
                                    'Efficiency Score' => [
                                        'name' => 'Efficiency Score',
                                        'value' => 68,
                                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                                    ],
                                    'Process Score' => [
                                        'name' => 'Process Score',
                                        'value' => 53,
                                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                                    ],
                                    'Procedure Familiarity' => [
                                        'name' => 'Procedure Familiarity',
                                        'value' => 68,
                                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                                    ],
                                    'Effectiveness Score' => [
                                        'name' => 'Effectiveness Score',
                                        'value' => 70,
                                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                                    ],
                                    'Consistency Score' => [
                                        'name' => 'Consistency Score',
                                        'value' => 55,
                                        'tooltip' => 'Based on number of safety incidents orcritical faults during training sessions.'
                                    ]
                                ]); ?>
                            </div>
                        </div>

                        <div class="row space-around margin-y-10">
                            
                            <div class="col-5 padding-2">
                                <h5><strong>Score</strong></h5>
                                <?php
                                    $highcharts->generateLineChart('score', [
                                        'Attempt 1' => 20,
                                        'Attempt 2' => 40,
                                        'Attempt 3' => 48,
                                        'Attempt 4' => 38,
                                        'Attempt 5' => 80,
                                    ]);
                                ?>
                            </div> 

                            <div class="col-5 padding-2">
                                <h5><strong>Time to Complete</strong></h5>
                                <?php
                                    $highcharts->generateLineChart('time-to-complete', [
                                        'Attempt 1' => 240,
                                        'Attempt 2' => 190,
                                        'Attempt 3' => 48,
                                        'Attempt 4' => 38,
                                        'Attempt 5' => 80,
                                    ], 'time');
                                ?>
                            </div> 

                            <div class="col-5 padding-2">
                                <h5><strong>Failed Events</strong></h5>
                                <?php
                                    $highcharts->generateLineChart('failed-events', [
                                        'Attempt 1' => 4,
                                        'Attempt 2' => 3,
                                        'Attempt 3' => 2,
                                        'Attempt 4' => 1,
                                        'Attempt 5' => 0,
                                    ]);
                                ?>
                            </div> 

                            <div class="col-5 padding-2">
                                <h5><strong>Critical Faults</strong></h5>
                                <?php
                                    $highcharts->generateLineChart('critical-faults', [
                                        'Attempt 1' => 2,
                                        'Attempt 2' => 3,
                                        'Attempt 3' => 2,
                                        'Attempt 4' => 1,
                                        'Attempt 5' => 0,
                                    ]);
                                ?>
                            </div>     

                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>

</div>


<?php get_footer(); ?>
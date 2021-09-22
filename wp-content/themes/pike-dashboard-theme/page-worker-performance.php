<?php

/*Template Name: Worker Performance */ 

get_header();
?>
<div id="page-content">

	<div id="worker-performance-page" class="performance-page">

        <h5 class="margin-bottom-2">
            <strong>Safety</strong>
            <span class="dashicons dashicons-info text-sky-blue"></span>
        </h5>
        <div class="card padding-x-4 padding-y-2">           
            <div class="performance-charts-filter row align-center">
                <p class="text-light-grey margin-x-1">Start Date <input class="margin-2" type="date" name="start_date"></p>
                <p class="text-light-grey margin-x-1">End Date <input class="margin-2" type="date" name="end_date"></p>
                <button class="btn btn-skyBlue margin-x-2">Save Date Range</button>
                 <button class="btn border-skyBlue text-sky-blue margin-x-2">Apply to All</button>
            </div>

            <div class="performance-charts row margin-y-4 space-around">
                <div class="col-5">
                    <h6>Job Performance - Safety Incidents</h6>
                    <?php
                        $highcharts->generateLineChart('job-performance-safety-incidents', [
                            'August' => 1,
                            'September' => 2,
                            'October' => 1,
                            'November' => 0,
                            'December' => 0,
                        ], null, 'green');
                    ?>
                </div>
                <div class="performance-charts col-5">
                    <h6>Training Score - Safety</h6>
                    <?php
                        $highcharts->generateLineChart('training-score-safety', [
                            'August' => 50,
                            'September' => 70,
                            'October' => 80,
                            'November' => 90,
                            'December' => 95,
                        ]);
                    ?>
                </div>
            </div>
        </div>


        <h5 class="margin-bottom-2 margin-top-4">
            <strong>Productivity</strong>
            <span class="dashicons dashicons-info text-sky-blue"></span>
        </h5>
        <div class="card padding-x-4 padding-y-2">           
            <div class="performance-charts-filter row align-center">
                <p class="text-light-grey margin-x-1">Start Date <input class="margin-2" type="date" name="start_date"></p>
                <p class="text-light-grey margin-x-1">End Date <input class="margin-2" type="date" name="end_date"></p>
                <button class="btn btn-skyBlue margin-x-2">Save Date Range</button>
                 <button class="btn border-skyBlue text-sky-blue margin-x-2">Apply to All</button>
            </div>

            <div class="row performance-charts margin-y-4 space-around">
                <div class="col-5">
                    <h6>Job Performance - Productivity Ratio (Time to Complete/Planned)</h6>
                    <?php
                        $highcharts->generateLineChart('job-performance-productivity-ratio', [
                            'August' => 1.5,
                            'September' => 1.3,
                            'October' => 1.2,
                            'November' => 1,
                            'December' => .9,
                        ], null, 'green');
                    ?>
                </div>
                <div class="col-5">
                    <h6>Training Score - Efficiency</h6>
                    <?php
                        $highcharts->generateLineChart('training-score-efficiency', [
                            'August' => 60,
                            'September' => 80,
                            'October' => 90,
                            'November' => 97,
                            'December' => 95,
                        ]);
                    ?>
                </div>
            </div>
        </div>


        <h5 class="margin-bottom-2 margin-top-4">
            <strong>Accuracy</strong>
            <span class="dashicons dashicons-info text-sky-blue"></span>
        </h5>
        <div class="card padding-x-4 padding-y-2">           
            <div class="performance-charts-filter row align-center">
                <p class="text-light-grey margin-x-1">Start Date <input class="margin-2" type="date" name="start_date"></p>
                <p class="text-light-grey margin-x-1">End Date <input class="margin-2" type="date" name="end_date"></p>
                <button class="btn btn-skyBlue margin-x-2">Save Date Range</button>
                 <button class="btn border-skyBlue text-sky-blue margin-x-2">Apply to All</button>
            </div>

            <div class="performance-charts row margin-y-4 space-around">
                <div class="col-5">
                    <h6>Job Performance - Report Card Score</h6>
                    <?php
                        $highcharts->generateLineChart('job-performance-report-card-score', [
                            'August' => 78,
                            'September' => 80,
                            'October' => 84,
                            'November' => 80,
                            'December' => 96,
                        ], null, 'green');
                    ?>
                </div>
                <div class="col-5">
                    <h6>Training Score - Process</h6>
                    <?php
                        $highcharts->generateLineChart('training-score-process', [
                            'August' => 50,
                            'September' => 75,
                            'October' => 80,
                            'November' => 90,
                            'December' => 95,
                        ]);
                    ?>
                </div>
            </div>
        </div>


        <h5 class="margin-bottom-2 margin-top-4">
            <strong>Incidents</strong>
            <span class="dashicons dashicons-info text-sky-blue"></span>
        </h5>
        <div class="card padding-x-4 padding-y-2">           
            <div class="performance-charts-filter row align-center">
                <p class="text-light-grey margin-x-1">Start Date <input class="margin-2" type="date" name="start_date"></p>
                <p class="text-light-grey margin-x-1">End Date <input class="margin-2" type="date" name="end_date"></p>
                <button class="btn btn-skyBlue margin-x-2">Save Date Range</button>
                 <button class="btn border-skyBlue text-sky-blue margin-x-2">Apply to All</button>
            </div>

            <div class="performance-charts row margin-y-4 space-around">
                <div class="col-5">
                    <h6>Job Performance - Number of Incidents (Both Safety and Non-Safety)</h6>
                    <?php
                        $highcharts->generateLineChart('job-performance-number-of-incidents', [
                            'August' => 3,
                            'September' => 2,
                            'October' => 2,
                            'November' => 1,
                            'December' => 0,
                        ], null, 'green');
                    ?>
                </div>
                <div class="col-5">
                    <h6>Training Score - Procedure Familiarity</h6>
                    <?php
                        $highcharts->generateLineChart('training-procedure-familiarity', [
                            'August' => 60,
                            'September' => 80,
                            'October' => 90,
                            'November' => 97,
                            'December' => 94,
                        ]);
                    ?>
                </div>
            </div>
        </div>


        <h5 class="margin-bottom-2 margin-top-4"><strong>Completed Projects</strong></h5>

        <div class="completed-projects accordion">
            <div class="accordion-item">
                <div class="accordion-header">
                    <div class="row align-center">
                        <div class="col-3">
                            <p><strong>Project 1</strong></p>
                        </div>
                        <div class="col-3">
                            <p>08/23/2020</p>
                        </div>
                        <div class="col-6 text-right">
                            <button class="accordion-toggler"></button>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-2 padding-2">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Time on Job:</p>
                                <p><strong>80 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Time on Job:</p>
                                <p><strong>60 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6 ">
                                <p class="text-light-grey">Overtime:</p>
                                <p><strong>16 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Travel Time:</p>
                                <p><strong>10 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Travel Time:</p>
                                <p><strong>8 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Total Days:</p>
                                <p><strong>4 days</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Hot Days:</p>
                                <p><strong>4</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Cold Days:</p>
                                <p><strong>0</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Work Environment:</p>
                                <p><strong>Urban</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Emergency Response Work::</p>
                                <p><strong>Yes</strong></p>
                            </div>
                        </div>
                        <div class="col-4 padding-2">
                            <p class="text-light-grey">Feedback:</p>
                            <p>Lorem ipsum dolor sit amet, con-sectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euisLorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <div class="row align-center">
                        <div class="col-3">
                            <p><strong>Project 2</strong></p>
                        </div>
                        <div class="col-3">
                            <p>08/23/2020</p>
                        </div>
                        <div class="col-6 text-right">
                            <button class="accordion-toggler"></button>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-2 padding-2">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Time on Job:</p>
                                <p><strong>80 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Time on Job:</p>
                                <p><strong>60 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6 ">
                                <p class="text-light-grey">Overtime:</p>
                                <p><strong>16 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Travel Time:</p>
                                <p><strong>10 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Travel Time:</p>
                                <p><strong>8 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Total Days:</p>
                                <p><strong>4 days</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Hot Days:</p>
                                <p><strong>4</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Cold Days:</p>
                                <p><strong>0</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Work Environment:</p>
                                <p><strong>Urban</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Emergency Response Work::</p>
                                <p><strong>Yes</strong></p>
                            </div>
                        </div>
                        <div class="col-4 padding-2">
                            <p class="text-light-grey">Feedback:</p>
                            <p>Lorem ipsum dolor sit amet, con-sectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euisLorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <div class="row align-center">
                        <div class="col-3">
                            <p><strong>Project 3</strong></p>
                        </div>
                        <div class="col-3">
                            <p>08/23/2020</p>
                        </div>
                        <div class="col-6 text-right">
                            <button class="accordion-toggler"></button>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-2 padding-2">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Time on Job:</p>
                                <p><strong>80 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Time on Job:</p>
                                <p><strong>60 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6 ">
                                <p class="text-light-grey">Overtime:</p>
                                <p><strong>16 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Travel Time:</p>
                                <p><strong>10 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Travel Time:</p>
                                <p><strong>8 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Total Days:</p>
                                <p><strong>4 days</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Hot Days:</p>
                                <p><strong>4</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Cold Days:</p>
                                <p><strong>0</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Work Environment:</p>
                                <p><strong>Urban</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Emergency Response Work::</p>
                                <p><strong>Yes</strong></p>
                            </div>
                        </div>
                        <div class="col-4 padding-2">
                            <p class="text-light-grey">Feedback:</p>
                            <p>Lorem ipsum dolor sit amet, con-sectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euisLorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <div class="row align-center">
                        <div class="col-3">
                            <p><strong>Project 4</strong></p>
                        </div>
                        <div class="col-3">
                            <p>08/23/2020</p>
                        </div>
                        <div class="col-6 text-right">
                            <button class="accordion-toggler"></button>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-2 padding-2">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Time on Job:</p>
                                <p><strong>80 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Time on Job:</p>
                                <p><strong>60 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6 ">
                                <p class="text-light-grey">Overtime:</p>
                                <p><strong>16 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Travel Time:</p>
                                <p><strong>10 Hours</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Planned Travel Time:</p>
                                <p><strong>8 Hours</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Total Days:</p>
                                <p><strong>4 days</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Hot Days:</p>
                                <p><strong>4</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Cold Days:</p>
                                <p><strong>0</strong></p>
                            </div>
                        </div>
                        <div class="col-2 padding-2 border-x-grey">
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Work Environment:</p>
                                <p><strong>Urban</strong></p>
                            </div>
                            <div class="margin-top-2 margin-bottom-6">
                                <p class="text-light-grey">Emergency Response Work::</p>
                                <p><strong>Yes</strong></p>
                            </div>
                        </div>
                        <div class="col-4 padding-2">
                            <p class="text-light-grey">Feedback:</p>
                            <p>Lorem ipsum dolor sit amet, con-sectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euisLorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="card">
            <div class="row align-center padding-y-2 padding-x-6">
                <div class="col-3">
                    <p><strong>Project 1</strong></p>
                </div>
                <div class="col-3">
                    <p>08/23/2020</p>
                </div>
                <div class="col-6 text-right">
                    <button class="bg-lightBlue text-light-grey">
                        <span class="dashicons dashicons-plus"></span>
                    </button>
                </div>
            </div>
            <div class="row align-center padding-y-2 padding-x-6">
                <div class="col-3">
                    <p><strong>Project 2</strong></p>
                </div>
                <div class="col-3">
                    <p>09/01/2020</p>
                </div>
                <div class="col-6 text-right">
                    <button class="bg-lightBlue text-light-grey">
                        <span class="dashicons dashicons-plus"></span>
                    </button>
                </div>
            </div>
            <div class="row align-center padding-y-2 padding-x-6">
                <div class="col-3">
                    <p><strong>Project 3</strong></p>
                </div>
                <div class="col-3">
                    <p>09/03/2020</p>
                </div>
                <div class="col-6 text-right">
                    <button class="bg-lightBlue text-light-grey">
                        <span class="dashicons dashicons-plus"></span>
                    </button>
                </div>
            </div>
            <div class="row align-center padding-y-2 padding-x-6">
                <div class="col-3">
                    <p><strong>Project 4</strong></p>
                </div>
                <div class="col-3">
                    <p>09/03/2020</p>
                </div>
                <div class="col-6 text-right">
                    <button class="bg-lightBlue text-light-grey">
                        <span class="dashicons dashicons-plus"></span>
                    </button>
                </div>
            </div>
        </div> -->


         <div id="safety-modal" class="modal-container">
            <div class="modal medium">
                <div class="modal-header text-center">
                   <div class="modal-options">
                        <span class="dashicons dashicons-no modal-exit"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row justify-center align-center">
                        <p><strong>Safety:</strong><br><br>The job performance plot indicates the number of safety incidents from month to month.<br><br>The training score plot indicates the worker's safety score based on training performance from month to month.<br><br>Ideally, an increased safety score should trend with a reduced number of recorded safety incidents.</p>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>

	</div>

</div>

<?php get_footer(); ?>
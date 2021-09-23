<?php

/*Template Name: Manager Assessments */ 

get_header();
?>
<div id="page-content">

	<div id="manager-assessment-page" class="assessment-page">

		<?php include_once 'parts/dashboard-filter.php' ?>

		<div id="classification-summary" class="summary">
			<div class="row align-center space-between">
				<h3 class="col-9 text-dark-blue margin-top-3 margin-bottom-1"><strong>Classification Summary</strong></h3>
			</div>
			<div class="card row space-around padding-y-5 padding-x-2">
				<div class="tables col-6">
					<?php 
						generateTable([
							'headers' => [
								'Classification',
								'% Passed'
							],
							'rows' => [
								['Foreman', '60%'],
								['A Lineman', '20%'],
								['B Lineman', '16%'],
								['C Lineman', '60%'],
								['Groundman Lineman', '30%'],
							]
						], 'left-col-bold'); 
					?>
				</div>
				<div class="charts col-5">
						<?php $highcharts->displayBarChart('% Passed', 5); ?>
				</div>
			</div>
		</div>

		<div id="experience-summary" class="summary">
			<div class="row align-center space-between margin-top-5">
				<h3 class="col-9 text-dark-blue margin-y-1"><strong>Experience Summary</strong></h3>
			</div>
			<div class="card row space-around padding-y-5 padding-x-2">
				<div class="tables col-6">
					<?php 
						generateTable([
							'headers' => [
								'Experience',
								'% Passed',
							],
							'rows' => [
								['Proper Use of a Loadbust Tool', '60%'],
								['Proper Spreading of Energized Phases', '20%'],
								['Crossarm Replacement', '16%'],
								['Jumper Removal for New Pole Installation', '60%'],
								['Termination of Underground Transformers', '30%'],
							]
						], 'left-col-bold'); 
					?>
				</div>
				<div class="charts col-5">
					<?php $highcharts->displayBarChart('% Passed', 5); ?>
				</div>
			</div>
		</div>

		<div  id="assessment-data-comparison" class="row space-between">
			<h3 class="text-dark-blue margin-top-3 col-12"><strong>Assessment Data Comparison</strong></h3>
			<div class="col-6 padding-4">
				<div class="card">
					<div class="card-header bg-darkBlue row padding-3 font-strong space-around">
						<div class="col-3 text-center">
							<p class="text-white">Organization</p>
							<p class="text-sky-blue">Org 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Customer</p>
							<p class="text-sky-blue">Cus 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Area Supervisor</p>
							<p class="text-sky-blue">Supervisor 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Tenure at Pike</p>
							<p class="text-sky-blue">10 - 20</p>
						</div>
					</div>
					<div class="card-body">
						<div class="progress-ring margin-x-auto margin-y-4" data-progress='64'>
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

						<hr class="margin-x-4 margin-y-8">

						<?php $highcharts->displayBarChart('% Passed', 5); ?>		

						<hr class="margin-x-4 margin-y-8">				

						<?php $highcharts->displayBarChart('Average Score', 5); ?>
					</div>
				</div>
			</div>
			<div class="col-6 padding-4">
				<div class="card">
					<div class="card-header bg-darkBlue row padding-3 font-strong space-around">
						<div class="col-3 text-center">
							<p class="text-white">Organization</p>
							<p class="text-sky-blue">Org 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Customer</p>
							<p class="text-sky-blue">Cus 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Area Supervisor</p>
							<p class="text-sky-blue">Supervisor 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Tenure at Pike</p>
							<p class="text-sky-blue">10 - 20</p>
						</div>
					</div>
					<div class="card-body">
						<div class="progress-ring margin-x-auto margin-y-4" data-progress='38'>
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

						<hr class="margin-x-4 margin-y-8">

						<?php $highcharts->displayBarChart('% Passed', 5); ?>		

						<hr class="margin-x-4 margin-y-8">				

						<?php $highcharts->displayBarChart('Average Score', 5); ?>
					</div>
				</div>
			</div>
		</div>

		<div id="classification-summary-modal" class="modal-container">
			<div class="modal large">
				<div class="modal-header text-center">
					<h3 class="text-white"><strong>Classification Summary - Assessments</strong></h3>
					<div class="modal-options">
						<span class="dashicons dashicons-no modal-exit"></span>
					</div>
				</div>
				<div class="modal-body">

					<div class="row align-center justify-center text-center">
						<span class="dashicons dashicons-arrow-left-alt2 tiny-icon radius-circle border-skyBlue margin-x-2"></span>
						<div>
							<h6 class="padding-y-1"><strong>Foreman</strong></h6>
							<p class="text-sky-blue">Average Scores</p>
						</div>
						<span class="dashicons dashicons-arrow-right-alt2 tiny-icon radius-circle border-skyBlue margin-x-2"></span>
					</div>

					<div class="row justify-center padding-3 text-center">
						<div class="col-12">
							<p class="text-dark-blue padding-2">Average % Completed</p>
							<div class="row align-center justify-center">
								<h2 class="text-sky-blue"><strong>60%</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
					</div>

					<div class="col-7 margin-x-auto">
						<p class="text-dark-blue padding-y-2"><strong>Experience Summary:</strong></p>
						<p class="text-light-grey text-center mobile-only">Table is scrollable</p>
						<div class="table overflow-scroll">
						<?php
							generateTable([
								'headers' => [
									'Assessment',
									'% Passed',
								],
								'rows' => [
									['Proper Use of a Loadbust Tool', '10%'],
									['Proper Spreading of Energized Phases', '15%'],
									['Crossarm Replacemen', '20%'],
									['Jumper Removal for New Pole Installation', '30%'],
									['Termination of Underground Transformers', '60%'],
									['Applying Proper Cover Up', '60%'],
									['Distribution Gas Pipe Fusion', '75%'],
									['3-Phase Transformer Bank Replacement', '80%'],
								]
							], 'left-col-bold header-dark-blue text-center left-col-text-left');
						?>
						</div>
					</div>

					<p class="text-dark-blue padding-y-2"><strong>Common Areas of Improvement:</strong></p>

					<p class="text-light-grey text-center mobile-only">Table is scrollable</p>

					<div class="table overflow-scroll">
					<?php
						generateTable([
							'headers' => [
								'Area of Improvement',
								'# of Occurences',
								'Experience',
							],
							'rows' => [
								['Area of Improvement 1', '20', 'Load Bust'],
								['Area of Improvement 2', '18', 'Experience 2'],
								['Area of Improvement 3', '16', 'Experience 3'],
								['Area of Improvement 4', '14', 'Experience 4'],
								['Area of Improvement 5', '12', 'Experience 5'],

							]
						], 'left-col-bold header-dark-blue text-center left-col-text-left');

					?>
					</div>

					<p class="text-dark-blue padding-y-2"><strong>Experience Summary</strong></p>

					<p class="text-light-grey text-center mobile-only">Table is scrollable</p>
					
					<div class="table overflow-scroll">
					<?php
						generateTable([
							'headers' => [
								'Experience',
								'Average Score',
								'Average Time',
								'% Complete'
							],
							'rows' => [
								['Experience 1', '70%', '1:40', '10%'],
								['Experience 2', '23%', '6:23', '20%'],
								['Experience 3', '55%', '1:54', '30%'],
								['Experience 4', '61%', '2:59', '56%'],
								['Experience 5', '64%', '3:00', '67%'],
								['Experience 6', '24%', '2:30', '42%'],
								['Experience 7', '99%', '1:35', '52%'],
								['Experience 8', '39%', '9:33', '87%'],
								['Experience 9', '57%', '10:00', '22%'],
							]
						], 'left-col-bold header-dark-blue text-center left-col-text-left');

					?>
					</div>

				</div>
			</div>
		</div>

</div>


<?php

get_footer();

?>
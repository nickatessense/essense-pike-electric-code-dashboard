 	<?php

/*Template Name: Manager Training */ 

get_header();
?>
<div id="page-content">

	<div id="training">

		<?php include_once 'parts/dashboard-filter.php' ?>

		<div id="classification-summary" class="summary">
			<div class="row align-center space-between">
				<h3 class="col-9 text-dark-blue margin-y-1"><strong>Classification Summary</strong></h3>
				<div class="row options">
					<div class="option active border-blue" data-action='toggle-tables'>
						<span class="tiny-icon dashicons dashicons-menu"></span>
					</div>
					<div class="option border-blue" data-action='toggle-charts'>
						<img class="tiny-icon" src="<?php echo get_template_directory_uri() . '/assets/images/line-chart.svg' ?>">
					</div>
				</div>
			</div>
			<div class="card">
				<div class="tables">
					<?php 
						generateTable([
							'headers' => [
								'Classification',
								'% Completed',
								'Average Score'
							],
							'rows' => [
								['Foreman', '60%', '70%'],
								['A Lineman', '20%', '70%'],
								['B Lineman', '16%', '30%'],
								['C Lineman', '60%', '50%'],
								['Groundman Lineman', '30%', '60%'],
							]
						], 'left-col-bold'); 
					?>
				</div>
				<div class="charts row space-around">
					<div class="col-5">
						<?php $highcharts->displayBarChart('% Completed', 5); ?>
					</div>
					<div class="col-5">
						<?php $highcharts->displayBarChart('Average Score', 5); ?>
					</div>
				</div>
			</div>
		</div>

		<div id="experience-summary" class="summary">
			<div class="row align-center space-between margin-top-5">
				<h3 class="col-9 text-dark-blue margin-y-1"><strong>Experience Summary</strong></h3>
				<div class="row options">
					<div class="option active border-blue" data-action='toggle-tables'>
						<span class="tiny-icon dashicons dashicons-menu"></span>
					</div>
					<div class="option border-blue" data-action='toggle-charts'>
						<img class="tiny-icon" src="<?php echo get_template_directory_uri() . '/assets/images/line-chart.svg' ?>">
					</div>
				</div>
			</div>
			<div class="card">
				<div class="tables row">
					<?php 
						generateTable([
							'headers' => [
								'Experience',
								'% Completed',
								'Average Score',
								'Average Time',
							],
							'rows' => [
								['Proper Use of a Loadbust Tool', '60%', '70%', '1:40'],
								['Proper Spreading of Energized Phases', '20%', '30%', '6:00'],
								['Crossarm Replacement', '16%', '30%', '3:30'],
								['Jumper Removal for New Pole Installation', '60%', '50%', '5:00'],
								['Termination of Underground Transformers', '30%', '60%', '2:30'],
							]
						], 'left-col-bold'); 
					?>
				</div>
				<div class="charts row">
					<?php $highcharts->displayBarChart('% Completed', 11); ?>
					<?php $highcharts->displayBarChart('Average Score',11); ?>
				</div>
			</div>
		</div>

		<div id="training-data-comparison" class="row space-between">
			<h3 class="text-dark-blue margin-top-3 col-12"><strong>Training Data Comparison</strong></h3>
			<div class="col-6 padding-4">
				<div class="card">
					<div class="card-header bg-darkBlue row padding-3 font-strong space-around">
						<div class="col-3 text-center">
							<p class="text-white">Organization</p>
							<p class="text-blue">Org 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Customer</p>
							<p class="text-blue">Cus 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Area Supervisor</p>
							<p class="text-blue">Supervisor 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Tenure at Pike</p>
							<p class="text-blue">10 - 20</p>
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
							<div><span class="bg-blue margin-x-1" style="padding: .5em; display: inline-block;"></span>Complete</div>
							<div><span class="bg-lightergrey margin-x-1" style="padding: .5em; display: inline-block;"></span>Incomplete</div>
						</div>

						<hr class="margin-x-4 margin-y-8">

						<?php $highcharts->displayBarChart('% Completed', 5); ?>		

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
							<p class="text-blue">Org 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Customer</p>
							<p class="text-blue">Cus 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Area Supervisor</p>
							<p class="text-blue">Supervisor 1</p>
						</div>
						<div class="col-3 text-center">
							<p class="text-white">Tenure at Pike</p>
							<p class="text-blue">10 - 20</p>
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
							<div><span class="bg-blue margin-x-1" style="padding: .5em; display: inline-block;"></span>Complete</div>
							<div><span class="bg-lightergrey margin-x-1" style="padding: .5em; display: inline-block;"></span>Incomplete</div>
						</div>

						<hr class="margin-x-4 margin-y-8">

						<?php $highcharts->displayBarChart('% Completed', 5); ?>		

						<hr class="margin-x-4 margin-y-8">				

						<?php $highcharts->displayBarChart('Average Score', 5); ?>
					</div>
				</div>
			</div>
		</div>

		<div id="classification-summary-modal" class="modal-container">
			<div class="modal large">
				<div class="modal-header text-center">
					<h3><strong>Classification Summary - Training</strong></h3>
					<div class="modal-options">
						<span class="dashicons dashicons-no modal-exit"></span>
					</div>
				</div>
				<div class="modal-body">

					<div class="row align-center justify-center text-center">
						<span class="dashicons dashicons-arrow-left-alt2 tiny-icon radius-circle border-blue margin-x-2"></span>
						<div>
							<h6 class="padding-y-1"><strong>Foreman</strong></h6>
							<p class="text-blue">Average Scores</p>
						</div>
						<span class="dashicons dashicons-arrow-right-alt2 tiny-icon radius-circle border-blue margin-x-2"></span>
					</div>

					<div class="row justify-center padding-3 text-center">
						<div class="col-3">
							<p class="text-dark-blue padding-2">Score</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>70</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
						<div class="col-3 border-x-grey">
							<p class="text-dark-blue padding-2">% Complete</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>60%</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
						<div class="col-3">
							<p class="text-dark-blue padding-2">Proper Tools</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>90%</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
					</div>

					<p class="text-dark-blue padding-y-2"><strong>Common Feedback:</strong></p>

					<p class="text-light-grey text-center mobile-only">Table is scrollable</p>

					<div class="table overflow-scroll">

					<?php

						generateTable([
							'headers' => [
								'Event',
								'# of Occurences',
								'Experience',
							],
							'rows' => [
								['Failed to cover the system neutralLorem ipsum dolor sit amet, consectetuer', '20', 'Proper Use of a Load Bust Tool'],
								['Feedback item 2', '18', 'Experience 2'],
								['Feedback item 3', '16', 'Experience 3'],
								['Feedback item 4', '14', 'Experience 4'],
								['Feedback item 5', '12', 'Experience 5'],

							]
						], 'left-col-bold header-dark-blue text-center left-col-text-left');

					?>

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
				<div class="modal-footer"></div>
			</div>
		</div>

		<div id="experience-summary-modal" class="modal-container">
			<div class="modal large">
				<div class="modal-header text-center">
					<h3><strong>Experience Summary - Training</strong></h3>
					<div class="modal-options">
						<span class="dashicons dashicons-no modal-exit"></span>
					</div>
				</div>
				<div class="modal-body">

					<div class="row align-center justify-center text-center">
						<span class="dashicons dashicons-arrow-left-alt2 tiny-icon radius-circle border-blue margin-x-2"></span>
						<div>
							<h6 class="padding-y-1"><strong>Foreman</strong></h6>
							<p class="text-blue">Average Scores</p>
						</div>
						<span class="dashicons dashicons-arrow-right-alt2 tiny-icon radius-circle border-blue margin-x-2"></span>
					</div>

					<div class="row justify-center padding-3 text-center">
						<div class="col-3">
							<p class="text-dark-blue padding-2">Score</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>70</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
						<div class="col-3 border-x-grey">
							<p class="text-dark-blue padding-2">% Complete</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>60%</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
						<div class="col-3 border-x-grey">
							<p class="text-dark-blue padding-2">Time</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>1:40</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> -20%</button>
							</div>
						</div>
						<div class="col-3">
							<p class="text-dark-blue padding-2">Proper Tools</p>
							<div class="row align-center justify-center">
								<h2 class="text-blue"><strong>90%</strong></h2>
								<button class="btn-round btn-lightGreen margin-x-1"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button>
							</div>
						</div>
					</div>

					<div class="row space-around">
						<div class="col-5">
							<p class="text-dark-blue padding-y-2"><strong>Common Feedback:</strong></p>

							<p class="text-light-grey text-center mobile-only">Table is scrollable</p>

							<div class="table overflow-scroll">
							<?php

								generateTable([
									'headers' => [
										'Event',
										'# of Occurences',
									],
									'rows' => [
										['Failed to cover the system neutral', '20'],
										['Feedback item 2', '18'],
										['Feedback item 3', '16'],
										['Feedback item 4', '14'],
										['Feedback item 5', '12'],

									]
								], 'left-col-bold header-dark-blue text-center left-col-text-left');
							?>
							</div>
						</div>
						<div class="col-5">
							<p class="text-dark-blue padding-y-2"><strong>Common Areas of Improvement:</strong></p>

							<p class="text-light-grey text-center mobile-only">Table is scrollable</p>

							<div class="table overflow-scroll">
							<?php
								generateTable([
									'headers' => [
										'Area of Improvement',
										'# of Occurences',
									],
									'rows' => [
										['Area of Improvement 1', '20'],
										['Area of Improvement 2', '18'],
										['Area of Improvement 3', '16'],
										['Area of Improvement 4', '14'],
										['Area of Improvement 5', '12'],

									]
								], 'left-col-bold header-dark-blue text-center left-col-text-left');
							?>
							</div>
						</div>
					</div>

					<div class="padding-5">
						<p class="text-dark-blue padding-y-2"><strong>High Scores (Top 10):</strong></p>

						<p class="text-light-grey text-center mobile-only">Table is scrollable</p>

						<div class="table overflow-scroll">
						<?php
							generateTable([
								'headers' => [
									'Name',
									'Score',
									'Department',
									'Customer',
									'Supervisor'
								],
								'rows' => [
									['Name 1', '96', 'Dept 1', 'Cust 1', 'Sup 1'],
									['Name 2', '96', 'Dept 2', 'Cust 2', 'Sup 2'],
									['Name 3', '95', 'Dept 3', 'Cust 3', 'Sup 3'],
									['Name 4', '95', 'Dept 4', 'Cust 4', 'Sup 4'],
									['Name 5', '94', 'Dept 5', 'Cust 5', 'Sup 5'],
									['Name 6', '94', 'Dept 6', 'Cust 6', 'Sup 6'],
									['Name 7', '94', 'Dept 7', 'Cust 7', 'Sup 7'],
									['Name 8', '93', 'Dept 8', 'Cust 8', 'Sup 8'],
									['Name 9', '93', 'Dept 9', 'Cust 9', 'Sup 9'],
									['Name 10', '92', 'Dept 10', 'Cust 10', 'Sup 10'],
								]
							], 'left-col-bold header-dark-blue text-center left-col-text-left');

						?>
						</div>
					</div>

				</div>
				<div class="modal-footer"></div>
			</div>
		</div>

	</div>

</div>

<?php 

get_footer(); 

?>
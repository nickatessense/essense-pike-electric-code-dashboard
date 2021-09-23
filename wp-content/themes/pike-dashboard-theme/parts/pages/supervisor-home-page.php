<?php include_once  get_template_directory() . '/parts/dashboard-filter.php' ?>

<div id="supervisor-home-page">

	<div class="row">  	

		<div id="training-summary" class="col-6 padding-1">
			<h3 class="text-dark-blue margin-y-1"><strong>Training Summary</strong></h3>
			<div class="card">

				<div class="padding-bottom-6 border-bottom-grey">
					<div class="progress-ring margin-x-auto" data-progress='65'>
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

				</div>

				<div class="card-footer">
					<a href="">View Details</a>
				</div>

			</div>
		</div>

		<div id="assessment-summary" class="col-6 padding-1">
			<h3 class="text-dark-blue margin-y-1"><strong>Assessment Summary</strong></h3>
			<div class="card">

				<div class="padding-bottom-6 border-bottom-grey">
					<div class="progress-ring margin-x-auto" data-progress='50'>
						<span class="progress-num">0</span>
						<svg>
						  <circle class="progress-ring-circle"/>
						  <text x="33%" y="70%">Passed</text>
						</svg>
					</div>
					<div class="progress-ring-key text-center">
						<div><span class="bg-skyBlue margin-x-1" style="padding: .5em; display: inline-block;"></span>Passed</div>
						<div><span class="bg-lightergrey margin-x-1" style="padding: .5em; display: inline-block;"></span>Incomplete</div>
					</div>
				</div>

				<div class="text-center padding-6">
	 
					<?php $highcharts->displayBarChart('% Passed', 5); ?>

					<hr class="margin-y-6">

					<div class="table-container overflow-scroll">
						<table>
							<thead>
								<tr class="text-light-grey">
									<th>Experience</th>
									<th>% Passed</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-dark-blue">
									<td class="font-strong">Proper Use of a Loadbust Tool</td>
									<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button></td>
								</tr>
								<tr class="text-dark-blue">
									<td class="font-strong">Proper Spreading of Energized Phases</td>
									<td>20% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
								</tr>
								<tr class="text-dark-blue">
									<td class="font-strong">Crossarm Replacement</td>
									<td>16% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -10%</button></td>
								</tr>
								<tr class="text-dark-blue">
									<td class="font-strong">Jumper Removal for New Pole Installation</td>
									<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
								</tr>
								<tr class="text-dark-blue">
									<td class="font-strong">Terminating an Elbow</td>
									<td>30% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +30%</button></td>
								</tr>
								<tr><td class="show-more">Show More</td></tr>
							</tbody>
						</table>
					</div>

				</div>

				<div class="card-footer">
					<a href="">View Details</a>
				</div>

			</div>
		</div>

	</div>

</div>
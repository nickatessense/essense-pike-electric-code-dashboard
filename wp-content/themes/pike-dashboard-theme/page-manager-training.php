<?php

/*Template Name: Manager Training */ 

get_header();

?>
<div id="page-content" class="margin-8">

	<div id="training">

		<?php include_once 'parts/dashboard-filter.php' ?>

		<div class="row align-center space-between">
			<h3 class="text-dark-blue margin-y-1"><strong>Classification Summary</strong></h3>
			<div class="row">
				<span class="tiny-icon bg-blue text-white dashicons dashicons-menu"></span>
				<img class="tiny-icon border-blue" src="<?php echo get_template_directory_uri() . '/assets/images/line-chart.svg' ?>">
			</div>
		</div>
		<div class="card">
			<table>
				<thead>
					<tr class="text-light-grey">
						<th>Classification</th>
						<th>% Completed</th>
						<th>Average Score</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-dark-blue">
						<td class="font-strong">Foreman</td>
						<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button></td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">A Lineman</td>
						<td>20% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">B Lineman</td>
						<td>16% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -10%</button></td>
						<td>30% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">C Lineman</td>
						<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
						<td>50% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">Groundman</td>
						<td>30% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +30%</button></td>
						<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +30%</button></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="row align-center space-between margin-top-5">
			<h3 class="text-dark-blue margin-y-1"><strong>Experience Summary</strong></h3>
			<div class="row">
				<span class="tiny-icon bg-blue text-white dashicons dashicons-menu"></span>
				<img class="tiny-icon border-blue" src="<?php echo get_template_directory_uri() . '/assets/images/line-chart.svg' ?>">
			</div>
		</div>
		<div class="card">
			<table>
				<thead>
					<tr class="text-light-grey">
						<th>Experience</th>
						<th>% Completed</th>
						<th>Average Score</th>
						<th>Average Time</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-dark-blue">
						<td class="font-strong">Proper Use of a Loadbust Tool</td>
						<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button></td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20%</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">Proper Spreading of Energized Phases</td>
						<td>20% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
						<td>30% <button class="btn-round btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
						<td>6:00 <button class="btn-round btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-up-alt"></span> +0:10</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">Crossarm Replacement</td>
						<td>16% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -10%</button></td>
						<td>30% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -10%</button></td>
						<td>3:30 <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-up-alt"></span> +0:30</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">Jumper Removal for New Pole Installation</td>
						<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
						<td>50% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +10%</button></td>
						<td>5:00 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="font-strong">Termination of Underground Transformers</td>
						<td>30% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +30%</button></td>
						<td>60% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +30%</button></td>
						<td>2:30 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:10</button></td>
					</tr>
					<tr><td class="show-more">Show More</td></tr>
				</tbody>
			</table>
		</div>

	</div>

</div>


<div class="modal-container">
	<div class="modal large">
		<div class="modal-header text-center">
			<h3><strong>Classification Summary - Training</strong></h3>
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

			<p class="padding-y-2"><strong>Common Feedback:</strong></p>
			<table class="text-center margin-bottom-4">
				<thead>
					<tr class="bg-darkBlue text-white">
						<th class="text-left" >Event</th>
						<th># of Occurences</th>
						<th>Experience</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Failed to cover the system neutralLorem ipsum dolor sit amet, consectetuer</td>
						<td>20</td>
						<td>Proper Use of a Load Bust Tool</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Feedback item 2</td>
						<td>18</td>
						<td>Experience 2</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Feedback item 3</td>
						<td>16</td>
						<td>Experience 3</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Feedback item 4</td>
						<td>14</td>
						<td>Experience 4</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Feedback item 5</td>
						<td>12</td>
						<td>Experience 5</td>
					</tr>
					<tr><td class="show-more">Show More</td></tr>
				</tbody>
			</table>

			<p class="padding-y-2"><strong>Common Areas of Improvement:</strong></p>
			<table class="text-center margin-bottom-4">
				<thead>
					<tr class="bg-darkBlue text-white">
						<th class="text-left" >Area of Improvement</th>
						<th># of Occurences</th>
						<th>Experience</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Area of Improvement 1</td>
						<td>20</td>
						<td>Load Bust</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Area of Improvement 2</td>
						<td>18</td>
						<td>Experience 2</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Area of Improvement 3</td>
						<td>16</td>
						<td>Experience 3</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Area of Improvement 4</td>
						<td>14</td>
						<td>Experience 4</td>
					</tr>
					<tr class="text-dark-blue">
						<td class="col-4 text-left">Area of Improvement 5</td>
						<td>12</td>
						<td>Experience 5</td>
					</tr>
					<tr><td class="show-more">Show More</td></tr>
				</tbody>
			</table>

			<p class="padding-y-2"><strong>Experience Summary</strong></p>
			<table class="text-center margin-bottom-4">
				<thead>
					<tr class="bg-darkBlue text-white">
						<th class="text-left" >Experience</th>
						<th>Average Score</th>
						<th>Average Time</th>
						<th>% Complete</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>10% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>10% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>10% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>10% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>10% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>10% <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					<tr class="text-dark-blue">
						<td class="text-left">Proper Use of a Loadbust Tool</td>
						<td>70% <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-up-alt"></span> +20</button></td>
						<td>1:40 <button class="btn-round btn-lightYellow"><span class="dashicons dashicons-arrow-down-alt"></span> -0:20</button></td>
						<td>1:40 <button class="btn-round btn-lightGreen"><span class="dashicons dashicons-arrow-down-alt"></span> +10%</button></td>
					</tr>
					
				</tbody>
			</table>

		</div>
		<div class="modal-footer"></div>
	</div>
</div>

<?php get_footer(); ?>
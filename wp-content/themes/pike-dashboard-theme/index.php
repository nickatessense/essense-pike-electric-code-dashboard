<?php get_header(); ?>

<div id="page-content">

	<?php

		if( in_array('executive', $current_user->roles) || in_array('administrator', $current_user->roles) ){
			include_once( get_template_directory() . '/parts/pages/executive-home-page.php' );
		}else if (in_array('supervisor', $current_user->roles)) {
			include_once( get_template_directory() . '/parts/pages/supervisor-home-page.php' );
		}else if (in_array('worker', $current_user->roles)) {
			include_once( get_template_directory() . '/parts/pages/workers-home-page.php' );
		}

	?>

</div>
<?php get_footer(); ?>
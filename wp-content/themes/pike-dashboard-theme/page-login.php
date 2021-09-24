<?php get_header(); ?>

<div id="login">
	<div class="card">
		<img class="logo" src="<?php echo get_template_directory_uri() . '/assets/images/pike-logo.svg' ?>">

		<?php wp_login_form(); ?>

	</div>

</div>

<?php get_footer(); ?>
<?php
	/* Template Name: Featured */
	$context = Timber::get_context();
	$context['menu'] = new \TimberMenu();
	$context['post'] = new Timberpost();

	$context['posts'] = Timber::get_posts(array(
		'post_type' => 'feature'
	));

	Timber::render('feature.twig', $context);
?>

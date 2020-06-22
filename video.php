<?php
	/* Template name: Video */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('video.twig', $context);
?>

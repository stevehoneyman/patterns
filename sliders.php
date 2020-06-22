<?php
	/* Template name: Sliders */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('sliders.twig', $context);
?>

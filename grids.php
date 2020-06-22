<?php
	/* Template name: Grids */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('grids.twig', $context);
?>

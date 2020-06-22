<?php
	/* Template name: Accordians */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('accordians.twig', $context);
?>

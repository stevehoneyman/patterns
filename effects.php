<?php
	/* Template name: Effects */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('effects.twig', $context);
?>

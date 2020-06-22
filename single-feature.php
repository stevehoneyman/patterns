<?php
//	$context = Timber::get_context();
	$context['menu'] = new \TimberMenu();
	$context['post'] = new Timberpost();
	Timber::render('single-feature.twig', $context);
?>

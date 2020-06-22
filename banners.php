<?php
	/* Template name: Banners */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('banners.twig', $context);
?>

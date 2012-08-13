<?php

function dukelib_alpha_preprocess_block(&$vars) {
	if ($vars['block']->title == 'News, Events & Exhibits') {
		$vars['content_attributes_array']['class'][] = 'myCarouselNews';

		drupal_add_js('http://library.duke.edu/javascript/common/jcarousellite_1_0_1.js', 'external');
		drupal_add_js('http://library.duke.edu/javascript/common/jquery.easing.1.3.min.js', 'external');
		drupal_add_js('http://library.duke.edu/javascript/common/jquery.easing.compatibility.min.js', 'external');
		drupal_add_css(drupal_get_path('theme', 'dukelib') . '/css/carousel.css');
	}
	/*
	if ($vars['block']->module == 'aggregator' && $vars['block']->delta == 'feed-1') {
        $vars['classes_array'][] = 'myCarouselNews';
    	// add CSS for carousel
		// add JS for carousel
	}
	*/
    if ($vars['block']->module == 'hours') {
        drupal_add_css(drupal_get_path('module', 'hours') . '/css/hours.css');
    }
}

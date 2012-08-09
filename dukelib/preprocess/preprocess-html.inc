<?php

function dukelib_alpha_preprocess_html(&$vars) {
    drupal_add_css('http://library.duke.edu/css/blue-note/css_classes.css',
        array('type' => 'external', 'media' => 'screen, print', 'weight' => 1));
    //drupal_add_css('http://library.duke.edu/css/blue-note/page-specific/home-page/homepage2011.css',
    //	array('type' => 'external', 'media' => 'screen, print', 'weight' => 1));
    drupal_add_css('http://library.duke.edu/css/blue-note/js_hide.css',
    	array('type' => 'external', 'media' => 'screen, print', 'weight' => 10));
    drupal_add_css(drupal_get_path('theme','dukelib') . '/css/overrides.css');
}

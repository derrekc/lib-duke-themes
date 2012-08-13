<?php

function dukelib_alpha_preprocess_html(&$vars) {
    drupal_add_js(drupal_get_path('theme', 'dukelib') . '/js/jquery.megamenu.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'dukelib') . '/js/init.js', 'file');
    drupal_add_css('http://library.duke.edu/css/blue-note/css_classes.css',
        array('type' => 'external', 'media' => 'screen, print', 'weight' => 1));
    //drupal_add_css('http://library.duke.edu/css/blue-note/page-specific/home-page/homepage2011.css',
    //	array('type' => 'external', 'media' => 'screen, print', 'weight' => 1));
    drupal_add_css('http://library.duke.edu/css/blue-note/js_hide.css',
    	array('type' => 'external', 'media' => 'screen, print', 'weight' => 10));
    drupal_add_css(drupal_get_path('theme', 'dukelib') . '/css/jquery.megamenu.css');
    //drupal_add_css(drupal_get_path('theme','dukelib') . '/css/overrides.css');
    
    drupal_add_js("jQuery(document).ready(function() { "
    	. "jQuery('.megamenu').megamenu("
    	. "{'show_method':'fadeIn','hide_method':'fadeOut','enable_js_shadow':false}" 
    	. ")})", 'inline');
}

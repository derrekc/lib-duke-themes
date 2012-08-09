<?php

function dukelib_alpha_preprocess_block(&$vars) {
    if ($vars['block']->module == 'hours') {
        drupal_add_css(drupal_get_path('module', 'hours') . '/css/hours.css');
    }
}

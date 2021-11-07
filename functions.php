<?php
/**
 * How To disable the wp json rest api
 */

 // Copy and Paste this code in functions.php 

 /* ---- Start - Disable WP JSON WordPress REST API ---- */
 
add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');

/* ---- END - Disable WP JSON WordPress REST API ---- */

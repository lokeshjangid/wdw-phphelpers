<?php 
/* 
Plugin Name: WDW php helpers
Description: Common php helper functions, to be used across multiple projects
Version: 0.1
Revision Date: 15 07, 2013
Requires at least: 3.0
Tested up to: 3.5.2
Author: ckchaudhary, emediaidentity
Author URI: http://webdeveloperswall.com/
*/

if( !function_exists('add_http') ):
/* helper function to ensure we have an http:// in the given url, 
 * if not found, the function will add it 
 *
 * @param string $url url to process
 * @return string new url
*/
function add_http($url){
    $found = false;
    
    $pos = strpos($url, 'http://');
    if ($pos !== false) {
        if($pos == 0){
            $found = true;
        }
    }
    $pos = strpos($url, 'https://');
    if ($pos !== false) {
        if($pos == 0){
            $found = true;
        }
    }
    
    if( !$found ){
        $url = 'http://'.$url;  
    }

    return $url;
}
endif;

if( !function_exists('startsWith') ):
function startsWith($haystack, $needle){
    return !strncmp($haystack, $needle, strlen($needle));
}
endif;

if( !function_exists('endsWith') ):
function endsWith($haystack, $needle){
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}
endif;

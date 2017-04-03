<?php
/*
Plugin Name:Hooks
Description:Learning use of hooks in wordpress
Author:Muhammad Ijaz Anjum
*/
//one approach to call a function

// add_filter('the_content',function ($content){
// 	return $content."some Returned document texts";
// });
 
// add_filter('the_content','content_modification_fun');
//  function content_modification_fun($content){
	
// 	return $content."some additional text";
// }
//
// add_filter('the_content',ucwords);
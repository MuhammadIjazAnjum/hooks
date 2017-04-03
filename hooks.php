<?php
/*
Plugin Name:Hooks
Description:Learning use of hooks in wordpress
Author:Muhammad Ijaz Anjum
*/
//one approach to call a function

// add_filter('the_content','content_modification_fun');
//  function content_modification_fun($content){
	
// 	return $content."some additional text";
// }
//
// add_filter('the_content',ucwords);
add_filter('the_content',function ($content){
	//Displays the numeric ID of the current post. This tag must be within The Loop. Note: This function displays the ID of the post, to return the ID use get_the_ID().
	$postid=get_the_ID();
	$terms=get_the_terms($postid,'catigory');
	print_r($terms);
	return $content.$postid;
});
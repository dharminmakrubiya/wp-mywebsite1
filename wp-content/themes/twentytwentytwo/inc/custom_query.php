<?php

function HelloWorldShortcode() {
	return '<p>Hello World!</p>';
}
add_shortcode('helloworld', 'HelloWorldShortcode');

function HelloWorldShortcode1() {
 
	// The Query
	$args = array('post_type' => 'post','post_status' => 'publish');
	$the_query = new WP_Query($args);
	 
	// The Loop
	if ( $the_query->have_posts() ) {
		$name;
		$name .= '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$name .='<li>' . get_the_title() . '</li>';
		}
		$name .='</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	return $name ;
	
	}
	add_shortcode('custom', 'HelloWorldShortcode1');
	
?>
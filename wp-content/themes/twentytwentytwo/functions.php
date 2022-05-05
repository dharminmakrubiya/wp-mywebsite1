<?php

/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

                                                                                                                                                                                                                                      


add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'twentytwentytwo-style', twentytwentytwo_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', twentytwentytwo_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'twentytwentytwo_editor_styles' );


if ( ! function_exists( 'twentytwentytwo_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function twentytwentytwo_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'twentytwentytwo_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

 add_action( 'wp_head', 'twentytwentytwo_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

require get_template_directory() . '/inc/short.php';

//require get_template_directory() . '/inc/custom_query.php';



//Create a Wordpress Page Using Qurey

/*add_action('init', 'njengah_create_wordpress_page_programmatically'); 
 
function njengah_create_wordpress_page_programmatically(){
 
    $wordpress_page = array(
      'post_title'    => 'First Page',
      'post_content'  => 'Page Content',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type' => 'page'
       );
     wp_insert_post( $wordpress_page );  
      
}

function second() {
	$wordpress_page_1 = array(
		'post_title' 	=> 'Second Page',
		'post_content' 	=> 'Page Content',
		'post_status'	=> 'publish',
		'post_author'	=> 1,
	);
	wp_insert_post($wordpress_page_1);
}

function GenerateSitemap($params = array()) {

	// default parameters
	extract(shortcode_atts(array(
		'title' => 'Site map',
		'id' => 'sitemap',
	    'depth' => 2
	), $params));

	// create sitemap 
	$sitemap = wp_list_pages("title_li=&depth=$depth&sort_column=menu_order&echo=0");
	if ($sitemap != '') {
		$sitemap =
			($title == '' ? '' : "<h2>$title</h2>") .
			'<ul' . ($id == '' ? '' : " id="$id"") . ">$sitemap</ul>";
	}

	return $sitemap;
}
add_shortcode('sitemap', 'GenerateSitemap'); */



//Create a post type.
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'Adverts',
        array(
            'labels' => array(
                'name' => __( 'Adverts' ),
                'singular_name' => __( 'Advert'),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add a New Advert' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Advert' ),
                'new_item' => __( 'New Advert' ),
                'view' => __( 'View' ),
                'view_item' => __( 'View Advert' ),
                'search_items' => __( 'Search Adverts' ),
                'not_found' => __( 'No Adverts found' ),
                'not_found_in_trash' => __( 'No Adverts found in Trash' ),
            ),
            'supports' => array(
                'title',
                'thumbnail',
            ),
            'has_archive' => true,
            'menu_position' => 10,
            'public' => true,
            'rewrite' => array( 
                'slug' => 'adverts' 
            ),
            'taxonomies' => array('advert_tag')
        )
    );
}



//Create a Custom Taxonomies
add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
 
 
function create_subjects_hierarchical_taxonomy() {

 
  $labels = array(
    'name' => _x( 'Subjects', 'taxonomy general name' ),
    'singular_name' => _x( 'Subject', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Subjects' ),
    'all_items' => __( 'All Subjects' ),
    'parent_item' => __( 'Parent Subject' ),
    'parent_item_colon' => __( 'Parent Subject:' ),
    'edit_item' => __( 'Edit Subject' ), 
    'update_item' => __( 'Update Subject' ),
    'add_new_item' => __( 'Add New Subject' ),
    'new_item_name' => __( 'New Subject Name' ),
    'menu_name' => __( 'Subjects' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('subjects',array('books'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'subject' ),
  ));
 
}

//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
 
function create_topics_nonhierarchical_taxonomy() {

  
  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'popular_items' => __( 'Popular Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'separate_items_with_commas' => __( 'Separate topics with commas' ),
    'add_or_remove_items' => __( 'Add or remove topics' ),
    'choose_from_most_used' => __( 'Choose from the most used topics' ),
    'menu_name' => __( 'Topics' ),
  ); 
  
  register_taxonomy('topics','books',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
}



//Pagination Query

// Numbered Pagination
// if ( !function_exists( 'wpex_pagination' ) ) {
	
// 	function wpex_pagination() {
		
// 		$prev_arrow = is_rtl() ? '→' : '←';
// 		$next_arrow = is_rtl() ? '←' : '→';
		
// 		global $wp_query;
// 		$total = $wp_query->max_num_pages;
// 		$big = 999999999; // need an unlikely integer
// 		if( $total > 1 )  {
// 			 if( !$current_page = get_query_var('paged') )
// 				 $current_page = 1;
// 			 if( get_option('permalink_structure') ) {
// 				 $format = 'page/%#%/';
// 			 } else {
// 				 $format = '&paged=%#%';
// 			 }
// 			echo paginate_links(array(
// 				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
// 				'format'		=> $format,
// 				'current'		=> max( 1, get_query_var('paged') ),
// 				'total' 		=> $total,
// 				'mid_size'		=> 3,
// 				'type' 			=> 'list',
// 				'prev_text'		=> $prev_arrow,
// 				'next_text'		=> $next_arrow,
// 			 ) );
// 		}
// 	}
	
// }
if( ! function_exists( 'misha_paginate_links' ) ) {
	function misha_paginate_links( $query ) {  

		$search_page_url = 'YOUR_SEARH_PAGE_URL'; // please fill this parameter
		

		$args = array(
			'total' => $query->max_num_pages, // total amount of pages
			'current' => ( ( $query->query_vars[ 'paged' ] ) ? $query->query_vars[ 'paged' ] : 1 ), // current page number
			'show_all' => false, // set to true if you want to show all pages at once
			'mid_size' => 2, // how much page numbers to show on the each side of the current page
			'end_size' => 2, // how much page numbers to show at the beginning and at the end of the list
			'prev_next' => true, // if you set this to false, the previous and the next post links will be removed
			'prev_text' => '&laquo;', // «
			'next_text' => '&raquo;', // »
			'base' => $search_page_url . '%_%',
			'format' => '?current_page=%#%'
		);
	 
		if( $args[ 'total' ] <= 1 ) { // do not return anything if there are not enough posts
			return;
		}
		
		return '<div class="navigation">
			<span class="pages">Page ' . $args[ 'current' ] . ' of ' . $args[ 'total' ] . '</span>'
			. paginate_links( $args ) .  
			'</div>';   
	 

	 
	}
}






























<?php 
	function resources() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('jquery.sidr.light', get_stylesheet_uri());
		wp_register_style('sidr.light', get_template_directory_uri() . '/jquery.sidr.dark.css', array(), '1.0', 'all');
   		wp_enqueue_style('sidr.light'); // Enqueue it!
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
		wp_enqueue_script('jquery');
		wp_register_script( 'sidr', get_template_directory_uri() . '/js/jquery.sidr.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script('sidr');
	}

	// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

function getawayThemeSetup() {
	// Add featured image support
	add_theme_support('post-thumbnails', array('post', 'guide', 'tour'));
	add_image_size('small-thumbnail', 320, 150, true);
	add_image_size('guide-thumbnail', 590, 590, true);
}




function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a>';
}
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	add_filter('body_class', 'add_slug_to_body_class');
	add_action('wp_enqueue_scripts', 'resources');
	add_action('after_setup_theme', 'getawayThemeSetup');

// Navigation Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'day_tour_bike' => __('Bike Day Tours Menu'),
		'day_tour_hike' => __('Hike Day Tours Menu'),
		'day_tour_kayak' => __('Kayak Day Tours Menu'),
		'day_tour_van' => __('Van Day Tours Menu'),
		'multi_day_tour' => __('Multi-Day Tours Menu'),
		'group_tour' => __('Group Tours Menu'),
		'about' => __('About Menu')
		))
 ?>
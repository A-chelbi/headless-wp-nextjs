<?php

/**
 * ---------------------------------
 * Register and Enqueue Styles.
 * ---------------------------------
 */
function aleia_register_asset()
{
    $theme_version = wp_get_theme()->get('Version');

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),$theme_version,true);
    wp_enqueue_script('popper');

    wp_register_script('jquey', 'https://code.jquery.com/jquery-3.5.1.slim.min.js',$theme_version,true);
    wp_enqueue_script('jquery');

    wp_register_style('aleia-style', get_template_directory_uri().'/dist/index.css',$theme_version,false);
    wp_enqueue_style('aleia-style');

    wp_register_script('aleia-script', get_template_directory_uri().'/dist/index.js',$theme_version,true);
    wp_enqueue_script('aleia-script');

}

add_action('wp_enqueue_scripts', 'aleia_register_asset');

/**
 * ---------------------------------
 * Register Menus.
 * ---------------------------------
 */
function navigation_menus(){

    $locations = array(
        'primary-menu' => __('Primary menu', 'aleia'),
        'footer-menu' => __('Footer menu', 'aleia')
	);

    register_nav_menus( $locations );
}

add_action('init', 'navigation_menus');

function aleia_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}
add_filter( 'nav_menu_css_class', 'aleia_menu_class' );


function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


/**
 * ---------------------------------
 * Pagination
 * ---------------------------------
 */
function aleia_pagination(){
    echo '<div class="pagination_bloc">';
    echo '<ul class="pagination_items">';
    $pages =  paginate_links([
            'type' => 'array',
            'prev_text' => __(''),
            'next_text' => __('')
        ]); 

    if($pages){
        foreach($pages as $page){
            $active= strpos($page, 'current') !== false;
            $class = 'item';
    
            if($active){
                $class .= ' active';
            }
            echo '<li class="'. $class .'">';
            echo str_replace('page-numbers', 'link', $page );
            echo '</li>';
        } 
    }    
   
    echo '</ul>';
    echo '</div>';
   
}

/**
 * ---------------------------------
 * Excerpt length
 * ---------------------------------
 */

function aleia_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'aleia_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function aleia_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'aleia_excerpt_more' );
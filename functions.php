<?php 
add_theme_support('automatic-feed-links');
add_theme_support( 'title-tag');
add_theme_support('post-thumbnails');
add_image_size('list_articles_thumbs');


register_nav_menus(array(
    'menu_principal'=>'Menú principal de cabecera',
    'menu_footer'=>'Menú de pié de página',
));

/*
* Add custom logo support
*/
add_theme_support( 'custom-logo' );

//Widgets

function cover_widget() {

	register_sidebar( array(
		'name'          => 'Cover Widget',
		'id'            => 'id-nueva-zona',
		'description'   => 'Add content you need to display on cover homepage',
		'before_widget' => '<div id="cover-widget" class="cover-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="cover-widget-title">',
		'after_title'   => '</h1>',
	) );	
}

add_action( 'widgets_init', 'cover_widget' );

function plan() {

	register_sidebar( array(
		'name'          => 'plan',
		'description'   => 'Add plan widget here',
		'before_widget' => '<div id="plan" class="plan">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'plan' );

//FOOTER
function footer_block1() {

	register_sidebar( array(
		'name'          => 'footer block1',
		'description'   => 'Add footer_block1 widget here',
		'before_widget' => '<div id="footer-block1" class="footer-block1">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'footer_block1' );

//
function footer_block2() {

	register_sidebar( array(
		'name'          => 'footer block2',
		'description'   => 'Add footer_block2 widget here',
		'before_widget' => '<div id="footer-block2" class="footer-block2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'footer_block2' );

//
function footer_block3() {

	register_sidebar( array(
		'name'          => 'footer block3',
		'description'   => 'Add footer_block3 widget here',
		'before_widget' => '<div id="footer-block3" class="footer-block3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );	
}
//
add_action( 'widgets_init', 'footer_block3' );


//cambia la cantidad de texto del excerpt de 50 caracteres a 15
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    
    //esto permite cambiar los [...] que trae [por defecto al final del excerpt]
    function wpdocs_excerpt_more( $more ) {
    return ' ...';
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// cierra para excerpt


//FUNCION PARA LA PAGINACION DE archive.php
/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 *
 * @return string
 * Accepts a WP_Query instance to build pagination (for custom wp_query()), 
 * or nothing to use the current global $wp_query (eg: taxonomy term page)
 * - Tested on WP 4.9.5
 * - Tested with Bootstrap 4.1
 * - Tested on Sage 9
 *
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
 * or with custom WP_Query():
 *     <?php 
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ...
 *       echo bootstrap_pagination($query);
 *     ?>
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Recientes' ),
			'next_text'    => __( 'Anteriores »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';
		foreach ($pages as $page) {
                        $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                }
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}
//ES RECOMENDABLE LINKEAR SCRIPTS EN ESTE ARCHIVO
function yutaru_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css', array(), '1.1', 'all');
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

/////////////////////////////////////////  
 

}
add_action( 'wp_enqueue_scripts', 'yutaru_theme_scripts' );


 ?>
<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Durg
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if ( durg_opt( 'durg_footer_widget_toggle' ) == 1 ) {

$footer_logo = get_theme_mod( 'footer_logo' );
$footer_logo_src = wp_get_attachment_image_src( $footer_logo, 'durg_footer_logo_147x48' );

	echo '<div class="container"><div class="row justify-content-between">';

	// Footer widget 1
	if( is_active_sidebar( 'footer-1' ) ){
		echo '<div class="col-sm-6 col-md-3 col-xl-4">';
			if( !empty( $footer_logo ) ) {
				echo '<a href="'. esc_url( home_url('/') ) .'" class="durg-footer-logo"> <img src="'. $footer_logo_src[0] .'" alt="footer logo"> </a>';    
			}
			dynamic_sidebar( 'footer-1' );
		echo '</div>';
	}

	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}

	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}

	echo '</div></div>';

}

?>
<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Durg
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Header background image oparation

$class     = '';
$headerimg = '';
if( get_header_image() ){
    $headerimg = get_header_image();
    $class = ' header-image';
}
?>

<section class="hero-banner<?php echo esc_attr( $class ); ?>" <?php echo durg_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="breadcrumb_tittle">
                <?php if ( is_singular( 'project' ) ) { ?>
                    <p class="durg_project_date">
                        <?php echo get_the_time( 'F d, Y' ) . '<br>';?>
                    </p>
                    <?php
                }?>
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'durg') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'durg') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'durg' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'durg' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'durg' );

                    }
                    ?>
                </h2>
                <?php
                    if ( ( ! is_singular( 'project' ) ) && function_exists( 'durg_breadcrumbs' ) ) {
                        durg_breadcrumbs();
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'durg_preloader', 'durg_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'durg_header', 'durg_header_cb', 10 );

	/**
	 * Hook for before footer area
	 *
	 */
	add_action( 'durg_footer', 'durg_before_footer_area', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'durg_footer', 'durg_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'durg_wrp_start', 'durg_wrp_start_cb', 10 );
	add_action( 'durg_wrp_end', 'durg_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'durg_blog_col_start', 'durg_blog_col_start_cb', 10 );
	add_action( 'durg_blog_col_end', 'durg_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'durg_blog_posts_thumb', 'durg_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'durg_blog_details_wrap_start', 'durg_blog_details_wrap_start_cb', 10 );
	add_action( 'durg_blog_details_wrap_end', 'durg_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'durg_blog_posts_title', 'durg_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'durg_blog_posts_meta', 'durg_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'durg_blog_posts_excerpt', 'durg_blog_posts_excerpt_cb', 10 );
	// add_action( 'durg_blog_posts_excerpt', 'durg_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'durg_blog_posts_info_link', 'durg_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'durg_blog_posts_content', 'durg_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'durg_blog_posts_share', 'durg_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'durg_blog_sidebar', 'durg_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'durg_blog_single_meta', 'durg_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'durg_page_content', 'durg_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'durg_fof', 'durg_fof_cb', 10 );

	

?>
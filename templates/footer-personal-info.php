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

?>

    <?php 
        $durg_personal_info     = !empty( durg_opt( 'durg_personal_info_section' ) ) ? durg_opt( 'durg_personal_info_section' ) : '';
        $durg_pinfo_label       = !empty( durg_opt( 'durg_footer_personal_info_title' ) ) ? durg_opt( 'durg_footer_personal_info_title' ) : '';
        $durg_pinfo_email       = !empty( durg_opt( 'durg_footer_personal_info_email' ) ) ? durg_opt( 'durg_footer_personal_info_email' ) : '';
        $durg_pinfo_btn_label   = !empty( durg_opt( 'durg_footer_personal_info_button_label' ) ) ? durg_opt( 'durg_footer_personal_info_button_label' ) : '';
        $durg_pinfo_btn_url     = !empty( durg_opt( 'durg_footer_personal_info_button_url' ) ) ? durg_opt( 'durg_footer_personal_info_button_url' ) : '';
    
    if( $durg_personal_info ) {
        ?>
		<div class="col-lg-6">
			<div class="footer_text">
				<span><?php echo esc_html( $durg_pinfo_label )?></span>
				<h2><?php echo esc_html( $durg_pinfo_email )?></h2>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="footer_btn">
				<a href="<?php echo esc_url( $durg_pinfo_btn_url )?>" class="btn_1"><?php echo esc_html( $durg_pinfo_btn_label )?></a>
			</div>
		</div>
		<?php 
	} ?>
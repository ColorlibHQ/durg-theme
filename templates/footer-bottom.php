	<?php 
		// Copyright text
		$url = 'https://colorlib.com/';
		$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'durg' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
		$copyRight = !empty( durg_opt( 'durg_footer_copyright_text' ) ) ? durg_opt( 'durg_footer_copyright_text' ) : $copyText;
	?>

	
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="copyright_part_text text-center">
					<p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
				</div>
			</div>
		</div>
	</div>
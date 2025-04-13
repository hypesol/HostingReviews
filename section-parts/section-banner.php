<style>


</style>

	<section class="hero-slideshow-wrapper <?php echo ( $fullscreen == 1 ) ? 'hero-slideshow-fullscreen' : 'hero-slideshow-normal'; ?>">



		<?php
		$layout = get_theme_mod( 'onepress_hero_layout', 1 );

				$hcl1_largetext  = get_theme_mod( 'onepress_hcl1_largetext', wp_kses_post( 'We help <span class="js-rotating">Start | Grow | Manage</span> your online business', 'onepress' ) );
				$hcl1_smalltext  = get_theme_mod( 'onepress_hcl1_smalltext', wp_kses_post( 'Compare the leading <strong>web hosting companies 2025</strong> that offer fast and secure services, uptime guarantee,  excellent pricing, and easy migration features.', 'onepress' ) );
				

				?>
				<div class="container"<?php echo esc_attr($hero_content_style); ?>>
					<div class="hero__content hero-content-style<?php echo esc_attr( $layout ); ?>">
						<?php if ( $hcl1_largetext != '' ) {
							echo '<h2 class="hero-large-text">' . wp_kses_post( $hcl1_largetext ) . '</h2>';} ?>
						<?php if ( $hcl1_smalltext != '' ) {
							echo '<div class="hero-small-text">' . apply_filters( 'onepress_the_content', wp_kses_post( $hcl1_smalltext ) ) . '</div>';} ?>
							</div>
				</div>
				<?php
		echo 'Last Updated: ' . get_last_site_modified_date();


		?>
	</section>


<?php if ( ashe_options('header_image_label') === true ) : ?>

	<div class="entry-header">
		<div class="cv-outer">
		<div class="cv-inner">
			<div class="header-logo">

				<?php if ( has_custom_logo() ) :

				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$custom_logo 	= wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );

				?>

					<a aria-label="Chic Dressing" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" class="logo-img">
						<?php esc_attr( bloginfo('name') ); ?>
					</a>

				<?php // SEO Hidden Title

				if ( true === ashe_options( 'title_tagline_seo_title' ) ) {
					echo ( is_home() || is_front_page() || is_category() || is_search() ) ? '<h2 style="display: none;">'.  get_bloginfo( 'title' ) .'</h2>' : '';
				}

				?>

				<?php else : ?>

					<?php if ( is_home() || is_front_page() ) : ?>
					<h2>
						<a aria-label="Chic Dressing" href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-a"><?php echo bloginfo( 'title' ); ?></a>
					</h2>
					<?php else : ?>
					<a aria-label="Chic Dressing" href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-a"><?php echo bloginfo( 'title' ); ?></a>
					<?php endif; ?>

				<?php endif; ?>

				<p class="site-description"><?php echo bloginfo( 'description' ); ?></p>

			</div>
		</div>
		</div>
	</div>

<?php endif; ?>

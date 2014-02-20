<?php
/**
 * The front page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();

global $paged;
$bavotasan_theme_options = bavotasan_theme_options();

if ( 2 > $paged ) {
	// Display jumbo headline is the option is set
	if ( ! empty( $bavotasan_theme_options['jumbo_headline_title'] ) ) {
	?>
	<div class="home-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-jumbotron jumbotron">
						<h1><?php echo apply_filters( 'the_title', html_entity_decode( $bavotasan_theme_options['jumbo_headline_title'] ) ); ?></h1>
						<p class="lead"><?php echo wp_kses_post( html_entity_decode( $bavotasan_theme_options['jumbo_headline_text'] ) ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}

	// Display home page top widgetized area
	if ( is_active_sidebar( 'home-page-top-area' ) ) {
		?>
		<div id="home-page-widgets">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'home-page-top-area' ); ?>
				</div>
			</div>
		</div>
		<?php
	}
}
?>
	<div class="container from-the-blog">
		<div class="row">
			<div id="primary" <?php if ( 2 > $paged ) { ?>class="col-md-12 hfeed"<?php } else { bavotasan_primary_attr(); }; ?>>
				<?php if ( 2 > $paged ) { ?>
					<div class="page-header clearfix"><h1 class="pull-left"><?php _e( 'From the Blog', 'arcade' ); ?></h1><?php if ( 2 > $paged ) bavotasan_pagination(); ?></div>
				<?php }
				if ( have_posts() ) {
					if ( 'page' != get_option('show_on_front') && 2 > $paged )
						echo '<div class="row">';

					while ( have_posts() ) : the_post();
						if ( 'page' == get_option('show_on_front') ) { ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( ); ?>>
							    <div class="entry-content description clearfix">
								    <?php the_content( __( 'Read more', 'arcade' ) ); ?>
							    </div><!-- .entry-content -->

							    <?php get_template_part( 'content', 'footer' ); ?>
							</article><!-- #post-<?php the_ID(); ?> -->
							<?php
						} else {
							if ( 2 > $paged ) {
								global $wp_query;
								$home_page_post = false;
							    $bavotasan_custom_excerpt_length = 20;
								if ( 1 > $wp_query->current_post ) {
									$home_page_post = true;
									echo '<div class="col-md-6">';
									$bavotasan_custom_excerpt_length = 50;
								}
								if ( 1 == $wp_query->current_post )
									echo '<div class="col-md-6">';
							}

							get_template_part( 'content', get_post_format() );

							if (2 > $paged ) {
								if ( 1 > $wp_query->current_post )
									echo '</div>';

								if ( 3 == $wp_query->current_post )
									echo '</div>';
							}
						}
					endwhile;

					if ( 'page' != get_option('show_on_front') && 2 > $paged )
						echo '</div>';

					if ( 1 < $paged )
						bavotasan_pagination();
				} else {
					if ( current_user_can( 'edit_posts' ) ) {
						// Show a different message to a logged-in user who can add posts.
						?>
						<article id="post-0" class="post no-results not-found">
							<h1 class="entry-title"><?php _e( 'No posts to display', 'arcade' ); ?></h1>

							<div class="entry-content description clearfix">
								<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'arcade' ), admin_url( 'post-new.php' ) ); ?></p>
							</div><!-- .entry-content -->
						</article>
						<?php
					} else {
						get_template_part( 'content', 'none' );
					} // end current_user_can() check
				}
				?>
			</div><!-- #primary.c8 -->
			<?php if ( 1 < $paged )
				get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
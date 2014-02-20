<?php
/**
 * The default template for displaying content
 *
 * Used for both single and front-page/index/archive/search.
 *
 * @since 1.0.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
		<?php
		if( ! is_single() && has_post_thumbnail() ) {
			global $home_page_post, $paged;
			$class = ( $home_page_post ) ? 'first-post' : 'alignleft';
			$size = ( $home_page_post ) ? 'half' : 'square100';
			$size = ( ! is_front_page() || 1 < $paged ) ? 'thumbnail' : $size;
			?>
			<a href="<?php the_permalink(); ?>" class="image-anchor">
				<?php the_post_thumbnail( $size, array( 'class' => $class ) ); ?>
			</a>
			<?php
		}

	    get_template_part( 'content', 'header' ); ?>

	    <div class="entry-content description clearfix">
		    <?php
			if ( is_singular() )
			    the_content( __( 'Read more', 'arcade') );
			else
				the_excerpt();
			?>
	    </div><!-- .entry-content -->
	    <?php if ( ! is_front_page() )
	    	get_template_part( 'content', 'footer' ); ?>
	</article><!-- #post-<?php the_ID(); ?> -->
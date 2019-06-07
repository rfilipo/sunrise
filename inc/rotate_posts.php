<?php
/**
 * Template for Sunrise Rotate Posts
 */
?>

<div id="sunrise-rotate-posts-wrap" class="sunrise-widget-wrap">
    <div id="sunrise-rotate-posts" class="posts-rotator">
	<?php
        if (is_home()){ // only works in homepage 
		$args = array( 'post_type' => 'any' );
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="rotated-post">
				<a href="<?php the_permalink(); ?>">
				<div class="post-title-mh"><?php the_title(); ?></div>
				<?php the_post_thumbnail(); ?>
				</a>
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php else : ?>
			<p><?php esc_html_e( 'Still no posts! Please, write it!' ); ?></p>
		<?php endif; 
        } ?>
    </div> <!-- end sunrise-rotate-posts-wrap -->
</div> <!-- end sunrise-rotate-posts-wrap -->

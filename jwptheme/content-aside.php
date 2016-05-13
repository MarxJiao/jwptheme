<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Jwptheme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'jwptheme' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jwptheme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php if ( is_single() ) : ?>
			<?php jwptheme_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'jwptheme' ), '<span class="edit-link">', '</span>' ); ?>

			<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>

		<?php else : ?>
			<?php jwptheme_entry_date(); ?>
			<?php edit_post_link( __( 'Edit', 'jwptheme' ), '<span class="edit-link">', '</span>' ); ?>
		<?php endif; // is_single() ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

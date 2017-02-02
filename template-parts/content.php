<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package toast_s
 */

?>

<article>
	<header>
		<?php
		if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h2><?php the_title(); ?></h3>
		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php toast_s_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span>&rarr;</span>', 'toast_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span>"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div>' . esc_html__( 'Pages:', 'toast_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer>
		<?php toast_s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

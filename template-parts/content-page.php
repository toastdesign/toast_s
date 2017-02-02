<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package toast_s
 */

?>

<article>
	<header>
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div>' . esc_html__( 'Pages:', 'toast_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'toast_s' ),
						the_title( '<span>"', '"</span>', false )
					),
					'<span>',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

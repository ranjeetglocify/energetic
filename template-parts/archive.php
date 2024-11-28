<?php
/**
 * The template for displaying archive pages.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="st-smart-slider-blog">
	<?php echo do_shortcode('[smartslider3 slider="5"]'); ?>
</div>
<div class="wp_silder_botTxt">
<?php echo do_shortcode('[smart_slider_txt_bottom]'); ?> 
</div>
<main id="content" class="site-main">

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<div class="page-header">
			<?php
			the_archive_title( '<h1 class="entry-title">', '</h1>' );
			the_archive_description( '<p class="archive-description">', '</p>' );
			?>
		</div>
	<?php endif; ?>
	<div class="page-content">
	<h1 class="st-entry-title">Our Blog</h1>
		<?php
		while ( have_posts() ) {
			the_post();
			$post_link = get_permalink();
			?>
			<article class="post">
				<?php
				if ( has_post_thumbnail() ) {
					echo '<div class="wp_post_content">';
					echo '<div class="has_post_thumbnail">';
					echo '<div class="entry-image">';

					printf(
						'<a href="%s">%s</a>',
						esc_url( get_permalink() ),
						get_the_post_thumbnail( null, 'full	' )
					);
					echo '</div>'; 
					echo '</div>';
				}
				printf(
					'<h2 class="%s"><a href="%s">%s</a></h2>',
					'entry-title',
					esc_url( get_permalink() ),
					esc_html( get_the_title() )
				);

				printf( '<p class="wp_posted_on">Posted: %s</p>', esc_html( get_the_date('d. m. Y') ) );
				printf( '<p class="wp_writer">by %s</p>', esc_html( get_the_author() ) );

				the_excerpt();

				printf(
					'<a href="%s" class="button medium_graphics">Learn More</a>',
					esc_url( get_permalink() )
				);

				echo '</div>';
				?>
			</article>

		<?php } ?>
	</div>
	<aside id="st-sidebar">
		<?php dynamic_sidebar('smartslider_area_1'); ?>
	</aside>
	<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) :
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		?>
		<nav class="pagination">
			<div class="nav-previous"><?php
				/* translators: %s: HTML entity for arrow character. */
				previous_posts_link( sprintf( esc_html__( '%s Previous', 'hello-elementor' ), sprintf( '<span class="meta-nav">%s</span>', $prev_arrow ) ) );
			?></div>
			<div class="nav-next"><?php
				/* translators: %s: HTML entity for arrow character. */
				next_posts_link( sprintf( esc_html__( 'Next %s', 'hello-elementor' ), sprintf( '<span class="meta-nav">%s</span>', $next_arrow ) ) );
			?></div>
		</nav>
	<?php endif; ?>

</main>

<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>

<div class="st-smart-slider-blog">
	<?php echo do_shortcode('[smartslider3 slider="6"]'); ?>
</div>
<div class="wp_silder_botTxt">
	<?php echo do_shortcode('[smart_slider_txt_bottom]'); ?> 
</div>

<main id="content" <?php post_class( 'site-main' ); ?>>

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<div class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	<?php endif; ?>

	<div class="page-content">
	<h2 class="st-customslide-title">
			<?php the_title(); ?>
		</h2>
		<div class="st-customslide-img">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
				<?php endif; ?>
		</div>

		<div class="st-extra-content">
			<p class="wp_posted_on">Posted:<?php echo esc_html( get_the_date('d. m. Y') ) ?> </p> 
			<p class="wp_writer">by  <?php echo esc_html( get_the_author() ) ?></p> 
		</div>
		<div class="st-content">
			<?php the_content(); ?>
		</div>
		<div class="custom-share-buttons">
			<p>Share this post:</p>

			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" data-href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" class="share-btn facebook-btn share-popup">
			<span class="elementor-icon-list-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
			</span>
			</a>

			<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_permalink() ); ?>" data-href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_permalink() ); ?>" class="share-btn twitter-btn share-popup">
			<span class="elementor-icon-list-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>	
			</span>
			</a>

			<a href="mailto:?subject=<?php echo rawurlencode( 'Check out this post: ' . get_the_title() ); ?>&body=<?php echo rawurlencode( 'Check out this post: ' . get_permalink() ); ?>" data-href="mailto:?subject=<?php echo rawurlencode( 'Check out this post: ' . get_the_title() ); ?>&body=<?php echo rawurlencode( 'Check out this post: ' . get_permalink() ); ?>" class="share-btn email-btn share-popup">
			<span class="elementor-icon-list-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-far-envelope" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>						
			</span>
			</a>
			
			<a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?>&media=<?php echo urlencode( get_the_post_thumbnail_url() ); ?>&description=<?php echo urlencode( get_the_title() ); ?>" data-href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?>&media=<?php echo urlencode( get_the_post_thumbnail_url() ); ?>&description=<?php echo urlencode( get_the_title() ); ?>" class="share-btn pinterest-btn share-popup">
			<span class="elementor-icon-list-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-fab-pinterest" viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg"><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path></svg>						
			</span>
			</a>

			<!-- Google Plus (Deprecated) -->
			<a href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" class="share-btn googleplus-btn share-popup">
			<span class="elementor-icon-list-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-fab-google-plus-g" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"></path></svg>						
			</span>
			</a>
		</div>

		<?php wp_link_pages(); ?>

		<?php // if ( has_tag() ) : ?>
		<!-- <div class="post-tags">
			<?php // the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), ', ', '</span>' ); ?>
		</div> -->
		<?php // endif; ?>
	</div>
	<aside class="st-sidebar">
		<?php dynamic_sidebar('smartslider_area_1'); ?>
	</aside>
	<?php // comments_template(); ?>

</main>
	<div class="wpNewsletterSignup">
		<div class="ctm-container">
			<?php echo do_shortcode('[contact-form-7 id="24a1686" title="Newsletter Signup"]'); ?>
		</div>
	</div>
	<?php
endwhile;

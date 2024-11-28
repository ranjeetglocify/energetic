<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 */

get_header(); 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

<main id="content-page" <?php post_class( 'site-main' ); ?>>

<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
    <div class="page-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
<?php endif; ?>

<div class="page-content">
    <?php the_content(); ?>

    <?php wp_link_pages(); ?>

</div>

</main>

    <?php endwhile;
else :
    echo '<p>No content found.</p>';
endif;

get_footer(); 

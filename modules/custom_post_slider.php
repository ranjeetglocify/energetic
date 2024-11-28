<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <section class="custm-blogs-section">
        <div class="blogcontainer">
            <div class="custm-blogs">
                <div class="customblog-slider">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="customslide-wrap">
                            <div class="customslide-img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="customslide-content">
                                <h2 class="customslide-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="customslide-text"><?php echo get_the_excerpt(); ?></p>
                                <a class="custmslide-btn" href="<?php the_permalink(); ?>">read more</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="custom-navigation">
                    <button class="prev">
                        <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Previous Slide" />
                    </button>
                    <button class="next">
                        <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Next Slide" />
                    </button>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>

<?php
// Reset Post Data
wp_reset_postdata();
?>


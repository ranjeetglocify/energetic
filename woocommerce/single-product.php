<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		do_action( 'woocommerce_before_main_content' );
	?>
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
    <div class="st-row-wrap">
    <div class="st-col-7">
    <div class="custom-product-heading">
        <?php the_field( 'heading' ); ?>
    </div>
    <?php   
    $product_fields = get_field( 'tabs_fields' ); 

    if ( $product_fields ) : ?>

    <div class="custom-tabs-container">

        <ul class="tab-nav">
            <?php if ( ! empty( $product_fields['tab_heading1'] ) ) : ?>
                <li class="tab-link active" data-tab="tab-1"><?php echo wp_kses_post( $product_fields['tab_heading1'] ); ?></li>
            <?php endif; ?>
            <?php if ( ! empty( $product_fields['tab_heading2'] ) ) : ?>
                <li class="tab-link" data-tab="tab-2"><?php echo wp_kses_post( $product_fields['tab_heading2'] ); ?></li>
            <?php endif; ?>
            <?php if ( ! empty( $product_fields['tab_heading3'] ) ) : ?>
                <li class="tab-link" data-tab="tab-3"><?php echo wp_kses_post( $product_fields['tab_heading3'] ); ?></li>
            <?php endif; ?>
        </ul>

       <?php if ( ! empty( $product_fields['about1'] ) ) : ?>
                <div class="custom-tab">
                    <div class="tab-content">
                        <div class="st-accordian">
                        <?php if ( ! empty( $product_fields['about1'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['about1'] ); ?></a></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product_fields['about_content1'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['about_content1'] ); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['features1'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['features1'] ); ?></a></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product_fields['features_content1'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['features_content1'] ); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['delivery1'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['delivery1'] ); ?></a></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product_fields['delivery_content1'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['delivery_content1'] ); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['sizing1'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['sizing1'] ); ?></a></div>
                                <?php endif; ?>
                            <?php if ( ! empty( $product_fields['sizing_content1'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['sizing_content1'] ); ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( ! empty( $product_fields['about2'] ) ) : ?>
                <div class="custom-tab">
                    <div class="tab-content">
                    <div class="st-accordian">
                    <?php if ( ! empty( $product_fields['about2'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['about2'] ); ?></a>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['about_content2'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['about_content2'] ); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['features2'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['features2'] ); ?></a></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product_fields['features_content2'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['features_content2'] ); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['delivery2'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['delivery2'] ); ?></a></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product_fields['delivery_content2'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['delivery_content2'] ); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $product_fields['sizing2'] ) ) : ?>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['sizing2'] ); ?></a></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product_fields['sizing_content2'] ) ) : ?>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['sizing_content2'] ); ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( ! empty( $product_fields['about3'] ) ) : ?>
                <div class="custom-tab">
                    <div class="tab-content">
                    <div class="st-accordian">
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['about3'] ); ?></a></div>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['about_content3'] ); ?></p>
                            </div>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['features3'] ); ?></a></div>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['features_content3'] ); ?></p>
                            </div>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['delivery3'] ); ?></a></div>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['delivery_content3'] ); ?></p>
                            </div>
                            <div class="accordion-title">
                                <a href="javascript:void(0)"><?php echo wp_kses_post( $product_fields['sizing3'] ); ?></a></div>
                            <div class="accordion-inner">
                                <p class="st-content"><?php echo wp_kses_post( $product_fields['sizing_content3'] ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

    </div>

    <?php endif; ?>
    <div class="st-info-wrapper">
        <div class="st-order-modal">
        <?php custom_product_modal_button(); ?>
        </div>
        <div class="st-contact-button">
            <a href="/contact-us/">Contact us <span class="st-icons">&gt;</span></a>
        </div>
    </div>
</div>
<div class="st-col-5">
    <div class="st-gallery-block">
    <div class="st-gallery-parent-first st-gallery-parent">
    <div class="st-product-gallery">
        <div class="st-images-first-tab st-images">
            <?php
                $gallery_group = get_field('first_tab_gallery');

                if ($gallery_group) {
                    if (!empty($gallery_group['first_image'])) {
                        $image_data = $gallery_group['first_image'];
                        $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        echo '<img src="' . esc_url($image_url) . '" alt="">';
                    }
                    if (!empty($gallery_group['second_image'])) {
                        $image_data = $gallery_group['second_image'];
                        $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        echo '<img src="' . esc_url($image_url) . '" alt="">';
                    }
                    if (!empty($gallery_group['third_image'])) {
                        $image_data = $gallery_group['third_image'];
                        $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        echo '<img src="' . esc_url($image_url) . '" alt="">';
                    }
                    if (!empty($gallery_group['forth_image'])) {
                        $image_data = $gallery_group['forth_image'];
                        $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        echo '<img src="' . esc_url($image_url) . '" alt="">';
                    }
                    if (!empty($gallery_group['fifth_image'])) {
                        $image_data = $gallery_group['fifth_image'];
                        $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        echo '<img src="' . esc_url($image_url) . '" alt="">';
                    }
                }
            ?>
        </div>
    </div>
    <div class="first-tab-gallery-nav">
            <button class="prev">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Previous Slide" />
            </button>
            <button class="next">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Next Slide" />
            </button>
    </div>
    </div>
    <div class="st-gallery-parent-second st-gallery-parent">
    <div class="st-images-second-tab st-images">
        <?php
            $gallery_group = get_field('second_tab_gallery');

            if ($gallery_group) {
                if (!empty($gallery_group['first_image'])) {
                    $image_id = $gallery_group['first_image'];
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    echo '<img src="' . esc_url($image_url) . '" alt="">';
                }
                if (!empty($gallery_group['second_image'])) {
                    $image_id = $gallery_group['second_image'];
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    echo '<img src="' . esc_url($image_url) . '" alt="">';
                }
                if (!empty($gallery_group['third_image'])) {
                    $image_id = $gallery_group['third_image'];
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    echo '<img src="' . esc_url($image_url) . '" alt="">';
                }
                if (!empty($gallery_group['forth_image'])) {
                    $image_id = $gallery_group['forth_image'];
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    echo '<img src="' . esc_url($image_url) . '" alt="">';
                }
                if (!empty($gallery_group['fifth_image'])) {
                    $image_id = $gallery_group['fifth_image'];
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    echo '<img src="' . esc_url($image_url) . '" alt="">';
                }
            }
        ?>
        </div>
        <div class="second-tab-gallery-nav">
            <button class="prev">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Previous Slide" />
            </button>
            <button class="next">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Next Slide" />
            </button>
        </div>
        </div>
    <div class="st-gallery-parent-third st-gallery-parent" >
    <div class="st-images-third-tab st-images">
        <?php
        $gallery_group = get_field('third_tab_gallery');

        if ($gallery_group) {
            if (!empty($gallery_group['first_image'])) {
                $image_data = $gallery_group['first_image'];
                $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                echo '<img src="' . esc_url($image_url) . '" alt="">';
            }
            if (!empty($gallery_group['second_image'])) {
                $image_data = $gallery_group['second_image'];
                $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                echo '<img src="' . esc_url($image_url) . '" alt="">';
            }
            if (!empty($gallery_group['third_image'])) {
                $image_data = $gallery_group['third_image'];
                $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                echo '<img src="' . esc_url($image_url) . '" alt="">';
            }
            if (!empty($gallery_group['forth_image'])) {
                $image_data = $gallery_group['forth_image'];
                $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                echo '<img src="' . esc_url($image_url) . '" alt="">';
            }
            if (!empty($gallery_group['fifth_image'])) {
                $image_data = $gallery_group['fifth_image'];
                $image_id = is_array($image_data) ? $image_data['ID'] : $image_data;
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                echo '<img src="' . esc_url($image_url) . '" alt="">';
            }
        }
        ?>
        </div>
        <div class="third-tab-gallery-nav">
            <button class="prev">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Previous Slide" />
            </button>
            <button class="next">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Next Slide" />
            </button>
        </div>
        
    </div>
    </div>

    <div class="parent-gallery-div">
        <h3>Complete the look</h3>
        <div class="st-product-gallery">
            <?php echo do_shortcode('[product_gallery]'); ?>
        </div>
        <div class="product-gallery-icons">
            <button class="prev">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Previous Slide" />
            </button>
            <button class="next">
                <img src="/wp-content/uploads/2024/11/arrow-right.png" alt="Next Slide" />
            </button>
        </div>
    </div>
</div>
    </div>
<?php endwhile; ?>

<?php
    do_action( 'woocommerce_after_main_content' );
?>

<?php
    do_action( 'woocommerce_sidebar' );
?>

<?php
get_footer( 'shop' );



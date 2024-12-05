<?php
global $product;
if ($product) {
    $product_id = $product->get_id();
    $product_name = $product->get_name();
?>
    <button id="open-modal-btn" class="button custom-modal-button">Order Now</button>

    <div id="product-modal" style="display:none;" data-product-id="<?php echo esc_attr($product_id); ?>" data-product-name="<?php echo esc_attr($product_name); ?>">
        <div class="st-modal-content">
            <div class="st-modal-header">
                <h2 id="modal-product-name"></h2>
                <span id="st-close-modal">&times;</span>
            </div>
            <div class="st-order-form">
                <?php echo do_shortcode('[contact-form-7 id="d1c079d" title="product form"]'); ?>
            </div>
        </div>
    </div>
<?php } ?>

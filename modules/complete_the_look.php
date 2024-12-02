<?php
global $product; 

if ( ! $product ) {
    return;
}

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids && is_array( $attachment_ids ) ) {
    foreach ( $attachment_ids as $attachment_id ) {
        $image_url = wp_get_attachment_url( $attachment_id ); 
        $image_html = wp_get_attachment_image( $attachment_id, 'full' );   
        echo $image_html; 

    }
}
?>



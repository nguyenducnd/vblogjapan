<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://woocommerce.com/document/template-structure/
 * @package          WooCommerce\Templates
 * @version          9.8.0
 * @flatsome-version 3.19.12
 */

defined( 'ABSPATH' ) || exit;

// FL: Disabled, Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
//if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
//	return;
//}

global $product;

if ( ! $product || ! $product instanceof WC_Product ) {
	return '';
}

$attachment_ids = $product->get_gallery_image_ids();
$image_size     = get_theme_mod( 'product_layout' ) == 'gallery-wide' ? 'full' : 'woocommerce_single';


if ( $attachment_ids && $product->get_image_id() ) {
	foreach ( $attachment_ids as $key => $attachment_id ) {
		/**
		 * Filter product image thumbnail HTML string.
		 *
		 * @since 1.6.4
		 *
		 * @param string $html          Product image thumbnail HTML string.
		 * @param int    $attachment_id Attachment ID.
		 */
		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', flatsome_wc_get_gallery_image_html( $attachment_id, false, $image_size, $key ), $attachment_id ); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

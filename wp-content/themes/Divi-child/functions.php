<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

//zoom
function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );

add_filter('gettext', 'promeni_cart', 10, 3);

//proizvodi
function promeni_cart($new_text, $related_text, $source)
{
  if ($related_text === 'Product' && is_cart()) {
         $new_text = esc_html__('Proizvod', $source);
     }
     return $new_text;  
}

//cena
add_filter('gettext', 'promeni_price', 10, 3);

function promeni_price($new_text, $related_text, $source)
{
  if ($related_text === 'Price' && is_cart ()) {
         $new_text = esc_html__('Cena', $source);
     }
     return $new_text;  
}

//kolicina
add_filter('gettext', 'promeni_quantity', 10, 3);

function promeni_quantity($new_text, $related_text, $source)
{
  if ($related_text === 'Quantity' && is_cart ()) {
         $new_text = esc_html__('Količina', $source);
     }
     return $new_text;  
}

//kolicina
add_filter('gettext', 'promeni_subtotal', 10, 3);

function promeni_subtotal($new_text, $related_text, $source)
{
  if ($related_text === 'Subtotal' && is_cart ()) {
         $new_text = esc_html__('Ukupno', $source);
     }
     return $new_text;  
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Dodaj u korpu', 'woocommerce' ); }
    
add_filter( 'gettext', 'change_cart_totals_text', 20, 3 );
function change_cart_totals_text( $translated, $text, $domain ) {
    if( is_cart() && $translated == 'Cart totals' ){
        $translated = __('Ukupno u korpi', 'woocommerce');
    }
    return $translated;
}

remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );
add_action( 'woocommerce_proceed_to_checkout', 'custom_button_proceed_to_checkout', 20);
function custom_button_proceed_to_checkout() {
    echo '<a href="'.esc_url(wc_get_checkout_url()).'" class="checkout-button button alt wc-forward">' .
    __("Dovrši porudžbinu", "woocommerce") . '</a>';
}

<?php
add_action('wp_enqueue_scripts', 'ajax');

function ajax(){
    wp_register_script('ajax-woocom', THEME_URL . '/js/Ajax.js', array('jquery'));

    wp_enqueue_script('ajax-woocom');
    wp_localize_script('ajax-woocom', 'gwajax',
        array(
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('gwajax-nonce')
        )
    );
}

add_action( 'wp_ajax_product_remove', 'product_remove' );
add_action( 'wp_ajax_nopriv_product_remove', 'product_remove' );

function product_remove() {

    $nonce = $_POST['nonce'];
   
    // проверяем nonce код, если проверка не пройдена прерываем обработку
    if ( !wp_verify_nonce( $nonce, 'gwajax-nonce' ) )
        die ( 'Stop!');
    
    global $wpdb, $woocommerce;
    session_start();

    $cart = WC()->instance()->cart;
    $id = $_POST['product_id'];
    $cart_id = $cart->generate_cart_id($id);
    $cart_item_id = $cart->find_product_in_cart($cart_id);

    if($cart_item_id){
        $cart->set_quantity($cart_item_id,0);
    }

    
    die();
}














// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_email']);
    unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_city']);

    return $fields;
}

add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('MEET THE LEMURS').':</strong> ' . get_post_meta( $order->id, 'lemurs', true ) . '</p>';
    echo '<p><strong>'.__('SEA-COAST & CRUISES').':</strong> ' . get_post_meta( $order->id, 'sea-coast', true ) . '</p>';
    echo '<p><strong>'.__('FISHING IN THE OCEAN').':</strong> ' . get_post_meta( $order->id, 'fising', true ) . '</p>';
    echo '<p><strong>'.__('WILDLIFE & ECOLODGES').':</strong> ' . get_post_meta( $order->id, 'wildlife', true ) . '</p>';
    echo '<p><strong>'.__('THE BAOBABS').':</strong> ' . get_post_meta( $order->id, 'boababs', true ) . '</p>';
}


add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys');

function my_custom_order_meta_keys( $keys ) {
    $keys[] = 'Код отслеживания';
    return $keys;
}

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields1' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields1( $fields ) {
    $fields['billing']['lemurs'] = array(
        'label'     => 'MEET THE LEMURS',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-left-wide'),
        'clear'     => false,
        'type'      => 'checkbox'
    );
    $fields['billing']['sea-coast'] = array(
        'label'     => 'SEA-COAST & CRUISES',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-left-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['fising'] = array(
        'label'     => 'FISHING IN THE OCEAN',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-left-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['wildlife'] = array(
        'label'     => 'WILDLIFE & ECOLODGES',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-left-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['boababs'] = array(
        'label'     => 'THE BAOBABS',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-lleft-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['watching'] = array(
        'label'     => 'WHALE WATCHING',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-lleft-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['bird'] = array(
        'label'     => 'BIRDWATCHING',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-lleft-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['quads'] = array(
        'label'     => 'RAIDS ON QUADS',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-lleft-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['quads'] = array(
        'label'     => 'THE SOUTHERN BUSH',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-center-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['quads'] = array(
        'label'     => 'SNORKLING',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-center-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['quads'] = array(
        'label'     => 'GRAB YOUR BOARDS!',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-center-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['quads'] = array(
        'label'     => 'WORLD HERITAGE PARKS',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-center-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['4-1'] = array(
        'label'     => '4-1',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-right-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['4-2'] = array(
        'label'     => '4-2',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-right-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['4-3'] = array(
        'label'     => 'SAILING',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-right-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );

    $fields['billing']['4-4'] = array(
        'label'     => 'HIKING & TREKKING',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-right-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['5-1'] = array(
        'label'     => '5-1',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-rright-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['5-2'] = array(
        'label'     => '5-2',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-rright-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['5-3'] = array(
        'label'     => '5-3',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-rright-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );
    $fields['billing']['5-4'] = array(
        'label'     => '5-4',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-rright-wide'),
        'clear'     => true,
        'type'      => 'checkbox'
    );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields2' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields2( $fields ){

    $fields['billing']['details'] = array(
        'label'     => 'Further details?',
        'placeholder'   => false,
        'required'  => false,
        'class'     => array('form-row-wide'),
        'clear'     => true,
        'type'      => 'textarea'
    );


    return $fields;

}

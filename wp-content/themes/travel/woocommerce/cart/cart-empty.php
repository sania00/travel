<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

?>

<p class="cart-empty">
	<?php

	$text = '<div class=\"no-select\">
                                    <h4>You nothing selected!!!</h4>
                                    <p>Start planning your journey exploring the regions of Madagascar and the destinations.
                                        Keep browsing and creating your own personal itinerary for an unforgettable vacation
                                        with the help of our Tailor Made service and Wishlist by adding these destinations,
                                        experiences and activities to your Wishlist. Please send us an online request to
                                        create your memorable Madagascar holidays. To help us narrow down the options and
                                        create the perfect trip for you, please tell us a bit more about where you want to
                                        go and how you like to travel.</p>
                                </div>
';

	?>
	<?php _e( $text, 'woocommerce' ) ?>
</p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<p class="return-to-shop">
	<a class="button wc-backward" href="/">
		<?php _e( 'Return To Shop', 'woocommerce' ) ?>
	</a>
</p>

<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>

<table class="shop_table shop_table_responsive cart" cellspacing="0">

	<tbody>
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<div class="selection">
					<?php
					$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

					if (!$_product->is_visible()) {
						echo $thumbnail;

					} else {
						echo $thumbnail;
					}?>

					<h3 class="title"><?php echo $_product->get_title() ?></h3>

					<?php
					echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
						'<a href="%s" class="btn remove-btn" title="%s" data-product_id="%s" data-product_sku="%s">Delete</a>',
						esc_url(WC()->cart->get_remove_url($cart_item_key)),
						__('Remove this item', 'woocommerce'),
						esc_attr($product_id),
						esc_attr($_product->get_sku())
					), $cart_item_key);
					?>

				</div>

				<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
		?>
		
		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</tbody>
</table>
	
<?php do_action( 'woocommerce_after_cart_table' ); ?>


</form>


<?php do_action( 'woocommerce_after_cart' );?>





<div class="">
<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
 ?>
<div class="shopping-cart">
<?php if ( ! WC()->cart->is_empty() ) : ?>
    <div class="">
      <div class="shopping-cart-total">
          <a href="#" id="closecart" class="closecart">x</a>
      </div>
    </div> <!--end shopping-cart-header -->

   	<ul class="shopping-cart-items ">
		<?php
		do_action( 'woocommerce_before_mini_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
				$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				?>
				<li class="woocommerce-mini-cart-item clearfix <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
        

  <?php if ( empty( $product_permalink ) ) : ?>
						<?php echo $thumbnail . $product_name; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php else : ?>
						<a href="#" class="name_produt_minicart">
							<?php echo $thumbnail . $product_name; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					<?php endif; ?>
					<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<br /><span class="qtd_select">Qtd: ' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
          
				</li>
				<?php
			}
		}
		do_action( 'woocommerce_mini_cart_contents' );
		?>
	</ul>
<span class="main-color-text"><span title="<?php _e( 'Ver meu carrinho' ); ?>"><?php echo sprintf ( _n( '%d item', '%d itens', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></span>
    <a href="<?php echo wc_get_checkout_url() ?>" class="button">Quero pagar agora</a>
    <a href="<?php echo wc_get_cart_url(); ?>" class="button_inline">Ver meu carrinho</a>
<?php else : ?>
  <p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'Nenhum produto no seu carrinho. Aproveite as nossas ofertas :)', 'woocommerce' ); ?></p>
	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
	<?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>
<?php endif; ?>
<?php do_action( 'woocommerce_after_mini_cart' ); ?>
  </div> <!--end shopping-cart -->
</div> <!--end container -->







<div class="">
  <div class="shopping-cart">
    <div class="shopping-cart-header">
      <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">

<?php
global $woocommerce;
echo $woocommerce->cart->cart_contents_count;
?>

</span>
      <div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text"><span title="<?php _e( 'Ver meu carrinho' ); ?>"><?php echo sprintf ( _n( '%d item', '%d itens', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></span>
</span>
      </div>
    </div> <!--end shopping-cart-header -->

    <ul class="shopping-cart-items">
      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
        <span class="item-name"> Item</span>
        <span class="item-price">R$849.99</span>
        <span class="item-quantity">Quantidade: 01</span>
      </li>

    </ul>

    <a href="<?php echo wc_get_checkout_url() ?>" class="button">Quero pagar agora</a>
    <a href="<?php echo wc_get_cart_url(); ?>" class="button_inline">Ver meu carrinho</a>
  </div> <!--end shopping-cart -->
</div> <!--end container -->

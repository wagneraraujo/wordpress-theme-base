<div class="allMenu menuDark">
<div class="container">
  <div class="row line_menu">
<?php get_template_part('inc/drop-cart'); ?>
    <div class="menuhamburger">
      <a href="#menumobile" class="toggle-menu" aria-role="button" >
        <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-text-left" fill="#fff" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </a>
    </div>
  <div class="logosite">
      <img src="<?php echo esc_url(
        get_template_directory_uri()
      ); ?>/images/logo-dark.png" alt="Select Nutri - Viva Mais com a Select Nutri">
  </div>
<div class="menu_site">
<nav class="menu_dark">
  <?php wp_nav_menu(array(
    "theme_location" => "menu_header",
    "container" => false,
    'items_wrap' => '<ul id="%1$s">%3$s</ul>'
  )); ?>
</nav>
</div>  
    <div class="cart_icon"> 
<a href="#" id="cart">
    <div class="qtd_cart">
<?php
global $woocommerce;
echo $woocommerce->cart->cart_contents_count;
?>
</div>
    <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-cart3" fill="#fff" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
    </div></a>
</div>
</div>
</div>




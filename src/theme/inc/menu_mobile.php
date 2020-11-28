
<nav id="menumobile" class="shadow p-3 mb-5 bg-white ">
  <div class="logosite_menu_mob">
      <img src="<?php echo esc_url(
        get_template_directory_uri()
      ); ?>/images/logo-white.png" alt="Select Nutri - Viva Mais com a Select Nutri">
  </div>
  <a href="#" class="toggle-menu-close" aria-role="button">
<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="#D72D2D" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
    
  </a>
  <?php wp_nav_menu(array(
    "theme_location" => "menu_header",
    "container" => false,
    'items_wrap' => '<ul id="%1$s">%3$s</ul>'
  )); ?>

<br>

      <ul class="socialista_menu_mobile">
  <li><a href="https://www.facebook.com/selectnutri" target="_Blank">
      <img src="<?php echo esc_url(
        get_template_directory_uri()
      ); ?>/images/icons/instagram.svg" alt="Siga a Select Nutri no Instagram">
       </a></li>
  <li><a href="https://www.instagram.com/selectnutrioficial/" target="_Blank">

      <img src="<?php echo esc_url(
        get_template_directory_uri()
      ); ?>/images/icons/facebook.svg" alt="Curta a Select no Facebook">
</a></li>
  <li><a href="https://www.youtube.com/channel/UCow42qPrQXZNi2yvzVEO-3g/" target="_Blank">

      <img src="<?php echo esc_url(
        get_template_directory_uri()
      ); ?>/images/icons/youtube.svg" alt="Faça sua inscrição no Canal da Select Nutri">
</a></li>
</ul>
</nav>

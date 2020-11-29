
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

<?php
$args = array(
  'numberposts' => 2,
  'post_type' => 'slide'
);
// get results
$the_query = new WP_Query($args);

// The Loop
?>
<?php if ($the_query->have_posts()): ?>
 <?php while ($the_query->have_posts()):
   $the_query->the_post(); ?>

        <!-- Slides -->
        <div class="swiper-slide" style="background: url('<?php the_field(
  'imagem_web'
); ?>');">

  <div class="container">
    <div class="row">
      <div class="col textoSlide">
        <?php the_field('texto_slide'); ?>        
      </div>
    </div>
  </div>

</div>

 <?php
 endwhile; ?>
<?php wp_reset_query(); ?>
    <?php endif; ?>
    </div>


    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>

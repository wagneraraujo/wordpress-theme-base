<div class="container">
<div class="row titleTop">
<h4>CONHEÇA NOSSA LINHA DE PRODUTOS
</h4>
</div>

<div class="row linhaprodutos">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'product',
              'posts_per_page' => 24,
              'paged' => $paged
            );
            $counter = 1;
            $loop = new WP_Query($args);

            if ($loop->have_posts()) {
              while ($loop->have_posts()):
                $loop->the_post(); ?>
                <div class="col-md-4 col-lg-3 col-sm-4 col-12">
                    <!-- Product Card item -->
                    <div class="card-item-produtc">
<div class="video_assistir js-modal-btn" >

<button data-video-id="7TUOI23spt0"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-reels" fill="#fff" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 8a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8zm11.5 5.175l3.5 1.556V7.269l-3.5 1.556v4.35zM2 7a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2z"/>
  <path fill-rule="evenodd" d="M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M9 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></button>
</div>
    <div class="view item-cart-select">
        <?php
        $image = wp_get_attachment_image_src(
          get_post_thumbnail_id($loop->post->ID),
          'single-post-thumbnail'
        );
        $regular_price = get_post_meta(get_the_ID(), '_regular_price', true);
        $sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
        $terms = get_the_terms($post->ID, 'product_cat');
        foreach ($terms as $term) {
          $product_cat_name = $term->name;
          $product_cat_id = $term->term_id;
          break;
        }
        ?>
        <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="<?php the_title(); ?>" data-id="<?php echo $loop
  ->post->ID; ?>">
        <a href ="<?php echo get_permalink(); ?>">
            <div class="mask"></div>
        </a>
    </div>

                        <!--categoria-->
                        <!-- <h6 class="mb-3">
                            <a href="<?php echo esc_url(
                              get_term_link($product_cat_id, 'product_cat')
                            ); ?>">
                                <span class="badge purple mr-1"><?php echo $product_cat_name; ?></span>
                            </a>
                        </h6> -->
                        <h5 class="title_product_list">
 <a href="<?php echo get_permalink(); ?>"> 
                            <strong><?php the_title(); ?></strong>
</a>                        
</h5>
                        <p>
                            <?php if ($sale_price) { ?>
                            <span class="">
                                <del class="depreco"><?php echo "de R$" .
                                  $regular_price; ?></del> por
                            </span>
                            <?php } ?>

                           

                           
                            
                            <span class="porpreco">
                        <?php
                        echo " R$";
                        echo $sale_price ? $sale_price : $regular_price;
                        ?></span>
                        </p>
<div class="bottuons">
                        <a href="<?php echo get_permalink(
                          wc_get_page_id('cart')
                        ) .
                          "?add-to-cart=" .
                          get_the_ID(); ?> " class="btn btn-success btn-sm product_type_simple add_to_cart_button ajax_add_to_cart" data-toggle="tooltip" data-placement="left" title="Adicionar ao carrinho">
                            <i class="fas fa-shopping-cart"></i> Comprar
                        </a>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-outline-primary btn-sm"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Detalhes</a>
</div>

                    </div>
                    <!-- Product Card naked -->

                </div>
                <!--Grid column-->
                <?php
                if ($counter % 4 == 0) { ?>
                    </div>
                    <!--Grid row-->
                    <!--Grid dynamic row-->
                    <div class="row wow fadeIn">
                <?php }
                $counter++;

              endwhile;
            } else {
              echo __('Nenhum produto cadastrado. Em breve, novos produtos!');
            }

// Custom query loop pagination
?>
            </div>
            <!--Grid row-->
</div>

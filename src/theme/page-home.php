<?php
/*Template Name: inicio */
?>


<?php get_header(); ?>
<?php get_template_part('inc/menu-home'); ?>
<?php get_template_part('inc/slide'); ?>


<div class="container">

<div class="row ">
            <?php
                // Define custom query parameters
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 24,
                    'paged'          => $paged
                    );
                $counter = 1;
                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
            ?>
                <!--Grid column-->
                <div class="col-md-3 col-sm-6">

                    <!-- Product Card naked -->
                    <div class="card-naked">

                      <!--Featured image-->
    <div class="view item-cart-select">
        <?php
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
        $regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
        $sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
        $terms = get_the_terms( $post->ID, 'product_cat' );
        foreach ($terms as $term) {
            $product_cat_name = $term->name;
            $product_cat_id = $term->term_id;
            break;
        }
        ?>
        <img src="<?php  echo $image[0]; ?>" class="img-fluid" alt="<?php the_title() ?>" data-id="<?php echo $loop->post->ID; ?>">
        <a href ="<?php echo get_permalink() ?>">
            <div class="mask"></div>
        </a>
    </div>

                        <!--categoria-->
                        <!-- <h6 class="mb-3">
                            <a href="<?php echo esc_url( get_term_link( $product_cat_id, 'product_cat' ) ); ?>">
                                <span class="badge purple mr-1"><?php echo $product_cat_name ?></span>
                            </a>
                        </h6> -->
                        <h5 class="title_product_list">
                            <strong><?php the_title() ?></strong>
                        </h5>
                        <p>
                            <?php if($sale_price) {
                            ?>
                            <span class="">
                                <del class="depreco"><?php echo "de R$" . $regular_price; ?></del> por
                            </span>
                            <?php
                            }  
                            ?>

                           

                           
                            
                            <span class="porpreco">
                        <?php
                        echo " R$";
                        echo  ($sale_price) ? $sale_price : $regular_price;
                        ?></span>
                        </p>
                        <a href="<?php echo get_permalink(wc_get_page_id( 'cart' ))  . "?add-to-cart=" .  get_the_ID() ; ?> " class="btn btn-success btn-sm product_type_simple add_to_cart_button ajax_add_to_cart" data-toggle="tooltip" data-placement="left" title="Adicionar ao carrinho">
                            <i class="fas fa-shopping-cart"></i> Comprar
                        </a>
                        <a href="<?php echo get_permalink() ?>" class="btn btn-outline-primary btn-sm"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Info</a>

                    </div>
                    <!-- Product Card naked -->

                </div>
                <!--Grid column-->
                <?php
                if ($counter % 4 == 0) {
                ?>
                    </div>
                    <!--Grid row-->
                    <!--Grid dynamic row-->
                    <div class="row wow fadeIn">
                <?php
                }
                $counter++;
                endwhile;
                } else {
                    echo __( 'Nenhum produto cadastro. Em breve, novos produtos!' );
                }
                // Custom query loop pagination

                ?>
            </div>
            <!--Grid row-->
</div>

<?php get_footer(); ?>

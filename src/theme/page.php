<?php get_header(); ?>
<!-- container -->
<div class="container">	
	<!-- site-content -->
	<div class="site-content page">
		<?php if (have_posts()):
    while (have_posts()):
      $url = wp_get_attachment_url(
        get_post_thumbnail_id($post->ID),
        "thumbnail"
      );
      the_post();
      get_template_part('content', 'page');
    endwhile;
  else:
    get_template_part('content', 'none');
  endif; ?>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Luan Gjokaj, and WordPressify contributors" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" integrity="sha512-uCQmAoax6aJTxC03VlH0uCEtE0iLi83TW1Qh6VezEZ5Y17rTrIE+8irz4H4ehM7Fbfbm8rb30OkxVkuwhXxrRg==" crossorigin="anonymous" />
<link rel="stylesheet" href="<?php echo esc_url(
       get_template_directory_uri()
     ); ?>/css/modal-video.min.css" media="all">
     <link rel="shortcut icon" href="<?php echo esc_url(
       get_template_directory_uri()
     ); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(
      get_template_directory_uri()
    ); ?>/img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('inc/menu_mobile'); ?>
<?php 
if ( is_page( array( 'inicio', 'sobre-nos' ) ) ) {
} else {
 get_template_part('inc/menu-pages'); 
}
?>

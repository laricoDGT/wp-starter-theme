<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>
    <!-- <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo.png" /> -->
 
    <link rel="profile" href="http://gmpg.org/xfn/11">
	  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <header>
    <h1> <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo(); ?></a> </h1>
    <?php wp_nav_menu(array( 'theme_location'=> 'topnav', 'menu_class' => '', 'container' => false)); ?>
  </header>
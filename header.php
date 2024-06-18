<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">  
 <title>
        <?php bloginfo('name'); ?> |
        <?php if( is_front_page() ) : echo bloginfo( 'description' ); endif; ?>
        <?php wp_title( '', true ); ?>
    </title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <!-- <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo.png" /> -->
 
   
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <header>
    <h1> <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo(); ?></a> </h1>
    <?php wp_nav_menu(array( 'theme_location'=> 'topnav', 'menu_class' => '', 'container' => false)); ?>
  </header>

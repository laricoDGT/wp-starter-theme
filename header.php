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
<!--      <link rel="icon" type="image/svg+xml"
        href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-light.svg" sizes="128x128"
        media="(prefers-color-scheme: dark)" /> -->
 
   
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <header>
    <h1> <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo(); ?></a> </h1>
    
<?php wp_nav_menu(array( 'theme_location'=> 'primary', 'menu_class' => 'main-menu', 'container' => false)); ?>

            <?php wp_nav_menu(array( 'theme_location'=> 'top-menu', 'menu_class' => 'header-top-menu', 'container' => false)); ?>

  </header>

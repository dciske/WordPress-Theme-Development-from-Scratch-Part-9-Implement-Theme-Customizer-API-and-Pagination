<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?> <?php wp_title(); ?></title>

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
    <style>
      .jumbotron{
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>) no-repeat center center; 
      }
    </style>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        </nav>
      </div>
    </div>

    <?php if(is_front_page()) : ?>
        <div class="container-fluid"> 
      <?php else : ?>
        <div class="container">
    <?php endif; ?>
     <?php if(!is_front_page()) : ?>
        <div class="blog-header">
         <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
         <p class="lead blog-description"><?php bloginfo('description') ?></p>
        </div> 
    <?php endif; ?>
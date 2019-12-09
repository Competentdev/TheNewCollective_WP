<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#29272a" />
  <meta name="msapplication-navbutton-color" content="#29272a" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#29272a" />
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<div id="page" class="site">



<!-- Header Type Selection START -->

<?php if(get_theme_mod('neori_header_type_setting') == 'normal') : ?>

  <?php get_template_part( 'template-parts/headers/header-normal' ); ?>

<?php elseif(get_theme_mod('neori_header_type_setting') == 'centered') : ?>

  <?php get_template_part( 'template-parts/headers/header-centered' ); ?>

<?php elseif(get_theme_mod('neori_header_type_setting') == 'ad') : ?>

  <?php get_template_part( 'template-parts/headers/header-ad' ); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/headers/header-normal' ); ?>

<?php endif; ?>

<!-- Header Type Selection END -->

<div class="offcanvas-menu-button"><i class="fa fa-bars"></i></div>
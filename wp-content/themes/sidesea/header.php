<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body class="sticky-shrinknav-wrapper">

<header class="sticky-shrinknav-header show-for-medium">
  <h1 class="sticky-shrinknav-header-title"><i class="fas fa-laptop-code fa-1x"></i><?php echo get_bloginfo( 'name' ); ?></h1>
  <?php h5bs_primary_nav(); ?> 
</header>

<header class="show-for-small-only mobile-header">
  <?php h5bs_mobile_nav(); ?>
  <a data-toggle-menu class="overlay-nav-menu-toggle"><i class="fa fa-plus"></i></a>
<div class="mobile-header-logo"><h1><i class="fas fa-laptop-code fa-1x"></i><?php echo get_bloginfo( 'name' ); ?></h1></div>
</header>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <nav role="navigation">
            <?php wp_nav_menu([
                'theme_location' => 'main',
            ]); ?>
        </nav>
    </header>

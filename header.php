<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
  <?php wp_body_open(); ?>

  <header class="l-header">
    headerです。
  </header>
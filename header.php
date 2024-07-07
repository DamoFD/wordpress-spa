<?php
/**
* Header template
*
* @package wpawordpres
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?=bloginfo( 'charset' )?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php
        if ( function_exists( 'wp_body_open' ) ) {
                wp_body_open();
        }
        ?>

        <div id="page" class="site relative min-h-screen w-full bg-off-white" hx-indicator="#content" hx-target=".site-content" hx-swap="innerHTML show:window:top">
            <header id="masthead" class="site-header" role="banner">
                <?php get_template_part( 'template-parts/header/nav' ); ?>
            </header>
            <div id="content">
                <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87_w200.webp" id="loading" class="htmx-indicator absolute z-10 top-1/2 left-1/2"></img>
                <div class="site-content">

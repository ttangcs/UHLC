<?php
/**
 *
 * @package UHLC
 * Template Name:404
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | 404</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">
        <?php get_header(); ?>
        <div id="inner">
            <h1>Page not found</h1>  
            <p>Click <a href="http://cs.westminstercollege.edu/uhlc/uhlc/index.php">here</a> to go back home.</p>
        </div>
        <?php get_footer(); ?>
    </div>
</body>

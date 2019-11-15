<?php
/**
 *
 * @package UHLC
 * Template Name:Contact
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | Contact</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">
        <?php get_header(); ?>
        <div id="inner">
            <h1 class="alt">Ask a Question</h1>  

            <section id="form">
                <div class="row uniform">

                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="name" value="" placeholder="Name" />
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <input type="email" name="email" id="email" value="" placeholder="Email address" />
                    </div>
                
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                    </div>

                    <!-- Break -->
                    <div class="12u$">
                        <ul class="actions">
                            <li><input id="send" type="button" value="Send Message" onclick="sendEmail();" /></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <?php get_footer(); ?>
    </div>
</body>
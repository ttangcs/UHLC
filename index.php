<?php
/**
 *
 * @package UHLC
 * @subpackage UHLC
 * Template Name: Home`
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | Home</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    <div id="wrapper">
        <div id="inner">

            <div class="row uniform">

                <!-- Mission Statement -->
                <div class="12u$">
                    <div class="box box-color">
                        <h1 class="align-center margin-0">"A place for professionals and the public to join in Understanding the Path to Better Health and Find Quality Health Information"</h1>
                    </div>
                </div>

                <!-- Events -->
                <div class="12u$">
                    <div class="box box-color">
                        <h1 class="align-center">Current Events</h1>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>  
                    </div>
                </div>

                
                <div class="12u$">

                    <!-- Left Column -->
                    <div class="column float-left width-33">

                        <!-- Things To Read -->
                        <div class="box width-100 padding-0">
                            <div class="box height-100 padding-0">
                                <div class="content box-color">
                                    <h1 class="align-center margin-0">Things to read</h1>
                                </div>
                            </div>
                        </div>

                        <!-- Things to Watch  -->
                        <div class="box width-100 padding-0">
                            <div class="box height-100 padding-0">
                                <div class="content box-color">
                                    <h1 class="align-center margin-0">Things to watch</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="column float-right width-66">

                        <!-- Toolkit -->
                        <div class="box width-100 padding-0">
                            <div class="box height-33 padding-0">
                                <div class="content box-color">
                                    <h1 class="align-center margin-0">Toolkit</h1>
                                </div>
                            </div>
                        </div>

                        <!-- Other Trusted Websites -->
                        <div class="box width-100 padding-0">
                            <div class="box height-33 padding-0">
                                <div class="content box-color">
                                    <h1 class="align-center margin-0">Other Trusted Websites</h1>
                                </div>
                            </div>
                        </div>

                        <!-- Ask A Question -->
                        <div class="box width-100 padding-0">
                            <div class="box height-33 padding-0">
                                <div class="content box-color">
                                    <h1 class="align-center margin-0">Ask a Question</h1>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
</body>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description'): wp_title('');?></title>
        <meta name="wordpress template" content="">
        <meta name="kali bah" content="carousel layout">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) here  -->
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">
        
        <!-- load Ink's css from the cdn -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
        <!-- load Ink's javascript files from the cdn -->
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/holder.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ink-all.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/autoload.js"></script>

        <style>

            body {
                background-color: #efefef;
            }
            .wrapper{
                width: 1200px;
                margin: 20px auto;
              border-radius: 2px;
                -webkit-box-shadow: #dddddd 0 1px 1px 0;
                -moz-box-shadow: #dddddd 0 1px 1px 0;
                box-shadow: #dddddd 0 1px 1px 0;
                border: 1px solid #efefef;
              background-color: #FFF;  
            }
            .panel {
/*
                border-radius: 2px;
                -webkit-box-shadow: #dddddd 0 1px 1px 0;
                -moz-box-shadow: #dddddd 0 1px 1px 0;
                box-shadow: #dddddd 0 1px 1px 0;
*/
                padding: 1em;
                background-color: #FFF;
            }
            .bg-b{
                background-color: hsl(0, 0%, 10%);
                color: white !important;
            }
        </style>

    </head>
<body>
<div class="wrapper">
<header class="ink-grid">
    <div class="vertical-space">
        <div class="panel">
            <h1><?php bloginfo('name');?><small><?php bloginfo('description');?></small></h1>
            <nav class="ink-navigation">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => "menu horizontal black"
                    ));?>
            </nav>
        </div>
    </div>
</header>
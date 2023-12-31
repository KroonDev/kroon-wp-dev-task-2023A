<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <?php if (!is_front_page()) { ?>
                <div id="branding">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <?php
                        if (is_front_page() || is_home() || is_front_page() && is_home()) {
                            echo '<h1>';
                        }
                        echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                        if (is_front_page() || is_home() || is_front_page() && is_home()) {
                            echo '</h1>';
                        }
                        ?>
                    </div>
                    <div id="site-description" <?php if (!is_single()) {
                                                    echo ' itemprop="description"';
                                                } ?>><?php bloginfo('description'); ?></div>
                </div>
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    <div id="search"><?php get_search_form(); ?></div>
                </nav>
            <?php } ?>
        </header>
        <div id="container">
            <main id="content" role="main">
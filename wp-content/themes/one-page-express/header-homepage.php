<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/wp-content/uploads/2018/05/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/wp-content/uploads/2018/05/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/wp-content/uploads/2018/05/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/wp-content/uploads/2018/05/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/wp-content/uploads/2018/05/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/wp-content/uploads/2018/05/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/wp-content/uploads/2018/05/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/wp-content/uploads/2018/05/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="/wp-content/uploads/2018/05/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="/wp-content/uploads/2018/05/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="/wp-content/uploads/2018/05/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/wp-content/uploads/2018/05/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="/wp-content/uploads/2018/05/favicon-128.png" sizes="128x128" />
<meta name="Blandthorn Builders" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="/wp-content/uploads/2018/05/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="/wp-content/uploads/2018/05/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="/wp-content/uploads/2018/05/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="/wp-content/uploads/2018/05/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="/wp-content/uploads/2018/05/mstile-310x310.png" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-top homepage <?php one_page_express_header_main_class() ?>" <?php one_page_express_navigation_sticky_attrs() ?>>
    <div class="navigation-wrapper <?php one_page_express_navigation_wrapper_class() ?>">
        <div class="logo_col">
			<img src='https://blandpress-baboosebats.c9users.io/wp-content/uploads/2018/05/blandthorn-b2.png' alt='Blandthorn Builders' Title='Blandthorn Builders' id='blandB'/>
            <?php one_page_express_logo(); ?>
			
        </div>
        <div class="main_menu_col">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'drop_mainmenu',
                'menu_class'     => 'fm2_drop_mainmenu',
                'container_id'   => 'drop_mainmenu_container',
                'fallback_cb'    => 'one_page_express_nomenu_cb',
            ));
            ?>
        </div>
    </div>
</div>

<div id="page" class="site">
    <div class="header-wrapper">
        <div <?php echo one_page_express_background() ?>>
            <?php one_page_express_print_video_container(); ?>
            <?php $desctipion_classes = get_theme_mod('one_page_express_header_content_partial', "content-on-center"); ?>
            <?php $desctipion_classes = apply_filters('one_page_express_header_description_classes', $desctipion_classes); ?>
            <div class="header-description gridContainer <?php echo esc_attr($desctipion_classes); ?>">
                <?php
                $one_page_express_header_content_partial = get_theme_mod('one_page_express_header_content_partial', "content-on-center");
                get_template_part('template-parts/header/hero', $one_page_express_header_content_partial);
                ?>
            </div>
        </div>
        <?php
        one_page_express_header_separator();
        do_action('one_page_express_after_header_content');
        ?>
    </div>


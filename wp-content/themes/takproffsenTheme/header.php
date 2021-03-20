<?php
$logo = get_field("main_logo", "options");
$has_page_banner = get_field("has_page_banner");
if (!$has_page_banner){
    $header_color_class =  " dark-background";
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow"/>

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        ?>
    </title>
    <?php wp_head(); ?>


</head>
<body>


<header class="header <?= $header_color_class ?>">
    <div class="container">
        <div class="header-wrapper">

            <div class="header-logo">
                <a href="<?= get_home_url() ?>">
                    <img src="<?= $logo['url'] ?>">
                </a>
            </div>
            <div class="nav-items">
                <?php
                echo wp_nav_menu( array(
                    'menu'   => 'Primary',
                ));
                ?>
            </div>
        </div>
    </div>

</header>

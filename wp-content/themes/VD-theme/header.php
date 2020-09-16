<?php

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow"/>

    <title>
        <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            echo " | $site_description";
        }
        ?>
    </title>
    <?php wp_head(); ?>


</head>
<body <?php body_class( $body_class ); ?>>


<header>
    <div class="container">
        <h1>Hello world!</h1>
    </div>

</header>

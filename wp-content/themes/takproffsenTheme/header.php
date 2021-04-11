<?php
$logo = get_field( "main_logo", 311 );
$phone_number = get_field('phone_number', 'options');
$contact_button_label = get_field('contact_button_label', 'options');
$contact_button_link = get_field('contact_button_link', 'options');

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
<body>
<header class="header <?php if ( is_front_page() )
	echo 'overlay' ?>">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= get_home_url() ?>">
                <img src="<?= $logo['url'] ?>">
            </a>
            <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="menu-items">
                    <ul class="navbar-nav">
						<?php
						echo wp_nav_menu( array(
							'menu' => 'Primary',
						) );
						?>
                    </ul>
                    <div class="right-part d-md-none">
                        <a href="tel:01017699003" class="call-btn">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 1H7L9 6L6.5 7.5C7.57096 9.67153 9.32847 11.429 11.5 12.5L13 10L18 12V16C18 16.5304 17.7893 17.0391 17.4142 17.4142C17.0391 17.7893 16.5304 18 16 18C12.0993 17.763 8.42015 16.1065 5.65683 13.3432C2.8935 10.5798 1.23705 6.90074 1 3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1"
                                      stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            010-176 99 003
                        </a>
                        <a href="<?= $contact_button_link ?>" class="btn btn-outline">
	                        <?= $contact_button_label ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <a href="tel:<?= $phone_number ?>" class="call-btn">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 1H7L9 6L6.5 7.5C7.57096 9.67153 9.32847 11.429 11.5 12.5L13 10L18 12V16C18 16.5304 17.7893 17.0391 17.4142 17.4142C17.0391 17.7893 16.5304 18 16 18C12.0993 17.763 8.42015 16.1065 5.65683 13.3432C2.8935 10.5798 1.23705 6.90074 1 3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
	                <?= $phone_number ?>
                </a>
                <a href="<?= $contact_button_link ?>" class="btn btn-outline">
	                <?= $contact_button_label ?>
                </a>
            </div>
        </div>
    </nav>

</header>

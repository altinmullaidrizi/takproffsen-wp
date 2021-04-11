<?php
$instagram_label             = get_field( 'instagram_label', 'options' );
$contact_section_label       = get_field( 'contact_section_label', 'options' );
$contact_section_description = get_field( 'contact_section_description', 'options' );
$call_number                 = get_field( 'call_number', 'options' );
$call_label                  = get_field( 'call_label', 'options' );
$email_label                 = get_field( 'email_label', 'options' );
$email                       = get_field( 'email', 'options' );
$hours_label                 = get_field( 'hours_label', 'options' );
$instagram_link              = get_field( 'instagram_link', 'options' );
$facebook_link               = get_field( 'facebook_link', 'options' );
$hours                       = get_field( 'hours', 'options' );
$button_link                 = get_field( 'button_link', 'options' );
$button_label                = get_field( 'button_label', 'options' );

?>

<section class="section-padding instagram-slider">
    <a href="instagram.com">
        <div class="container">
            <div class="row">
                <span><?= $instagram_label ?></span>
                <div class="img-holder">
					<?php
					if ( have_rows( 'instagram_images', 'options' ) ) {
						while ( have_rows( 'instagram_images', 'options' ) ) : the_row();
							$image = get_sub_field( 'image' );
							?>
                            <div class="img-wrapper">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            </div>
						<?php
						endwhile;
					}
					?>
                </div>
            </div>
        </div>
    </a>
</section>

<section class="section-padding work-with-us">
    <span><?= $contact_section_label ?></span>
    <p><?= $contact_section_description ?></p>
    <div class="work-with-us-cards">
        <a href="tel:019 34131 6346">
            <div class="card">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.82353 1H9.47059L12.2941 8.05882L8.76471 10.1765C10.2766 13.2422 12.7578 15.7234 15.8235 17.2353L17.9412 13.7059L25 16.5294V22.1765C25 22.9253 24.7025 23.6435 24.173 24.173C23.6435 24.7025 22.9253 25 22.1765 25C16.6696 24.6653 11.4755 22.3268 7.57435 18.4257C3.67318 14.5245 1.33466 9.33045 1 3.82353C1 3.07468 1.29748 2.35651 1.82699 1.82699C2.35651 1.29748 3.07468 1 3.82353 1"
                          stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.9414 8.05882L25.0002 1" stroke="#CEFF43" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M17.9414 2.41162V8.05868H23.5885" stroke="#CEFF43" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                <span><?= $call_label ?></span>
                <span><?= $call_number ?></span>
            </div>
        </a>
        <a href="mailto:info@takproffsen.com">
            <div class="card">
                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.25 20.0556H3.72222C3.00024 20.0556 2.30784 19.7688 1.79732 19.2582C1.2868 18.7477 1 18.0553 1 17.3333V3.72222C1 3.00024 1.2868 2.30784 1.79732 1.79732C2.30784 1.2868 3.00024 1 3.72222 1H22.7778C23.4998 1 24.1922 1.2868 24.7027 1.79732C25.2132 2.30784 25.5 3.00024 25.5 3.72222V13.9306"
                          stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 3.72217L13.25 11.8888L25.5 3.72217" stroke="black" stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M17.3335 20.0557H25.5002" stroke="#CEFF43" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M21.4165 15.9722L25.4998 20.0555L21.4165 24.1388" stroke="#CEFF43" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span><?= $email_label ?></span>
                <span><?= $email ?></span>
            </div>
        </a>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 ft-col">
                <span class="ft-title">Our Services</span>
				<?php
				echo wp_nav_menu( array(
					'menu' => 'Primary',
				) );
				?>
            </div>
            <div class="col-md-3 ft-col">
                <span class="ft-title">Kontakt</span>
                <span>010-67575-12</span>
                <span>aaa@gmail.com</span>
            </div>
            <div class="col-md-6 ft-flex">
                <div class="ft-col">
                    <span class="ft-title"><?= $hours_label ?></span>
                    <p><?= $hours ?></p>
                </div>
                <a href="<?= $button_link ?>" class="btn"><?= $button_label ?></a>
            </div>
        </div>
        <div class="row">
			<?php
			if ( have_rows( 'location_section_locations', '137' ) ) {
				while ( have_rows( 'location_section_locations', '137' ) ) : the_row();
					$city    = get_sub_field( 'city' );
					$address = get_sub_field( 'address' );
					$contact = get_sub_field( 'contact_info' );
					$map     = get_sub_field( 'map' );
					?>
                    <div class="col-md-3 ft-col">
                        <h3 class="ft-title city"><?= $city ?></h3>
                        <p><?= $address ?>
                            <br> <br>
							<?= $contact ?>
                        </p>
                    </div>
				<?php
				endwhile;
			}
			?>
        </div>
        <div class="row ft-last">
            <div class="col-md-6">
                <span>© 2020 Takproffsen i Södra Sverige A</span>
            </div>
            <div class="col-md-6">
                <span>Follow us on: <a href="<?= $facebook_link ?>">Facebook</a> | <a href="<?= $instagram_link ?>">Instagram</a></span>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</html>
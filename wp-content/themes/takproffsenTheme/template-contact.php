<?php

get_header();

/*
Template Name: Contact Template
*/

?>

<?php
$contact_page_main_heading = get_field( "contact_page_main_heading" );
$contact_description       = get_field( "contact_description" );
$location_section          = get_field( 'location_section' );
?>

<div class="contact-page">
    <section class="main-section section-big-padding">
        <div class="container">
            <div class="row">
                <h1 class="w-100 mobile-main-heading" data-aos="fade-up"><?= $contact_page_main_heading ?></h1>
                <p class="w-md-50 m-auto mobile-p" data-aos="fade-up"><?= $contact_description ?></p>
            </div>
        </div>
    </section>

    <section class="locations-section section-padding" data-aos="fade-up">
        <div class="container">
            <h2 class="w-100 has-text-align-center mb-5 mobile-sub-heading" data-aos="fade-up"><?= $location_section['label'] ?></h2>
            <div class="row">
				<?php
				if ( have_rows( 'location_section_locations' ) ) {
					while ( have_rows( 'location_section_locations' ) ) : the_row();
						$city    = get_sub_field( 'city' );
						$address = get_sub_field( 'address' );
						$contact = get_sub_field( 'contact_info' );
						$map     = get_sub_field( 'map' );
						?>
                        <div class="col-md-4 text-center text-md-left" data-aos="fade-up">
                            <h3 class="city"><?= $city ?></h3>
                            <p><?= $address ?>
                                <br> <br>
								<?= $contact ?>
                            </p>
                            <div class="map-holder" data-aos="fade-up">
                                <iframe src="<?= $map ?>" width="350" height="500" style="border:0;" allowfullscreen=""
                                        loading="lazy">
                                </iframe>
                            </div>
                        </div>
					<?php
					endwhile;
				}
				?>
            </div>
        </div>
    </section>

    <section class="contact-form-section section-padding">
        <div class="container">
            <h2 class="mobile-sub-heading" data-aos="fade-up">Fyll i formulär <br> så återkommer vi</h2>
            <div class="row">
                <div class="col-md-5" data-aos="fade-up">
					<?= do_shortcode( '[contact-form-7 id="85" title="Contact form 1"]' ) ?>
                </div>
                <div class="col-md-7 d-flex align-content-center" data-aos="fade-up">
                    <img src="<?= get_theme_file_uri() ?>/images/bkg-image.png" alt="">
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>

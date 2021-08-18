<?php
$instagram_label             = get_field( 'instagram_label', '311' );
$contact_section_label       = get_field( 'contact_section_label', '311' );
$contact_section_description = get_field( 'contact_section_description', '311' );
$call_number                 = get_field( 'call_number', '311' );
$call_label                  = get_field( 'call_label', '311' );
$email_label                 = get_field( 'email_label', '311' );
$email                       = get_field( 'email', '311' );
$hours_label                 = get_field( 'hours_label', '311' );
$instagram_link              = get_field( 'instagram_link', '311' );
$facebook_link               = get_field( 'facebook_link', '311' );
$hours                       = get_field( 'hours', '311' );
$button_link                 = get_field( 'button_link', '311' );
$button_label                = get_field( 'button_label', '311' );

?>

<section class="section-padding instagram-slider" data-aos="fade-up">
    <a href="instagram.com">
        <div class="container">
            <div class="row">
                <span><?= $instagram_label ?></span>
                <div class="img-holder">
					<?php
					if ( have_rows( 'instagram_images', '311' ) ) {
						while ( have_rows( 'instagram_images', '311' ) ) : the_row();
							$image = get_sub_field( 'image' );
							?>
                            <div class="img-wrapper">
                                <a href="<?= $facebook_link ?>">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </a>
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

<section class="section-padding work-with-us" data-aos="fade-up">
    <span class="mobile-sub-heading mb-2"><?= $contact_section_label ?></span>
    <p class="mobile-sub-p"><?= $contact_section_description ?></p>
    <div class="work-with-us-cards" data-aos="fade-up">
        <a href="tel:019 34131 6346" data-aos="fade-up">
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
        <a href="mailto:info@takproffsen.com" data-aos="fade-up">
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

<footer class="footer" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-3 ft-col">
                <span class="ft-title">VÅRA TJÄNSTER</span>
				<?php
				echo wp_nav_menu( array(
					'menu' => 'Primary',
				) );
				?>
            </div>
            <div class="col-md-3 ft-col">
                <span class="ft-title">Kontakt</span>
                <span><?= $call_number ?></span>
                <span><?= $email ?></span>
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
            <div class="col-md-6 order-first order-md-2">
                <span>Följ oss på 
                    <a href="<?= $facebook_link ?>"  target="_blank" style="margin:0 8px 0 20px;">

<svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.5097 0.00499376L9.39292 0C5.8909 0 3.62709 2.3171 3.62709 5.90762V8.63171H0.490283C0.220127 8.62921 0 8.84894 0 9.1186V13.0637C0 13.3333 0.220127 13.5531 0.490283 13.5531H3.62459V23.5106C3.62459 23.7803 3.84472 24 4.11487 24H8.20473C8.47489 24 8.69502 23.7803 8.69502 23.5106V13.5556H12.3596C12.6298 13.5556 12.8499 13.3358 12.8499 13.0662L12.8524 9.1211C12.8524 8.99126 12.7999 8.86642 12.7098 8.77403C12.6198 8.68165 12.4922 8.62921 12.3621 8.62921H8.69502V6.3196C8.69502 5.21099 8.96017 4.64669 10.4085 4.64669H12.5097C12.7799 4.64669 13 4.42697 13 4.1573V0.494382C13 0.224719 12.7799 0.00499376 12.5097 0.00499376Z" fill="black"/>
</svg>

                    </a>
                    <a href="<?= $instagram_link ?>" target="_blank" style="margin:0 8px;">
            
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.2362 24C12.1566 24 12.0773 24 11.9972 23.9995C10.1161 24.0042 8.37797 23.9564 6.68719 23.8533C5.1375 23.7591 3.72281 23.2233 2.59594 22.3045C1.50844 21.4181 0.765938 20.219 0.389063 18.742C0.0609375 17.4557 0.0435937 16.1934 0.0267188 14.9723C0.015 14.0962 0.00234375 13.0579 0 12.0022C0.00234375 10.9419 0.015 9.90362 0.0271875 9.02752C0.0440625 7.80642 0.0614063 6.54406 0.389531 5.2578C0.766406 3.78029 1.50891 2.58169 2.59641 1.69527C3.72328 0.776513 5.13797 0.240727 6.68812 0.146508C8.37844 0.0438505 10.117 -0.00396243 12.0023 0.000256361C13.8839 -0.00396243 15.6216 0.0438505 17.3123 0.146508C18.862 0.240727 20.2767 0.776513 21.4036 1.69527C22.4911 2.58169 23.2336 3.78076 23.6105 5.2578C23.9386 6.54406 23.9559 7.80689 23.9728 9.02752C23.985 9.90362 23.9977 10.9419 24 11.9975V12.0018C23.9977 13.0574 23.985 14.0957 23.9728 14.9718C23.9559 16.1929 23.9391 17.4553 23.6105 18.7415C23.2336 20.219 22.4911 21.4176 21.4036 22.304C20.2767 23.2228 18.862 23.7586 17.3123 23.8528C15.6928 23.9522 14.0297 24 12.2362 24ZM11.9972 22.1245C13.8478 22.1287 15.547 22.0823 17.198 21.982C18.3698 21.9108 19.3861 21.5306 20.2181 20.8518C20.9873 20.2242 21.5175 19.3584 21.7931 18.2789C22.0664 17.2082 22.0819 16.0588 22.0973 14.947C22.1091 14.0765 22.1217 13.0457 22.1241 12.0004C22.1217 10.9546 22.1091 9.92378 22.0973 9.05377C22.0823 7.94236 22.0664 6.7925 21.7931 5.72187C21.5175 4.64186 20.9878 3.77607 20.2181 3.14888C19.3856 2.47012 18.3698 2.08996 17.198 2.01871C15.5475 1.9184 13.8483 1.87199 12.0019 1.87574C10.1517 1.87152 8.45203 1.91793 6.80156 2.01871C5.62969 2.08996 4.61344 2.47012 3.78141 3.14888C3.01219 3.77654 2.48203 4.64233 2.20641 5.72187C1.93313 6.7925 1.91766 7.94189 1.90219 9.05377C1.89047 9.92472 1.87781 10.9564 1.87547 12.0027C1.87781 13.0447 1.89047 14.076 1.90219 14.9474C1.91719 16.0588 1.93313 17.2087 2.20641 18.2793C2.48203 19.3593 3.01172 20.2251 3.78141 20.8523C4.61391 21.5311 5.62969 21.9112 6.80156 21.9825C8.45203 22.0823 10.1517 22.1292 11.9972 22.1245ZM11.9527 17.8593C8.72203 17.8593 6.09328 15.231 6.09328 11.9999C6.09328 8.76877 8.72203 6.14047 11.9527 6.14047C15.1838 6.14047 17.812 8.76877 17.812 11.9999C17.812 15.231 15.1833 17.8593 11.9527 17.8593ZM11.9527 8.01548C9.75563 8.01548 7.96828 9.80284 7.96828 11.9999C7.96828 14.1969 9.75563 15.9843 11.9527 15.9843C14.1497 15.9843 15.937 14.1969 15.937 11.9999C15.937 9.80284 14.1497 8.01548 11.9527 8.01548ZM18.4683 4.26545C17.6916 4.26545 17.062 4.89499 17.062 5.67171C17.062 6.44844 17.6916 7.07797 18.4683 7.07797C19.245 7.07797 19.8745 6.44844 19.8745 5.67171C19.8745 4.89499 19.245 4.26545 18.4683 4.26545Z" fill="black"/>
</svg>

                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</html>
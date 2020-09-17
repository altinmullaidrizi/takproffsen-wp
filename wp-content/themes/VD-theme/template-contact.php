<?php

get_header();

/*
Template Name: Contact Template
*/

?>

<?php 
    $contact_page_main_heading = get_field("contact_page_main_heading");
    $contact_page_landing = get_field("contact_page_landing");
    $contact_description = get_field("contact_description");
    $map_image = get_field("map_image");
    $address_data = get_field("adress_data");
    $phone_number = get_field("phone_number");
    $working_hours = get_field("working_hours");
    $email = get_field("e-mail");
    $map = get_field("map");
?>

<section class="section main-contact-section section-padding">
    <div class="container">
        <div class="col-md-6">
            <h5 class="module"> <?= $contact_page_landing ?> </h5>
            <h1 class="module"> <?= $contact_page_main_heading ?> </h1>
        </div>
    </div>

</section>

<section class="section contact-info-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="module"> <?= $contact_description ?></p>
                <div class="contact-info-wrapper">
                    <p class="module">Address</p>
                    <div class="contact-info">
                        <img class="module" src="<?= get_template_directory_uri(  )?>/images/location.png">
                        <p class="module"><?= $address_data ?></p>
                    </div>
                </div>
                <div class="contact-info-wrapper">
                    <p class="module">Phone</p>
                    <div class="contact-info">
                        <img class="module" src="<?= get_template_directory_uri(  )?>/images/call.png">
                        <p class="module" ><?= $phone_number ?></p>
                    </div>
                </div>
                <div class="contact-info-wrapper">
                    <p class="module">E-mail</p>
                    <div class="contact-info">
                        <img class="module" src="<?= get_template_directory_uri(  )?>/images/mail.png">
                        <p class="module"><?= $email ?></p>
                    </div>
                </div>
                <div class="contact-info-wrapper">
                    <p class="module">Working Hours</p>
                    <div class="contact-info">
                        <img class="module" src="<?= get_template_directory_uri(  )?>/images/clock.png">
                        <p class="module"><?= $working_hours ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-img module">
                <iframe class="module" src="<?= $map ?>" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contact-form-section">
    <div class="container">
        <h1 class="module">Contact Us</h1>
        <div class="module">
            <?php
                if(have_posts(  )){
                    while(have_posts(  )){
                        the_post(  );
                        the_content( );
                    }
                }
            ?>
        </div>
    </div>
</section>



<?php
get_footer();
?>

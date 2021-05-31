<?php

get_header();

/*
Template Name: Tjänster (Services) Template
*/
$title            = get_field( 'title' );
$paragraph        = get_field( 'paragraph' );
$background_image = get_field( 'background_image' );

?>

<div class="services-page">
    <section class="main-section section-big-padding"
             style="background: url('<?= $background_image['url'] ?>') center/cover no-repeat rgba(0, 0, 0, .7)">
        <div class="container">
            <div class="row">
                <h1 class="w-100 text-white mobile-main-heading" data-aos="fade-up"><?= $title ?></h1>
                <p class="w-md-50 m-auto text-white mobile-p" data-aos="fade-up"><?= $paragraph ?></p>
            </div>
        </div>
    </section>

    <section class="list-services-section section-padding">
		<?php
		$index = 0;
		if ( have_rows( 'services' ) ) {
			while ( have_rows( 'services' ) ) :
				the_row();
				$image       = get_sub_field( 'image' );
				$title       = get_sub_field( 'title' );
				$description = get_sub_field( 'description' );
				$index++;
				if ( $index / 2 == 1) {
					?>
                    <div class="single-service even" data-aos="fade-up">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 description">
                                    <h2 class="mobile-sub-heading"><?= $title ?></h2>
                                    <p class="mobile-sub-p"><?= $description ?></p>
                                    <a href="/kontakt" class="btn">Ta kontakt</a>
                                </div>
                                <div class="col-md-6 img"
                                     style="background-image: url('<?= $image['url'] ?>')">
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				} else {
					?>
                    <div class="single-service" data-aos="fade-up">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 img"
                                     style="background-image: url('<?= $image['url'] ?>')">
                                </div>
                                <div class="col-md-6 description">
                                    <h2 class="mobile-sub-heading"><?= $title ?></h2>
                                    <p class="mobile-sub-p"><?= $description ?></p>
                                    <a href="<?= get_site_url() ?>/kontakt" class="btn">Ta kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				}
				?>
				<?php
			endwhile;
		}
		?>
    </section>
</div>

<?php
get_footer();
?>

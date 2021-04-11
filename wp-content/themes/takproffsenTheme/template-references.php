<?php

get_header();

/*
Template Name: References Template
*/

$title                = get_field( 'title' );
$description          = get_field( 'description' );
$before_after_section = get_field( 'before_after_section' );
?>

<div class="references-page">
    <section class="main-section section-big-padding">
        <div class="container">
            <div class="row">
                <h1 class="w-100"><?= $title ?></h1>
                <p class="w-50 m-auto"><?= $description ?></p>
            </div>
        </div>
    </section>

    <section class="section-padding before-after-section">
        <div class="container">
            <h2><?= $before_after_section['label'] ?></h2>
            <div class="row">
                <div class="col-md-6">
                    <div id="slider" class="beer-slider">
                        <img src="<?= $before_after_section['before_image_1']['url'] ?>"
                             alt="<?= $before_after_section['before_image_1']['alt'] ?>">
                        <div class="beer-reveal">
                            <img src="<?= $before_after_section['after_image_1']['url'] ?>"
                                 alt="<?= $before_after_section['after_image_1']['alt'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="slider2" class="beer-slider">
                        <img src="<?= $before_after_section['before_image_2']['url'] ?>"
                             alt="<?= $before_after_section['before_image_2']['alt'] ?>">
                        <div class="beer-reveal">
                            <img src="<?= $before_after_section['after_image_2']['url'] ?>"
                                 alt="<?= $before_after_section['after_image_2']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="reference-gallery-section section-big-padding">
        <div class="container">
            <div class="row">
                <div class="gallery" id="lightgallery">

					<?php
					if ( have_rows( 'gallery' ) ) {
						while ( have_rows( 'gallery' ) ) : the_row();
							$image = get_sub_field( 'image' );
							?>
                            <a href="<?php echo esc_url( $image['url'] ); ?>">
                                <img src="<?php echo esc_url( $image['url'] ); ?>"
                                     alt="<?php echo esc_url( $image['alt'] ); ?>">
                            </a>
						<?php endwhile;
					}
					?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>

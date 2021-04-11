<?php

get_header();

/*
Template Name: Homepage Template
*/

$main_title            = get_field( "main_title" );
$main_content          = get_field( "main_content" );
$main_background_image = get_field( "main_background_image" );
$main_button_label     = get_field( "main_button_label" );
$main_button_url       = get_field( "main_button_url" );
$main_bottom_text      = get_field( 'main_bottom_text' );
$partners_section      = get_field( 'partners_section' );
$services_section      = get_field( 'services_section' );
$tab_section           = get_field( 'tab_section' );
$comments_section      = get_field( 'comments_section' );
$before_after_section  = get_field( 'before_after_section' );
$big_slider    = get_field( 'big_slider' );

?>
<embed src="<?= get_theme_file_uri() ?>/images/spotAudio.mp3" loop="true" autostart="true" width="2"
       height="0" style="position:absolute;">

<div class="home-page">
    <section class="main-section"
             style="background-image: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 100%), url('<?= get_theme_file_uri( '/images/bkg-image.png' ) ?>')">

        <div class="content">
            <h1><?= $main_title ?></h1>
            <p>
				<?= $main_content ?>
            </p>
            <a href="<?= $main_button_url ?>" class="btn"><?= $main_button_label ?></a>
        </div>
        <div class="bottom-part">
            <span><?= $main_bottom_text ?></span>
        </div>
    </section>

    <section class="section-big-padding partners-sections">
        <div class="container">
            <span><?php echo $partners_section['partners_label']; ?></span>
            <div class="partners-wrapper">
				<?php if ( have_rows( 'partners_section_partners' ) ) {
					while ( have_rows( 'partners_section_partners' ) ) : the_row();
						$image = get_sub_field( 'image' );
						?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
					<?php
					endwhile;
				}
				?>
            </div>
        </div>
    </section>

	<?php
	if ( $services_section ) :
		?>
        <section class="services-section section-padding">
            <div class="container">
                <div class="row">
                    <h2><?= $services_section['title']; ?></h2>
                    <p><?= $services_section['paragraph']; ?></p>
                </div>
                <div class="row">
					<?php if ( have_rows( 'services_section_services' ) ) {
						while ( have_rows( 'services_section_services' ) ) : the_row();
							$image = get_sub_field( 'image' );
							$title = get_sub_field( 'title' );
							$page  = get_sub_field( 'page' );
							?>
                            <div class="col-md-3">
                                <a href="<?= $page ?>">
                                    <div class="service"
                                         style="background: url('<?= $image['url'] ?>') center/cover no-repeat, linear-gradient(179.9deg,#ceff43 .09%,rgba(206,255,67,0) 99.91%)">
                                        <span><?= $title ?></span>
                                        <svg width="30" height="19" viewBox="0 0 30 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 9.33325H27.6667" stroke="white" stroke-width="2.75"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M20.3335 16.6666L27.6668 9.33325" stroke="white"
                                                  stroke-width="2.75"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M20.3335 2L27.6668 9.33333" stroke="white" stroke-width="2.75"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
						<?php
						endwhile;
					}
					?>

                </div>
                <div class="row">
                    <h2><?= $services_section['procesen_title']; ?></h2>
                    <p><?= $services_section['procesen_paragraph']; ?></p>
                </div>
            </div>
        </section>
	<?php endif;

	if ( $tab_section ) :
		?>
        <section class="tab-section section-padding d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list">
                            <ol>
								<?php if ( have_rows( 'tab_section_tabs' ) ) {
									$index = 1;
									while ( have_rows( 'tab_section_tabs' ) ) : the_row();
										$title = get_sub_field( 'title' );
										?>
                                        <li class="tab-click <?php if ( $index == 1 )
											echo 'active' ?>" data-index="<?= $index ?>"><?= $title ?></li>
										<?php
										$index ++;
									endwhile;
								}
								?>
                            </ol>
                            <a href="<?= $tab_section['button_link']; ?>"
                               class="btn"><?= $tab_section['button_label']; ?></a>
                        </div>
                    </div>
					<?php
					if ( have_rows( 'tab_section_tabs' ) ) {
						$index = 1;
						while ( have_rows( 'tab_section_tabs' ) ) : the_row();
							$image = get_sub_field( 'image' );
							?>
                            <div class="col-md-6 bkg-image <?php if ( $index == 1 )
								echo 'active' ?>" data-index="<?= $index ?>"
                                 style="background-image: url('<?= $image['url'] ?>')"></div>
							<?php
							$index ++;
						endwhile;
					}
					?>
                </div>
            </div>
        </section>

        <section class="tab-section-mobile section-padding d-md-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list">
                            <ol>
								<?php if ( have_rows( 'tab_section_tabs' ) ) {
									$index = 1;
									while ( have_rows( 'tab_section_tabs' ) ) : the_row();
										$title = get_sub_field( 'title' );
										?>
                                        <li class="tab-click <?php if ( $index == 1 )
											echo 'active' ?>" data-index="<?= $index ?>"><?= $title ?></li>
										<?php
										$index ++;
									endwhile;
								}
								?>
                            </ol>
                            <a href="<?= $tab_section['button_link']; ?>"
                               class="btn"><?= $tab_section['button_label']; ?></a>
                        </div>
                    </div>
					<?php
					if ( have_rows( 'tab_section_tabs' ) ) {
						$index = 1;
						while ( have_rows( 'tab_section_tabs' ) ) : the_row();
							$image = get_sub_field( 'image' );
							?>
                            <div class="col-md-6 bkg-image <?php if ( $index == 1 )
								echo 'active' ?>" data-index="<?= $index ?>"
                                 style="background-image: url('<?= $image['url'] ?>')"></div>
							<?php
							$index ++;
						endwhile;
					}
					?>
                </div>
            </div>
        </section>
	<?php
	endif;

	if ( $comments_section ) :
		?>
        <section class="references-section section-padding">
            <div class="container">
                <h2> <?= $comments_section['label']; ?> </h2>
                <div class="row">
					<?php if ( have_rows( 'comments_section_comments' ) ) {
						while ( have_rows( 'comments_section_comments' ) ) : the_row();
							$image       = get_sub_field( 'image' );
							$description = get_sub_field( 'description' );
							$link        = get_sub_field( 'link' );
							?>
                            <div class="col-md-4">
                                <a href="$link">
                                    <div class="reference-holder">
                                        <div class="header">
                                            <div class="img-holder"><img
                                                        src="<?= $image['url'] ?>"
                                                        alt="<?= $image['alt'] ?>">
                                            </div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0084 19.8995L4.59163 24L6.00841 15.3151L0 9.16506L8.29161 7.90144L12 0L15.7084 7.90144L24 9.16506L17.9916 15.3151L19.4084 24L12.0084 19.8995Z"
                                                      fill="#F9C63C"/>
                                            </svg>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0084 19.8995L4.59163 24L6.00841 15.3151L0 9.16506L8.29161 7.90144L12 0L15.7084 7.90144L24 9.16506L17.9916 15.3151L19.4084 24L12.0084 19.8995Z"
                                                      fill="#F9C63C"/>
                                            </svg>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0084 19.8995L4.59163 24L6.00841 15.3151L0 9.16506L8.29161 7.90144L12 0L15.7084 7.90144L24 9.16506L17.9916 15.3151L19.4084 24L12.0084 19.8995Z"
                                                      fill="#F9C63C"/>
                                            </svg>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0084 19.8995L4.59163 24L6.00841 15.3151L0 9.16506L8.29161 7.90144L12 0L15.7084 7.90144L24 9.16506L17.9916 15.3151L19.4084 24L12.0084 19.8995Z"
                                                      fill="#F9C63C"/>
                                            </svg>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0084 19.8995L4.59163 24L6.00841 15.3151L0 9.16506L8.29161 7.90144L12 0L15.7084 7.90144L24 9.16506L17.9916 15.3151L19.4084 24L12.0084 19.8995Z"
                                                      fill="#F9C63C"/>
                                            </svg>
                                        </div>
                                        <p><?= $description ?></p>
                                    </div>
                                </a>
                            </div>
						<?php
						endwhile;
					}
					?>
                </div>
            </div>
        </section>
	<?php
	endif;
	if ( $before_after_section ) :
		?>
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
	<?php
	endif;
	if ( $big_slider ) :
	?>
    <section class="section-padding big-slider-section">
        <div class="container">
            <h2><?= $big_slider['label'] ?></h2>
            <div class="row position-relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
						<?php
						if ( have_rows( 'big_slider_images' ) ) {
							while ( have_rows( 'big_slider_images' ) ) : the_row();
								$image = get_sub_field( 'image' );
								?>
                                <div class="swiper-slide">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
							<?php
							endwhile;
						}
						?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next">
                        <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9.33301H27.6667" stroke="black" stroke-width="2.75" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M20.3335 16.6663L27.6668 9.33301" stroke="black" stroke-width="2.75"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.3335 2L27.6668 9.33333" stroke="black" stroke-width="2.75"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 9.33301L2.33333 9.33301" stroke="black" stroke-width="2.75"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.6665 1.99967L2.33317 9.33301" stroke="black" stroke-width="2.75"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.6665 16.6665L2.33317 9.33317" stroke="black" stroke-width="2.75"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</div>
<?php
endif;
?>
<?php
get_footer();
?>

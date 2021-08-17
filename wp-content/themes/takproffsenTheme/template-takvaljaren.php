<?php

get_header();

/*
Template Name: Takvaljaren Template
*/

$main_heading     = get_field( 'main_heading' );
$main_description = get_field( 'main_description' );
$main_label       = get_field( 'main_label' );
$main_paragraph   = get_field( 'main_paragraph' );
$services         = get_field( 'services' );
?>

<div class="customizer-page">
    <section class="main-section section-padding">
        <div class="container">
            <div class="row">
                <h1 class="w-100 mobile-main-heading" data-aos="fade-up"><?= $main_heading ?></h1>
                <p class="w-md-50 m-auto mobile-p" data-aos="fade-up"><?= $main_description ?></p>
            </div>
        </div>
    </section>
    <section class="color-picker-section">
        <div class="container">
            <div class="row home-colors" data-aos="fade-up">
                <div class="col-12 col-lg-4">
                    <ul class="nav nav-pills mb-3 mt-3 building" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link section active" id="pills-roof-tab" data-toggle="pill"
                               href="#pills-roof"
                               role="tab" aria-controls="pills-roof" aria-selected="true"
                               data-text="Siding-shape">Tak</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link section border-tab" id="pills-wall-tab" data-toggle="pill"
                               href="#pills-wall" role="tab" aria-controls="pills-wall" aria-selected="false"
                               data-text="Trim-shape">Fasad</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-roof" role="tabpanel"
                             aria-labelledby="pills-roof-tab">
                            <div class="colors">
                                <div class="color color-one text-dark m-1" data-name="Fjern farve" id="btn1"
                                     style="background-color: #ffffff" data-hex="#ffffff">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Vit
                                </div>
                                <div class="color m-1 color-one" id="btn2" data-name="Mørkebrun"
                                     style="background-color: #493228" data-hex="#493228">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Mörkbrun
                                </div>
                                <div class="color m-1 color-one" id="btn3" data-name="Rødbrun"
                                     style="background-color: #774515" data-hex="#774515">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Rödbrun
                                </div>
                                <div class="color m-1 color-one" id="btn4" data-name="Teglrød"
                                     style="background-color: #AA6829" data-hex="#AA6829">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Tegelröd
                                </div>
                                <div class="color text-dark m-1 color-one" id="btn5" data-name="Lysegrå"
                                     style="background-color: #E5E0D9" data-hex="#E5E0D9">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Ljusgrå
                                </div>
                                <div class="color m-1 color-one" id="btn6" data-name="Skifergå"
                                     style="background-color: #706F73" data-hex="#706F73">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Skifergå
                                </div>
                                <div class="color m-1 color-one" id="btn7" data-name="Antracit"
                                     style="background-color: #242729" data-hex="#242729">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Antracit
                                </div>
                                <div class="color m-1 color-one" id="btn8" data-name="Bordeaux"
                                     style="background-color: #522F2D" data-hex="#522F2D">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Bordeaux
                                </div>
                                <div class="color m-1 color-one" id="btn9" data-name="Oxydrød"
                                     style="background-color: #7C2917" data-hex="#7C2917">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Oxydröd
                                </div>
                                <div class="color m-1 color-one" id="btn10" data-name="Grøn"
                                     style="background-color: #1C473B" data-hex="#1C473B">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Grön
                                </div>
                                <div class="color m-1 color-one" id="btn11" data-name="Blå"
                                     style="background-color: #0E205C" data-hex="#0E205C">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Blå
                                </div>
                                <div class="color m-1 color-one" id="btn12" data-name="Svart"
                                     style="background-color: #000000" data-hex="#000000">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Svart
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-wall" role="tabpanel" aria-labelledby="pills-wall-tab">
                            <div class="colors">
                                <div class="color color-one text-dark m-1" data-name="Fjern farve" id="btn13"
                                     style="background-color: #ffffff" data-hex="#ffffff">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Vit
                                </div>
                                <div class="color m-1 color-one" id="btn14" data-name="Mørkebrun"
                                     style="background-color: #493228" data-hex="#493228">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Mörkbrun
                                </div>
                                <div class="color m-1 color-one" id="btn15" data-name="Rødbrun"
                                     style="background-color: #774515" data-hex="#774515">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Rödbrun
                                </div>
                                <div class="color m-1 color-one" id="btn16" data-name="Teglrød"
                                     style="background-color: #AA6829" data-hex="#AA6829">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Tegelröd
                                </div>
                                <div class="color text-dark m-1 color-one" id="btn17" data-name="Lysegrå"
                                     style="background-color: #E5E0D9" data-hex="#E5E0D9">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Ljusgrå
                                </div>
                                <div class="color m-1 color-one" id="btn18" data-name="Skifergå"
                                     style="background-color: #706F73" data-hex="#706F73">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Skifergå
                                </div>
                                <div class="color m-1 color-one" id="btn19" data-name="Antracit"
                                     style="background-color: #242729" data-hex="#242729">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Antracit
                                </div>
                                <div class="color m-1 color-one" id="btn20" data-name="Bordeaux"
                                     style="background-color: #522F2D" data-hex="#522F2D">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Bordeaux
                                </div>
                                <div class="color m-1 color-one" id="btn22" data-name="Oxydrød"
                                     style="background-color: #7C2917" data-hex="#7C2917">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Oxydröd
                                </div>
                                <div class="color m-1 color-one" id="btn23" data-name="Grøn"
                                     style="background-color: #1C473B" data-hex="#1C473B">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Grön
                                </div>
                                <div class="color m-1 color-one" id="btn23" data-name="Blå"
                                     style="background-color: #0E205C" data-hex="#0E205C">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Blå
                                </div>
                                <div class="color m-1 color-one" id="btn24" data-name="Svart"
                                     style="background-color: #000000" data-hex="#000000">
                                <span class="checkmark">
                                    <img src="<?= get_theme_file_uri() ?>/images/icon.png" alt="">
                                </span>
                                    Svart
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div id="container">
                        <svg id="Siding-svg" class="roof" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 1169 673">
                            <path id="Siding-shape" class="roof"
                                  d="M1042,349s-4.09-8.56-9.3-9.58a31.8,31.8,0,0,0-9.86-13.4s-4.79-10-9.39-11c0,0-9.21-11.44-12.84-13,0,0-5.16-10.32-10.89-13.25,0,0-7.67-11.59-11.16-12.28,0,0-6.84-10-10.74-12.28,0,0,1.25-1.54-11-13.26a48.92,48.92,0,0,0-11.16-12.7s-7.11-9.76-11.16-12.69c0,0-8.79-11.58-11.16-12.84,0,0-9.21-11.86-11-13,0,0-8.46-12.6-11.81-14.14a25.27,25.27,0,0,0-10-12.65l-3-4.49a30.21,30.21,0,0,0-4.56-6.11l-4.88-3.91s.83-9.77-8-8.51c0,0-8.93,3.91-12.14,3.49,0,0-7.1.68-10.6,4A22.37,22.37,0,0,0,833.06,161s-7.24-.1-11.7,1.57c0,0-1.73-2.56-12.61-1.59L807,159l-12,.05-.07-1L781,158v-.92L768,156,766.9,155l-12.82.12L754,154l-13.1.08,0-2-12.63.12-1.47-1.95-12.66-.17v-1.14H700.82l-1-1.9-12.44.72L687,146l-14-.91L671.08,144l-12.09.06-1-1L645,143l-.06-1L631,141.06l-1-1H616l0-2-14,0-.1-1.06-14.79-.3L587,135l-13.94-.91L572,133H557l-1.2-2H542l-1-1.11-14-.86L525.89,128l-14.91,0-1-2-14-1L495,124l-14.79.06-.37-1.06L464,122l-1.08-1.86-15-.14-1-1L431,118.08,430,116.19l-16-1.07-.84-1.07-15.16-.14-1.11-1.86-16.27,0-.8-2.11-16.26.09-.67-2-16.56.1-1.35-2.05-16.49,0-1.28-2.25-15.95-.19-1.82-2.46-16.83-.08L291.21,99H274.33l-1.74-2.08s-20-5.73-19.61,3v5.3L158.28,355.4h9.12L255.87,120h3.34L375,325.17s-.37,13,5.21,9.67l9.11,15.26h6.33l2.84-5.42,206,7.39h2.34l60-152.86,5.86,5.68L616.42,352,678,345.35l3.17,5.68s-5.68,9.14,2.35,10.6l28.25-26.09s6.89,4.33,9.12-10.37L871.68,175l170.88,194.88,2.42-9.58S1049.45,350,1042,349ZM336.19,157.91l-2.93-4.74V135.45s2.93-4,7.4,0l1.12,22.46Z"/>
                            <svg id="Trim-svg" class="wall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 1169 673">
                                <path id="Trim-shape" class="wall"
                                      d="M1034.52,437.91V385.07L867.45,193.63c-6.44,2.24-14.46,0-14.46,0L721,325.21c-2.37,14.66-9.07,10.19-9.07,10.19l-27.21,24.91c-4.88,4.18-6.77-7.26-6.77-7.26l-6.55,6.35h-7.07v-5.77l-10,1.49-4.84,5h-8.93V356.8l-6.32.74-23,2.7-17.24-1v2.65h-8.86v-3l-22.95-1.53V360h-8.51v-3.14H528.05v2.16h-7.39v-2.72H496.73l-1.47,1.47h-4.18l-97.12.44-13.72-23.4a6.35,6.35,0,0,1-4.51-5.13l-.7-4.54-25-44.25V349l-38.32-2.23V270.47l28.63-6.73L323,232.89h-8.62v.93H310l-.9-25.54-22.31-39.53c2,7.84,1.65,18-5.23,29.68a5.65,5.65,0,0,1-8.95,1c-6-6.34-12.62-20.63,4.45-48L269.42,138,226.58,250H209.4l.28,14.9,11,.39-.4,1.05-31.76,83-22.69,6.07,1.52,0,50.93-11V296.14l29-8.18v57l-24.56-1.6.93,8.19L69.46,380l-3,172,155-10.05,43-1.81.68,0,1-132.68L442.8,411V534.1h.09l8.75,1.86,35.53-1.44v-7.68l141.83-1,.87-111.21,56.18,1.11-.18-16.93h6.32V415.4H712.1l1.37,116.47h0v-8l86.41,2.93,235.35-3.25ZM286.05,346.38l-16-1.38V282.75l16-5.95ZM486.89,480V410.47H557.5l2,69.49Zm265.82,14.09-3.91,7.54-13.68-1.26V468.24h17.59Zm108.13-11.3-50.65,1V412.14h47.86l1.26,63.21,1.53,2.93Zm33.21-107.44L818.7,372.8,817,258.38l72,4.74,2.23,106.79,2.79,1.21Zm86.38,105.76H910.1l-.14-4.18-2-1.4-1.4-61.39,70.61,1.25,1.39,59.17,1.82,2.65Z"/>
                                <div class="get-quoute--modal__select--row">
                                    <img id="color--img" src="<?= get_theme_file_uri() ?>/images/color-house.jpg"
                                         alt="">
                                </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="text-center">
                                <button type="button" class="btn btn-primary view-final-home border-0"
                                        data-toggle="modal" data-target="#exampleModal">Få
                                    ditt erbjudande
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Get a quote from our
                            proffesinal team</h5>
                        <button class="close-btn" data-toggle="modal" data-target="#exampleModal">X</button>
                    </div>
                    <div class="modal-body">
						<?= do_shortcode( '[contact-form-7 id="335" title="Chosen Color"]' ) ?>
                        <div class="d-flex">
                            <p class="chosen-colors-text">Colors you have chosen</p>
                            <div class="info-text">
                                <button type="button" class="btn btn-secondary info-button"
                                        data-container="body" data-toggle="popover"
                                        data-placement="top"
                                        data-content="Efter att ha fyllt i formuläret kommer vi snart att kontakta dig med de färger du valt för ditt tak och vägg.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                         height="16" fill="currentColor"
                                         class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="roofColor" id="roofColor"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="wallColor" id="wallColor"></div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button"
                                    class="btn btn-primary view-final-home border-0"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-bs-whatever="@mdo">Få
                                ditt
                                erbjudande
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section section-padding" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <h2 data-aos="fade-up"><?= $main_label ?></h2>
                <p data-aos="fade-up"><?= $main_paragraph ?></p>
            </div>
            <div class="row">
				<?php
				if ( have_rows( 'services' ) ) {
					while ( have_rows( 'services' ) ) :
						the_row();
						$title = get_sub_field( 'title' );
						$image = get_sub_field( 'image' );
						$link  = get_sub_field( 'link' );
						?>
                        <div class="col-md-3" data-aos="fade-up">
                            <a href="<?= $link ?>">
                                <div class="service"
                                     style="background: url('<?= $image['url'] ?>') no-repeat center/cover, linear-gradient(179.9deg,#ceff43 .09%,rgba(206,255,67,0) 99.91%)">
                                    <span><?= $title ?></span>
                                    <svg width="30" height="19" viewBox="0 0 30 19" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 9.33325H27.6667" stroke="white" stroke-width="2.75"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M20.3335 16.6666L27.6668 9.33325" stroke="white" stroke-width="2.75"
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
        </div>
    </section>

</div>

<?php
get_footer();
?>


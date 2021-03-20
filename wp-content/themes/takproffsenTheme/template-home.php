<?php

get_header();

/*
Template Name: Homepage Template
*/

$main_title = get_field("main_title");
$main_content = get_field("main_content");
$main_background_image = get_field("main_background_image");
$main_button_label = get_field("main_button_label");
$main_button_url = get_field("main_button_url");
$about_title = get_field("about_title");
$about_description = get_field("about_description");
$about_content = get_field("about_content");
$partners_title = get_field("partners_title");
$partner_description = get_field("partner_description");

?>
<section class="section section-main section-padding"
         style="background-image: url('<?= $main_background_image['url'] ?>')">
    <div class="container">
        <div class="main-content">
            <h1 class="fadingtitle"><?= $main_title ?></h1>
            <p class="module"><?= $main_content ?></p>
            <a class="module" href="<?= $main_button_url ?>" class="main-btn"><?= $main_button_label ?></a>
        </div>
    </div>
</section>

<section class="section section-about">
    <div class="container">
        <div class="about-us-content">
            <h1 class="module"><?= $about_title ?></h1>
            <h4 class="module"><?php echo wp_trim_words( $about_description, 10, "..."); ?></h4>
            <p class="module"> <?= $about_content ?> </p>
        </div>
    </div>
</section>

<section class="section section-team section-padding">
    <div class="team">
        <?php
        if (have_rows("team")) {
            while (have_rows("team")) : the_row();

                $image = get_sub_field("image");
                $nickname = get_sub_field("nickname");
                ?>
                <div class="team-image-wrapper module">

                    <img class="team-img" src="<?= $image['url'] ?>">
                    <div class="overlay">
                        <p><?= $nickname ?></p>
                    </div>
                </div>
            <?php
            endwhile;
        }
        ?>

    </div>
</section>

<section class="section section-partners section-padding">
    <h2> <?= $partners_title ?> </h2>
    <p> <?= $partner_description ?> </p>
    <div class="swiper-container swiper-container-homepage">
        <div class="swiper-wrapper">
            <?php
            if (have_rows('partner_images')) {
                while (have_rows('partner_images')) : the_row();
                    $partner_image = get_sub_field('parnter_img');
                    ?>
                    <div class="swiper-slide" style="margin: 0 50px;">
                        <img class="module" src="<?= $partner_image['url']; ?>">
                    </div>
                <?php
                endwhile;
            }
            ?>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>


<?php
get_footer();
?>

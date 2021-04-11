<?php

get_header();

/*
Template Name: Om Oss Template
*/

$main_section = get_field('main_section');
$second_section = get_field('second_section');
$mission = get_field('mission');
$goal_vision = get_field('goal_vision');

?>

<div class="aboutus-page">
    <section class="section-big-padding aboutus-main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1><?= $main_section['title'] ?></h1>
                    <p><?= $main_section['content'] ?></p>
                    <a href="<?= $main_section['button_link'] ?>" class="btn"><?= $main_section['button_label'] ?></a>
                </div>
                <div class="col-md-5">
                    <img src=" <?= $main_section['image']['url'] ?>" alt="<?= $main_section['title']['alt'] ?>">
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <span><?= $main_section['bottom_text'] ?></span>
        </div>
    </section>

    <section class="nature-section section-padding"
             style="background-image: url('<?= $second_section['background_image']['url'] ?>')">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="cs-card">
                        <h3><?= $second_section['title'] ?></h3>
                        <p><?= $second_section['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3><?= $mission['title'] ?></h3>
                    <p><?= $mission['description'] ?></p>
                </div>
                <img src="<?= $mission['image']['url'] ?>" alt="<?= $mission['image']['url'] ?>">
            </div>
        </div>
    </section>

    <section class="vision-goal-section section-big-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?= $goal_vision['image']['url'] ?>" alt="<?= $goal_vision['image']['alt'] ?>">
                </div>
                <div class="col-md-6 offset-md-1 vision-goal">
                    <div class="vision">
                        <h3><?= $goal_vision['label_1'] ?></h3>
                        <p><?= $goal_vision['description_1'] ?></p>
                    </div>
                    <div class="goals">
                        <h3><?= $goal_vision['label_2'] ?></h3>
                        <p><?= $goal_vision['description_2'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>

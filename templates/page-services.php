<?php
/*
    Template Name: Services
*/
?>


<?php
    get_header();
?>

<section class="about" id="about">
    <div class="container">
        <div class="about__wrapper">
            <h2 class="about__title section-title"><?php the_field('about_title');?></h2>
            <ul class="about__list">
                <li class="about__list-item">
                    <h3><strong><?php the_field('about_item_1');?></strong></h3>
                </li>
                <li class="about__list-item">
                    <h3><?php the_field('about_item_2');?></h3>
                </li>
                <li class="about__list-item">
                    <h3><?php the_field('about_item_3');?></h3>
                </li>
                <li class="about__list-item">
                    <h3><?php the_field('about_item_4');?></h3>
                </li>
                <li class="about__list-item">
                    <h3><?php the_field('about_item_5');?></р3>
                </li>
                <li class="about__list-item">
                    <h3><?php the_field('about_item_6');?></h3>
                </li>
                <li class="about__list-item">
                    <h3><strong><?php the_field('about_item_7');?></strong></h3>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php
    get_footer();
?>
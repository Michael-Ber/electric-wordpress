<?php
/*
    Template Name: Contacts
*/
?>

<?php
    get_header();
?>

<section class="contacts" id="contacts" style="background:url('<?php the_post_thumbnail_url();?>') center center/cover no-repeat">
    <div class="container">
        <h2 class="contacts__title section-title"><?php the_field('contacts_title');?></h2>
        <div class="contacts__wrapper">
            <div class="contacts__left">
                <div class="contacts__list-wrapper">
                    <span class="contacts__list-name"><?php the_field('contacts_links');?></span>
                    
                    <ul class="contacts__list">

                        <?php 
                            $socials = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'socials',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $socials as $post ){
                                setup_postdata( $post );
                                ?>
                                <li class="contacts__item">
                                    <a href="<?php the_field('social_link');?>">
                                        <?php the_post_thumbnail();?>
                                    </a>
                                </li>

                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            
                            ?>
                    </ul>
                </div>
                <p class="contacts__mail">
                    <span class="contacts__str"><?php the_field('contacts_form');?> <span
                            class="contacts__finger"><?php the_field('hand_animated');?></span></span>
                </p>
            </div>
            <div class="contacts__right">
                <div class="contacts__form">
                    <?php echo do_shortcode('[contact-form-7 id="105" title="Форма обратной связи"]');?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
    get_footer();
?>
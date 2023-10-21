

    <?php 
        get_header();
    ?>

    <main>
        <!-- MAIN -->

        <section class="main">
            <div class="main__img">
                <!-- <img src="<?php the_field('main__img')?>" alt="Электромонтаж, электролаборатория"> -->

                <?php 
                    $image = get_field('main__img');
                    if(!empty($image)): ?>
                    <img 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>">
                <?php endif
                ?>
            </div>
            <div class="container">
                <div class="main__wrapper">

                    <h1 class="main__title section-title"><?php the_field('main__title');?></h1>
                    <h2 class="main__subtitle"><?php the_field('main__subtitle_1');?></h2>
                    <h2 class="main__subtitle"><?php the_field('main__subtitle_2');?></h2>
                    <h2 class="main__subtitle"><?php the_field('main__subtitle_3');?></h2>
                    <?php 
                        $btn = get_field('main_btn');
                        if( $btn === 'on') {?>
                            <a href="<?php the_field('main_link');?>" class="main__link btn" aria-label="ссылка для перехода к секции обо мне">Подробнее<span></span></a>
                        <?php
                        }
                        ?>

                    
                </div>
            </div>
        </section>
        <!-- /MAIN -->


        <!-- SKILLS -->

        <section class="skills" id="skills">
            <div class="container">
                <div class="skills__wrapper">
                    <h2 class="skills__title section-title"><?php the_field('skills_title');?></h2>
                    <ul class="skills__list">

                        <?php 
                            $skills = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'skills',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $skills as $post ){
                                setup_postdata( $post );
                                ?>
                                    <li class="skills__item">
                                        <div class="skills__img"><img src="<?php the_field('skills_img');?>"
                                                alt="<?php the_title();?>"></div>
                                        <p class="skills__descr-sec-var"><strong><?php the_title();?></strong></p>
                                    </li>
                                <?php
                            }

                            wp_reset_postdata(); // сброс
                        
                        ?>

                    </ul>
                </div>
            </div>
        </section>

        <!-- /SKILLS -->

        <!-- ABOUT -->

        <!-- <section class="about" id="about">
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
        </section> -->

        <!-- /ABOUT -->

        <!-- CONTACTS -->

        <!-- <section class="contacts" id="contacts">
            <div class="container">
                <h2 class="contacts__title section-title">Связаться со мной</h2>
                <div class="contacts__wrapper">
                    <div class="contacts__left">
                        <div class="contacts__list-wrapper">
                            <span class="contacts__list-name">Ссылки для связи:</span>
                            <ul class="contacts__list">
                                <li class="contacts__item">
                                    <a href="<?php the_field('whatsapp', 2);?>" class="contacts__link"
                                        aria-label="ссылка для перехода в чат whatsapp">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="whatsapp">
                                    </a>
                                </li>
                                <li class="contacts__item">
                                    <a href="<?php the_field('viber');?>" class="contacts__link"
                                        aria-label="ссылка для перехода к чату в viber">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/viber.svg" alt="viber">
                                    </a>
                                </li>
                                <li class="contacts__item">
                                    <a href="<?php the_field('telegram');?>" class="contacts__link"
                                        aria-label="ссылка для перехода к чату в telegram">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.svg" alt="telegram">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="contacts__mail">
                            <span class="contacts__str">или оставьте свои контактные данные, используя форму <span
                                    class="contacts__finger">&#128073;</span></span>
                        </p>
                    </div>
                    <div class="contacts__right">
                        <div class="contacts__form">
                            <?php echo do_shortcode('[contact-form-7 id="105" title="Форма обратной связи"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- /CONTACTS -->
    </main>

<?php 
    get_footer();
?>

    


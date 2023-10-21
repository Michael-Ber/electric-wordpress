<!-- FOOTER -->

<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__social">

                    <a href="<?php the_field('whatsapp', 2);?>" class="footer__link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="whatsapp">
                    </a>


                    <a href="<?php the_field('viber');?>" class="footer__link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/viber.svg" alt="viber">
                    </a>


                    <a href="<?php the_field('telegram');?>" class="footer__link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.svg" alt="telegram">
                    </a>

                </div>
                <div class="footer__contacts contacts-footer">
                    <div class="contacts-footer__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1571.5870820636376!2d101.6060281823057!3d56.1474257257944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ce34e888aa14baf%3A0x6bc36cd16a4f5c18!2z0YPQuy4g0K7QttC90LDRjywg0JHRgNCw0YLRgdC6LCDQmNGA0LrRg9GC0YHQutCw0Y8g0L7QsdC7LiwgNjY1NzE3!5e0!3m2!1sru!2sru!4v1687155759096!5m2!1sru!2sru"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="contacts-footer__addr addr-footer">
                        <div class="addr-footer__item">
                            <p class="addr-footer__title">Адрес</p>
                            <address class="addr-footer__content"><?php the_field('address', 2);?></address>
                        </div>
                        <div class="addr-footer__item">
                            <p class="addr-footer__title">Телефон</p>
                            <p class="addr-footer__content">
                                <a href="tel:<?php the_field('phone_href', 2)?>" class="addr-footer__link"><?php the_field('phone_beauty', 2)?></a>
                            </p>
                        </div>
                        <div class="addr-footer__item">
                            <p class="addr-footer__title">E-mail</p>
                            <p class="addr-footer__content">
                                <a href="mailto:<?php the_field('mail', 2);?>" rel="reply-to"
                                    class="addr-footer__link"><?php the_field('mail', 2); ?></a>
                            </p>
                        </div>
                    </div>
                    <p class="contacts-footer__copyright">&#169; 2009-2023 гг. Регион-электро г.Братск</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- /FOOTER -->

    <?php 
        wp_footer();
    ?>
</body>

</html>
<footer class="footer">
        <ul class="footer__menu">
            <li class="footer__link"><a href="#">Ana Sayfa</a></li>
            <li class="footer__link"><a href="#">Hakkımızda</a></li>
            <li class="footer__link"><a href="#">Ekibimiz</a></li>
            <li class="footer__link"><a href="#">Duyurular</a></li>
            <li class="footer__link"><a href="#">Makaleler</a></li>
            <li class="footer__link"><a href="#">Etkinlikler</a></li>
            <li class="footer__link"><a href="#">Techbilgi Köşesi</a></li>
            <li class="footer__link"><a href="#">İletişim</a></li>
        </ul>
        <div class="container">
            <div class="footer__logo">
                <?php $logo_img = '';
                    if( $custom_logo_id = get_theme_mod('custom_logo') ){
                        $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                            'class'    => 'custom-logo',
                            'itemprop' => 'logo',
                        ) );
                    }

                echo $logo_img; ?>
            </div>
            <div class="title footer__title"><?php the_field('footer_title'); ?></div>
            <div class="footer__descr">
                <?php the_field('footer_descr'); ?>
            </div>
            <div class="footer__wrapper">
                <a href="<?php the_field('social_twitter', 2) ?>" target="_blank" class="footer__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.svg" alt="twitter" class="footer__img">
                </a>
                <a href="<?php the_field('social_instagram', 2) ?>" target="_blank" class="footer__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="instagram" class="footer__img">
                </a>
                <a href="<?php the_field('social_youtube', 2) ?>" target="_blank" class="footer__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/youtube.svg" alt="youtube" class="footer__img">
                </a>
            </div>
        </div>
        <div class="footer__address"><?php the_field('footer_address', 2) ?></div>
            <div class="footer__bottom">
                <div class="footer__author">
                    <div class="footer__developer">Developed by <a target="_blank" href="<?php the_field('social_linkedin', 2); ?>">ÜTECH</a></div>
                </div>
                <div class="footer__copyright">Tüm Hakları Saklıdır © <?php the_field('copywrite', 2); ?> <span>ÜTECH</span></div>
            </div>
    </footer>

    

    <?php
        wp_footer()
    ?>
</body>
</html>
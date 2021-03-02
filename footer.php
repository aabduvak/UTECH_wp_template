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
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/logo.png" alt="logo">
            </div>
            <div class="title footer__title">Üsküdar Üniversitesi<br>Teknoloji Kulübü</div>
            <div class="footer__descr">
                Üsküdar Üniversitesi Mühendislik fakültesinde faaliyetlerini yürüten araştırmacı, teknolojik, üretken, genç mühendisler olarak tüm fakültelerden bireyleri içinde barındıran Üsküdar Üniversitesi Teknoloji Kulübüyüz. <br>ÜTECH
            </div>
            <div class="footer__wrapper">
                <a href="https://twitter.com/technouskudar" target="_blank" class="footer__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.png" alt="twitter" class="footer__img">
                </a>
                <a href="https://www.instagram.com/technouskudar/" target="_blank" class="footer__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.png" alt="instagram" class="footer__img">
                </a>
                <a href="https://www.youtube.com/channel/UChbV8hHG1ByoyOxS3UVdE-A" target="_blank" class="footer__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/youtube.png" alt="youtube" class="footer__img">
                </a>
            </div>
        </div>
        <div class="footer__address">Üsküdar / İstanbul / TÜRKİYE</div>
            <div class="footer__bottom">
                <div class="footer__author">
                    <div class="footer__developer">Developed by <a target="_blank" href="https://www.linkedin.com/company/uskudar-university-technology-clubs">ÜTECH</a></div>
                </div>
                <div class="footer__copyright">Tüm Hakları Saklıdır © 2021 <span>ÜTECH</span></div>
            </div>
    </footer>

    

    <?php
        wp_footer()
    ?>
</body>
</html>
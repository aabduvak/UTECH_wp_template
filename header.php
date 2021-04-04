<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    
    <meta name="title" content="TECHNOUSKUDAR | Üsküdar Üniversitesi Teknoloji Kulübü">
    <meta name="description" content="Üsküdar Üniversitesi Mühendislik fakültesinde faaliyetlerini yürüten araştırmacı, teknolojik, üretken, genç mühendisler olarak tüm fakültelerden bireyleri içinde barındıran Üsküdar Üniversitesi Teknoloji Kulübüyüz.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://technouskudar.com/">
    <meta property="og:title" content="TECHNOUSKUDAR | Üsküdar Üniversitesi Teknoloji Kulübü">
    <meta property="og:description" content="Üsküdar Üniversitesi Mühendislik fakültesinde faaliyetlerini yürüten araştırmacı, teknolojik, üretken, genç mühendisler olarak tüm fakültelerden bireyleri içinde barındıran Üsküdar Üniversitesi Teknoloji Kulübüyüz.">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://technouskudar.com/">
    <meta property="twitter:title" content="TECHNOUSKUDAR | Üsküdar Üniversitesi Teknoloji Kulübü">
    <meta property="twitter:description" content="Üsküdar Üniversitesi Mühendislik fakültesinde faaliyetlerini yürüten araştırmacı, teknolojik, üretken, genç mühendisler olarak tüm fakültelerden bireyleri içinde barındıran Üsküdar Üniversitesi Teknoloji Kulübüyüz.">
    <meta property="twitter:image" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

    <?php 
        wp_head();
    ?>
</head>
<body>
    <header class="other-header">
        <div class="menu">
            <div class="menu__block">
                <div class="menu__close">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.1568 14.4999L28.4489 3.20755C29.1837 2.47303 29.1837 1.28541 28.4489 0.550891C27.7144 -0.18363 26.5267 -0.18363 25.7922 0.550891L14.4998 11.8433L3.20781 0.550891C2.47295 -0.18363 1.28567 -0.18363 0.551149 0.550891C-0.183716 1.28541 -0.183716 2.47303 0.551149 3.20755L11.8432 14.4999L0.551149 25.7923C-0.183716 26.5268 -0.183716 27.7144 0.551149 28.449C0.917206 28.8154 1.39852 28.9994 1.87948 28.9994C2.36045 28.9994 2.84141 28.8154 3.20781 28.449L14.4998 17.1566L25.7922 28.449C26.1586 28.8154 26.6396 28.9994 27.1205 28.9994C27.6015 28.9994 28.0825 28.8154 28.4489 28.449C29.1837 27.7144 29.1837 26.5268 28.4489 25.7923L17.1568 14.4999Z" fill="white"/>
                    </svg>
                </div>
    
                <nav>
                    <?php
                        wp_nav_menu( [
                            'menu'            => 'Secondary', 
                            'container'       => false,
                            'menu_class'      => 'menu__list',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
                            'depth'           => 1
                        ] );
                    ?>
                </nav>
    
                <div class="menu__social">
                    <a href="<?php the_field('social_twitter', 2) ?>" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.svg" alt="twitter" class="header__img">
                    </a>
                    <a href="<?php the_field('social_instagram', 2) ?>" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="instagram" class="header__img">
                    </a>
                    <a href="<?php the_field('social_youtube', 2) ?>" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/youtube.svg" alt="youtube" class="header__img">
                    </a>
                </div>
            </div>
        <div class="menu__overlay"></div>
    </div>

    <div class="hamburger">
        <span></span>
        <span class="long"></span>
        <span></span>
    </div>

    <div class="container">
        <nav class="other-header__content">
            <div class="other-header__logo">
                <?php the_custom_logo( ); ?>
            </div>
            <div class="title other-header__title">
                <span>Üsküdar Üniversitesi</span><br>
                TEKNOLOJI KULÜBÜ
            </div>
            <div class="other-header__flag">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/tr_flag.gif" alt="logo">
            </div>
            <?php
                wp_nav_menu( [
                    'menu'            => 'Main', 
                    'container'       => false,
                    'menu_class'      => 'other-header__menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="other-header__menu">%3$s</ul>',
                    'depth'           => 1
                ] );
            ?>
            <div class="other-header__wrapper">
                <a href="<?php the_field('social_twitter', 2) ?>" target="_blank" class="other-header__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.svg" alt="twitter" class="other-header__img">
                </a>
                <a href="<?php the_field('social_instagram', 2) ?>" target="_blank" class="other-header__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="instagram" class="other-header__img">
                </a>
                <a href="<?php the_field('social_youtube', 2) ?>" target="_blank" class="other-header__social">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/youtube.svg" alt="youtube" class="other-header__img">
                </a>
                
            </div>
        </nav>
    </div>
</header>
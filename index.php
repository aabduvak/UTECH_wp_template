<?php 
    get_header()
?>
<body>
    <section class="promo">
        <div class="menu">
            <div class="menu__block">
                <div class="menu__close">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.1568 14.4999L28.4489 3.20755C29.1837 2.47303 29.1837 1.28541 28.4489 0.550891C27.7144 -0.18363 26.5267 -0.18363 25.7922 0.550891L14.4998 11.8433L3.20781 0.550891C2.47295 -0.18363 1.28567 -0.18363 0.551149 0.550891C-0.183716 1.28541 -0.183716 2.47303 0.551149 3.20755L11.8432 14.4999L0.551149 25.7923C-0.183716 26.5268 -0.183716 27.7144 0.551149 28.449C0.917206 28.8154 1.39852 28.9994 1.87948 28.9994C2.36045 28.9994 2.84141 28.8154 3.20781 28.449L14.4998 17.1566L25.7922 28.449C26.1586 28.8154 26.6396 28.9994 27.1205 28.9994C27.6015 28.9994 28.0825 28.8154 28.4489 28.449C29.1837 27.7144 29.1837 26.5268 28.4489 25.7923L17.1568 14.4999Z" fill="white"/>
                    </svg>
                </div>

                <div class="menu__lang">
                    <a href="#" class="menu__lang-item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/turkey.png" alt="türkçe">
                    </a>
                    <a href="#" class="menu__lang-item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/en.png" alt="english">
                    </a>
                </div>
    
                <nav>
                    <ul class="menu__list">
                        <li class="menu__link"><a href="#">Ana Sayfa</a></li>
                        <li class="menu__link"><a href="#">Hakkımızda</a></li>
                        <li class="menu__link"><a href="#">Ekibimiz</a></li>
                        <li class="menu__link"><a href="#">Duyurular</a></li>
                        <li class="menu__link"><a href="#">Makaleler</a></li>
                        <li class="menu__link"><a href="#">Techbilgi Köşesi</a></li>
                        <li class="menu__link"><a href="#">İletişim</a></li>
                    </ul>
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

        <div class="languages">
            <a href="#" class="languages__item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/turkey.png" alt="türkçe">
            </a>
            <a href="#" class="languages__item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/en.png" alt="english">
            </a>
        </div>
        <div class="container">
            <header class="header">
                <ul class="header__menu">
                    <li class="header__link"><a href="#">Ana Sayfa</a></li>
                    <li class="header__link"><a href="#">Hakkımızda</a></li>
                    <li class="header__link"><a href="#">Ekibimiz</a></li>
                    <li class="header__link"><a href="#">Duyurular</a></li>
                    <li class="header__link"><a href="#">Makaleler</a></li>
                    <li class="header__link"><a href="#">Etkinlikler</a></li>
                    <li class="header__link"><a href="#">Techbilgi Köşesi</a></li>
                    <li class="header__link"><a href="#">İletişim</a></li>
                </ul>
                <div class="header__wrapper">
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
            </header>

            <div class="promo__logo">
                <?php $logo_img = '';
                if( $custom_logo_id = get_theme_mod('custom_logo') ){
                    $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                        'class'    => 'custom-logo',
                        'itemprop' => 'logo',
                    ) );
                }

                echo $logo_img; ?>
            </div>

            <h2 class="subtitle promo__subtitle"><?php the_field('promo_subtitle'); ?></h2>
            <h1 class="title promo__title"><?php the_field('promo_title'); ?></h1>

            <div class="promo__descr">
                <?php the_field('promo_descr'); ?>
            </div>
            <a class="btn promo__btn" style="width: 150px; text-decoration: none;" target="_blank" href="<?php the_field('promo_btn-link') ?>">
                <?php the_field('promo_btn-text'); ?>
            </a>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/users.png" alt="users" class="promo__user">
            <div class="promo__count">200</div>
            <div class="promo__text">üye sayısı</div>
        </div>
    </section>

    <div class="main">
        <div class="container">
            <div data-url="<?php the_field('youtube_id'); ?>" class="main__link play">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/play.png" alt="play" class="main__img">
            </div>
        </div>
    </div>

    <section id="announcements" class="announcements content">
        <div class="container">
            <h2 class="title content__title"><?php the_field('announce_title'); ?></h2>
            <div class="subtitle content__subtitle">
                <?php the_field('announce_descr'); ?>
            </div>
            <div class="content__wrapper">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name' => 'announcement_posts',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="content__item"">
                                <a href="#" class="content__item-img">
                                    <img src="<?php 
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail_url();
                                    } else {
                                        echo get_template_directory_uri() . '/assets/icons/no-image.png';
                                    }
                                    ?>" alt="news">
                                </a>
                                <div class="content__item-descr">
                                    <div class="subtitle content__item-subtitle"><?php the_title(); ?></div>
                                    <div class="content__item-text" >
                                        <?php the_field('post_descr'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <a href="#" class="btn content__btn">TÜM DUYURULAR</a>
        </div>
    </section>

    <section id="articles" class="articles content">
        <div class="container">
            <h2 class="title content__title"><?php the_field('articles_title'); ?></h2>
            <div class="subtitle content__subtitle">
                <?php the_field('articles_descr'); ?>
            </div>
            <div class="content__wrapper">
                <?php 
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => 3,
                        'category_name' => 'article_posts',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        // формат вывода the_title() ...
                        ?>
                            <div class="content__item"">
                                <a href="#" class="content__item-img">
                                    <img src="<?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail_url();
                                        } else {
                                            echo get_template_directory_uri() . '/assets/icons/no-image.png';
                                        }
                                    ?>" alt="news">
                                </a>
                                <div class="content__item-descr">
                                    <div class="subtitle content__item-subtitle"><?php the_title(); ?></div>
                                    <div class="content__item-text" >
                                        <?php the_field('post_descr'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
            </div>
            <button class="btn content__btn">TÜM Makaleler</button>
        </div>
    </section>

    <section id="events" class="events content">
        <div class="container">
            <h2 class="title content__title"><?php the_field('events_title'); ?></h2>
            <div class="subtitle content__subtitle">
                <?php the_field('events_descr'); ?>
            </div>
            <div class="content__wrapper">
            <?php 
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => 3,
                        'category_name' => 'event_posts',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="content__item"">
                                <a href="#" class="content__item-img">
                                    <img src="<?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail_url();
                                        } else {
                                            echo get_template_directory_uri() . '/assets/icons/no-image.png';
                                        }
                                    ?>" alt="news">
                                </a>
                                <div class="content__item-descr">
                                    <div class="subtitle content__item-subtitle"><?php the_title(); ?></div>
                                    <div class="content__item-text" >
                                        <?php the_field('post_descr'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
            </div>
            <button class="btn content__btn">TÜM Etkinlikler</button>
        </div>
    </section>

    <div class="overlay">
        <div class="video">
            <div id="frame"></div>
            <div class="close">&times;</div>
        </div>
    </div>

<?php 
    get_footer( );
?>
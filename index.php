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
                    <a href="https://twitter.com/technouskudar" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.png" alt="twitter" class="header__img">
                    </a>
                    <a href="https://www.instagram.com/technouskudar/" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.png" alt="instagram" class="header__img">
                    </a>
                    <a href="https://www.youtube.com/channel/UChbV8hHG1ByoyOxS3UVdE-A" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/youtube.png" alt="youtube" class="header__img">
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
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/en.png" alt="türkçe">
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
                    <a href="https://twitter.com/technouskudar" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.png" alt="twitter" class="header__img">
                    </a>
                    <a href="https://www.instagram.com/technouskudar/" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.png" alt="instagram" class="header__img">
                    </a>
                    <a href="https://www.youtube.com/channel/UChbV8hHG1ByoyOxS3UVdE-A" target="_blank" class="header__social">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/youtube.png" alt="youtube" class="header__img">
                    </a>
                </div>
            </header>

            <div class="promo__logo">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/logo.png" alt="logo">
            </div>

            <h2 class="subtitle promo__subtitle">Üsküdar üniversitesi</h2>
            <h1 class="title promo__title">TEKNOLOJİ KULÜBÜ</h1>

            <div class="promo__descr">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quis magnam hic sapiente sed qui reiciendis dignissimos suscipit rem quisquam corporis non, pariatur et recusandae Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi magni ea accusamus nesciunt possimus temporibus tenetur labore, optio ipsa officiis ducimus architecto cupiditate! Quisquam tempore voluptates repellendus blanditiis, fuga deleniti.
            </div>
            <button class="btn promo__btn">EKİBİMİZE KATIL</button>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/users.png" alt="users" class="promo__user">
            <div class="promo__count">200</div>
            <div class="promo__text">üye sayısı</div>
        </div>
    </section>

    <div class="main">
        <div class="container">
            <div data-url="N2K-BYmc88Y" class="main__link play">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/play.png" alt="play" class="main__img">
            </div>
        </div>
    </div>

    <section id="announcements" class="announcements content">
        <div class="container">
            <h2 class="title content__title">Duyurular</h2>
            <div class="subtitle content__subtitle">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quis rerum facere itaque ducimus temporibus nulla dolorem facilis, velit ipsa officia, nihil reprehenderit accusamus? Unde aliquid dolore minima ullam modi!
            </div>
            <div class="content__wrapper">
                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Duyuru 1</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>

                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Duyuru 2</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>

                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Duyuru 3</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn content__btn">TÜM DUYURULAR</button>
        </div>
    </section>

    <section id="articles" class="articles content">
        <div class="container">
            <h2 class="title content__title">Makaleler</h2>
            <div class="subtitle content__subtitle">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quis rerum facere itaque ducimus temporibus nulla dolorem facilis, velit ipsa officia, nihil reprehenderit accusamus? Unde aliquid dolore minima ullam modi!
            </div>
            <div class="content__wrapper">
                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Makale 1</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>

                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Makale 2</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>

                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Makale 3</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn content__btn">TÜM Makaleler</button>
        </div>
    </section>

    <section id="events" class="events content">
        <div class="container">
            <h2 class="title content__title">Etkinlikler</h2>
            <div class="subtitle content__subtitle">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quis rerum facere itaque ducimus temporibus nulla dolorem facilis, velit ipsa officia, nihil reprehenderit accusamus? Unde aliquid dolore minima ullam modi!
            </div>
            <div class="content__wrapper">
                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Etkinlik 1</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>

                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Etkinlik 2</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>

                <div class="content__item"">
                    <a href="#" class="content__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news.jpg" alt="news">
                    </a>
                    <div class="content__item-descr">
                        <div class="subtitle content__item-subtitle">Örnek Etkinlik 3</div>
                        <div class="content__item-text" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde facilis iure recusandae ex possimus alias accusantium soluta dicta totam excepturi quasi ut, saepe voluptatem natus praesentium ea at fuga perspiciatis.
                        </div>
                    </div>
                </div>
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
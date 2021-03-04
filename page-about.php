<?php 
/* 
Template Name: Hakkimizda
*/
?>

<?php
    get_header();
?>

<section class="about">
    <div class="container">
        <h1 class="title about__title">Hakkımızda</h1>
        <div class="about__wrapper">
            <div class="about__img">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/misionvision.jpg" alt="about">
            </div>
            <div class="about__descr">
                <?php 
                    
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name' => 'about',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="about__item">
                                <div class="title about__item-title"><?php the_title(); ?></div>
                                <div class="about__item-text">
                                    <?php the_field('about_descr'); ?>
                                </div>
                            </div>
                        <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
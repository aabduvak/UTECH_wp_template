<?php 
/* 
Template Name: Sponsorlarımız
*/
?>

<?php
    get_header();
?>

<section class="sponsors">
    <div class="container">
        <h1 class="title page-content__title"><?php the_title(); ?></h1>

        <div class="sponsors__wrapper">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name' => 'sponsors',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <figure class="sponsors__item">
                            <a href="<?php the_field('sponsors_link'); ?>" class="sponsors__link">
                                <img src="<?php the_field('sponsors_img') ?>" alt="sponsors" class="sponsors__img">
                            </a>
                        </figure>
                    <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
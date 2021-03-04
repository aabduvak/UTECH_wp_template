<?php 
/* 
Template Name: Postlar
*/
?>

<?php
    get_header();
?>

<section class="announcements page-content">
    <div class="container">
        <h1 class="title page-content__title"><?php the_field('page_title');?></h1>

        <div class="page-content__wrapper">
            <?php 
                $post_category = get_field('page_category');
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name' => $post_category,
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="page-content__item">
                            <a href="<?php echo get_permalink(); ?>" class="page-content__img">
                                <img src="<?php the_field('post_img') ?>" alt="announcement">
                            </a>
                            <div class="page-content__descr">
                                <div class="title page-content__subtitle"><?php the_title(); ?></div>
                                <div class="page-content__text">
                                    <?php the_field('post_descr'); ?>
                                </div>
                                <a href="<?php echo get_permalink(); ?>" style="width: 180px;text-align: center;text-decoration: none;" class="btn page-content__btn">Devamını Oku</a>
                            </div>
                        </div>
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
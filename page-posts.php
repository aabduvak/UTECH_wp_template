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
                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
                $post_category = get_field('page_category');
                $posts= new WP_Query(array(
                    'post_type'=> 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'category_name' => $post_category,
                ));
                
                if($posts->have_posts()) : 
                    while($posts->have_posts())  : $posts->the_post(); ?>
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
                    <?php endwhile; ?>
                </div>
                <div class="mt-30">
                    <?php
                        $GLOBALS['wp_query'] = $posts; 

                        the_posts_pagination(
                            array(
                                'mid_size' => '2',
                                'prev_text' => '<i class="fa fa-hand-o-left"></i> <<',
                                'next_text' => '>> <i class="fa fa-hand-o-right"></i>',
                                'screen_reader_text' => ' '
                            )
                        );
                    ?>
                </div>
                <?php else :?>
                    <h3><?php _e('404 Error&#58; Not Found', 'Bangladesh Parjatan'); ?></h3>
                <?php endif; ?>
                <?php wp_reset_postdata();?>            
    </div>
</section>

<?php
    get_footer();
?>






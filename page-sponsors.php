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
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
            
            $posts= new WP_Query(array(
                'post_type'=> 'post',
                'posts_per_page' => 9,
                'paged' => $paged,
                'category_name' => 'sponsors',
                'orderby' => 'date',
                'order' => 'ASC'
            ));
            
            if($posts->have_posts()) : 
                while($posts->have_posts())  : $posts->the_post(); ?>
                    <figure class="sponsors__item">
                        <a href="<?php the_field('sponsors_link'); ?>" class="sponsors__link">
                            <img src="<?php the_field('sponsors_img') ?>" alt="sponsors" class="sponsors__img">
                        </a>
                    </figure>
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
            <?php endif ?>

            <?php wp_reset_postdata(); ?> 
        </div>
    </div>
</section>

<?php
    get_footer();
?>
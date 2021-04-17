<?php 
// Template Name: Duyurular kategorisi sayfası
// Template Type: post, page, announcement_posts
?>
<?php
    get_header();
?>
    <section class="container mt-30">
        <h1 class="title content__title">"Duyurular" kategorisinden postlar</h1>
        <div class="content__wrapper">
            <?php 
                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
                $posts= new WP_Query(array(
                    'post_type'=> 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'category_name' => 'announcement_posts',
                ));
                if($posts->have_posts()) : 
                    while($posts->have_posts())  : $posts->the_post(); ?>
                        <div class="content__item"">
                            <a href="<?php echo get_permalink(); ?>" class="content__item-img">
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
                
                <?php   endwhile; ?>
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
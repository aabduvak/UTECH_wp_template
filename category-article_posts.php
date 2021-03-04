<?php 
// Template Name: Makaleler kategorisi sayfası
// Template Type: post, page, article_posts
?>
<?php
get_header();
?>
    <div class="container mt-30">
        <h2 class="title content__title">"Makaleler" kategorisinden postlar</h2>
        <div class="content__wrapper">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name' => 'article_posts',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
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
                    <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>          
<?php
get_footer();
?>
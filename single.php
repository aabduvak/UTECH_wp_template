<?php
get_header();
?>

	<main id="primary" class="site-main">
        <div class="container mt-30">
            <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile; // End of the loop.
            ?>
        </div>
	</main><!-- #main -->

    <div class="container mt-40">
        <h2 class="title page-content__title">Belki beğenirsin</h2>
        <div class="content__wrapper">
            <?php 
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
                            <a href="<?php echo get_permalink(); ?>>" class="content__item-img">
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

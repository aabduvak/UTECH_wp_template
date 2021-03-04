<?php 
/* 
Template Name: Ekibimiz
*/
?>

<?php
    get_header();
?>
<section class="team">
    <div class="container">
        <div class="title team__title">Ekibimiz</div>
        <div class="team__wrapper">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name' => 'team',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="team__item">
                            <div class="team__item-img">
                                <img src="<?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/icons/no-image.png';
                                }
                                ?>" alt="team member">
                            </div>
                            <div class="team__item-title"><?php the_title(); ?></div>
                            <div class="team__item-subtitle"><?php the_field('working_place'); ?></div>
                            <div class="team__item-icon">
                                <a href="<?php the_field('linkedin_profile'); ?>">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linkedin.svg" alt="linkedin">
                                </a>
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
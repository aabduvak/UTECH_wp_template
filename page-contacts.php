<?php 
/* 
Template Name: İletişim
*/
?>

<?php
    get_header();
?>

<section class="page-content contacts">
        <div class="container">
            <h1 class="title page-content__title">İletişim</h1>

            <div  class="contacts__form">
                <?php echo do_shortcode('[contact-form-7 id="308" title="İletişim formu"]'); ?>
            </div>
        </div>
</section>

<?php
    get_footer();
?>
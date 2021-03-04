<?php 
/* 
Template Name: 404 şablonu
*/
?>
<?php
get_header();
?>

    <div class="container mt-30">
        <h2 class="title content__title">Bir sonuç bulunamadı  :(</h2>
        <a style="color: #6260ef;" href="<?php echo get_home_url(); ?>" class="subtitle content__subtitle">Ana sayfaya dönmek ister misiniz?</a>
    </div>          
<?php
get_footer();

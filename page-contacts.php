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

            <form  class="contacts__form" name="contact-form" netlify>
                <div class="contacts__descr">Bu formu kullanarak bize ulaşın, ekibimiz en kısa sürede sizinle iletişime geçecektir.</div>
                <input type="text" name="text" id="text" class="contacts__input" placeholder="Ad Soyad" required>
                <input type="email" name="email" id="email" class="contacts__input" placeholder="Email" required>
                <input type="text" name="title" id="title" class="contacts__input" placeholder="Başlık">
                <textarea name="message" maxlength="350" minlength="5" id="message" cols="30" rows="10" class="contacts__textarea" required placeholder="Mesaj"></textarea>
                <button class="btn contacts__btn" type="submit">GÖNDER</button>
            </form>
        </div>
</section>

<?php
    get_footer();
?>
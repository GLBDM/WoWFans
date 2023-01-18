<?php get_header();
//Template name: Contact
?>

<main id="contactPage">
    <div class="background"></div>
    <div class="margin">
        <div class="container">
            <div class="left">
                <?php echo the_content(); ?>
            </div>
            <div class="right">
                <section class="contactInfo">
                    <div class="title">Information de contact</div>
                    <div class="content">
                        <div class="email">
                            <h3>Email :</h3>
                            <?php the_field( 'email' ); ?>
                        </div>
                        <div class="phone">
                            <h3>Téléphone :</h3>
                            <?php the_field( 'phone' ); ?>
                        </div>
                        <div class="adress">
                            <h3>Adresse :</h3>
                            <?php the_field( 'adress' ); ?>
                        </div>
                    </div>
                </section>
            </div>
            
        </div>
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.9632043245647!2d-117.76836179035077!3d33.65811529101174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcde82907fe8bb%3A0xcb7104743d635730!2sBlizzard%20Entertainment!5e0!3m2!1sfr!2sfr!4v1673834314730!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>
</main>

<?php get_footer();
?>
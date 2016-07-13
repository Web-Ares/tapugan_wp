<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>


    <div class="site__ban" style="background-image: url(<?php the_field('main_background_on_page'); ?>)"></div>

    <!-- site__content -->
    <div class="site__content">

    

        <!-- contact -->
        <div class="contact">

            <!-- site__title -->
            <h1 class="site__title"><?php the_title(); ?></h1>
            <!-- /site__title -->

                <?php the_field('text_after_title')?>
            <div class="contact__info">
                <p>
                    <strong>כתובת המפעל:</strong>
                    תעשיות תפוגן &nbsp;|&nbsp; שער הנגב ת.ד 571 &nbsp;|&nbsp; שדרות 8701402
                </p>
                <p><strong>טלפון:</strong> 08-6808331</p>
                <p><strong>שירות לקוחות:</strong> 08-6108800</p>
            </div>


            <?php echo do_shortcode('[contact-form-7 id="107" title="Contact Form" html_id="tofes"]'); ?>
        </div>
        <!-- /contact -->

        <!-- thank-you -->
        <div class="thank-you">
            <h2 class="site__title">תודה לך!</h2>
            <p>תודה על פנייתך, נציגנו יצרו עמך קשר בהקדם </p>
        </div>
        <!-- /thank-you -->

        
    </div>
    <!-- /site__content -->

<?php get_footer(); ?>
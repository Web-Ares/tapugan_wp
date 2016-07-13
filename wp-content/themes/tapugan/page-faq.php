<?php
/**
 * Template Name: FAQ Page
 */
get_header(); ?>


    <div class="site__ban" style="background-image: url(<?php the_field(  'add_a_main_background_image' )?>)"></div>

    <!-- site__content -->
    <div class="site__content">

        <!-- site__title -->
        <h1 class="site__title"><?php the_title(); ?></h1>
        <!-- /site__title -->

        <!-- faq -->
        <div class="faq">


            <?php

            // check if the repeater field has rows of data
            if( have_rows('new_qa') ):

                // loop through the rows of data
                while ( have_rows('new_qa') ) : the_row(); ?>

                    <!-- faq__item -->
                    <div class="faq__item">

                        <!-- faq__question -->
                        <div class="faq__question">
                            <h2 class="faq__title">שאלה:</h2>
                            <p><? the_sub_field('new_question'); ?></p>
                        </div>
                        <!-- /faq__question -->

                        <!-- faq__answer -->
                        <div class="faq__answer">
                            <h2 class="faq__title">תשובה:</h2>
                            <p><? the_sub_field('new_answer'); ?></p>
                        </div>
                        <!-- /faq__answer -->

                    </div>
                    <!-- /faq__item -->

                <?php endwhile;

            else :

                // no rows found

            endif;

            ?>

        </div>
        <!-- /faq -->

    </div>
    <!-- /site__content -->




<?php get_footer(); ?>
<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

    <div class="site__ban" style="background-image: url(<?php the_field('main_background_image'); ?>)"></div>

    <!-- site__content -->
    <div class="site__content">

        <!-- site__title -->
        <h1 class="site__title"><?php the_title();?></h1>
        <!-- /site__title -->

        <!-- about -->
        <div class="about">

            <?php the_field( 'first_content_block' ); ?>

            <div class="about__shot">

                <div class="about__shot-wrap">

                    <?php the_field( ' about_partner_description' ); ?>

                    <ul>

                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('business_partners') ):

                            // loop through the rows of data
                            while ( have_rows('business_partners') ) : the_row(); ?>

                                <li>
                                    <span><img class="float_right" src="<?php the_sub_field( 'logo_of_partner' ); ?>" alt="partner" title="partner"></span>
                                    <p class="short_par float_right"><?php the_sub_field( 'description_of_partner' ); ?></p>
                                </li>

                            <?php endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>

                    </ul>
                </div>

                <img src="<?php the_field( 'business_partner_background_image' ); ?>" alt="תפוגן" title="תפוגן">
            </div>

            <?php the_field( 'first_content_block_copy' ); ?>

        </div>
        <!-- /about -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>
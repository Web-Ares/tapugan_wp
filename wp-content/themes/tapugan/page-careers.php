<?php
/**
 * Template Name: Careers Page
 */
get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- site__title -->
        <h1 class="site__title"><?php the_title(); ?></h1>
        <!-- /site__title -->

        <!-- about -->
        <div class="about">

            <?php if( have_rows('jobs') ):

                        while ( have_rows('jobs') ) : the_row(); ?>
                            <h2><?php the_sub_field( 'job_title' ); ?></h2>
                              <?php  the_sub_field('job_description'); ?>
                            <a href="<?php the_sub_field( 'job_link' ); ?>" class="site__link"><?php the_sub_field( 'job_text' ); ?></a>
                            <?php
                        endwhile;
                    endif; ?>
            <?php the_content(); ?>



        </div>
        <!-- /about -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>
<?php  get_header(); ?>

    <div class="site__ban" style="background-image: url(<?php echo DIRECT; ?>img/no_flash.jpg)"></div>

    <!-- site__content -->
    <div class="site__content">

        <!-- site__title -->
        <h1 class="site__title"><?php single_cat_title(); ?></h1>
        <!-- /site__title -->

        <?php
        $id = get_queried_object()->term_id;

        the_field('category_description_copy','products_cat_'.$id.'')?>

        <?php if($pdf = get_field('link_to_pdf','products_cat_'.$id.'')):?>
        <a href="<?php echo TEMPLATEURI; ?>/docs/roduct_list_chips.pdf" target="_blank">למוצרי השוק המוסדי &gt;&gt;</a>
        <?php endif;

        if($youtube = get_field('link_on_youtube','products_cat_'.$id.'')):?>
            <a href="<?= $youtube; ?>" target="_blank">לסרטון &gt;&gt;</a>
        <?php endif; ?>

        <!-- category -->
        <div class="category">


            <?php
            $args = array(
                'post_type' => 'products',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_status' => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'products_cat',
                        'field' => 'ID',
                        'terms' => $id
                    )
                )
            );

            $products= new WP_query ( $args );

            if ( $products->have_posts() ) {

                while ( $products->have_posts()) :

                    $products->the_post();
                    $cur_link = get_the_permalink();
                    $cur_title = get_the_title();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                    ?>

                    <!-- category__item -->
                    <div class="category__item">

                        <a href="<?= $cur_link; ?>" class="category__pic"><img src="<?= $thumb_url; ?>" alt="<?= $cur_title; ?>" title="<?= $cur_title; ?>"/></a>

                        <!-- category__info -->
                        <div class="category__info">
                            <h2 class="category__title"><?php the_title(); ?></h2>
                            <p>טוגני תפוחי אדמה עם קליפה מוקפאים<br/>משקל נקי: 1.5 ק"ג</p>
                            <a href="<?= $cur_link; ?>" class="site__link">לחץ כאן</a>
                        </div>
                        <!-- /category__info -->
                    </div>
                    <!-- /category__item -->


                <?php endwhile;
            }
            rewind_posts();
            ?>


        </div>
        <!-- /category -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>
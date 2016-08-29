<?php  get_header();
$id = get_queried_object()->term_id;
?>

    <div class="site__ban" style="background-image: url(<?php the_field('choose_the_main_background_on_page','products_cat_'.$id.'') ?>) "></div>

    <!-- site__content -->
    <div class="site__content">

        <!-- site__title -->
        <h1 class="site__title"><?php single_cat_title(); ?></h1>
        <!-- /site__title -->

        <?php the_field('category_description_copy','products_cat_'.$id.'')?>

        <?php if($pdf = get_field('link_to_pdf','products_cat_'.$id.'')):?>
        <p><a href="<?= $pdf; ?>" target="_blank">למוצרי השוק המוסדי &gt;&gt;</a></p>
        <?php endif;

        if($youtube = get_field('link_on_youtube','products_cat_'.$id.'')):?>
            <p><a href="<?= $youtube; ?>" target="_blank">לסרטון &gt;&gt;</a></p>
        <?php endif; ?>

        <!-- category -->
        <div class="category">

            <?php
            $terms = get_terms( 'products_cat', array(
                'hide_empty' => true,
                'orderby' => 'term_id',
                'parent' => $id
            ) );
            $array_children = array();
            foreach ($terms as $term){
                $array_children[]=$term->term_id;
            }


       



            $args = array(
                'post_type' => 'products',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'parent' => 0,
                'tax_query' => array(
                    array('relation' => 'AND',
                    array(
                        'taxonomy' => 'products_cat',
                        'field' => 'ID',
                        'terms' => $id,
                        'operator' => 'IN'
                    ),
                    array(
                        'taxonomy' => 'products_cat',
                        'field' => 'ID',
                        'terms' => $array_children,
                        'operator' => 'NOT IN'
                    )
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
                    $alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
                    $title_t = get_post(get_post_thumbnail_id())->post_title;
                    ?>

                    <!-- category__item -->
                    <div class="category__item">

                        <span  class="category__pic"><img src="<?= $thumb_url; ?>" alt="<?= $alt_text; ?>" title="<?= $title_t; ?>"/></span>

                        <!-- category__info -->
                        <div class="category__info">
                            <h2 class="category__title"><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <a href="<?= $cur_link; ?>" class="site__link">לחץ כאן</a>
                        </div>
                        <!-- /category__info -->
                    </div>
                    <!-- /category__item -->


                <?php endwhile; ?>
        </div>
        <!-- /category -->
           <?php  }
            rewind_posts();


            foreach ($terms as $term){


                $args = array(
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',

                    'tax_query' => array(
                        array(
                            'taxonomy' => 'products_cat',
                            'field' => 'ID',
                            'terms' => $term->term_id,
                        )
                    )
                );

                $products= new WP_query ( $args );

                if ( $products->have_posts() ) { ?>
                    <h2 class="site__sub-title"><?= $term->name; ?></h2>

            <!-- category -->
            <div class="category">

                   <?php  while ( $products->have_posts()) : ?>

                       <?php  $products->the_post();
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
                                <?php the_excerpt(); ?>
                                <a href="<?= $cur_link; ?>" class="site__link">לחץ כאן</a>
                            </div>
                            <!-- /category__info -->
                        </div>
                        <!-- /category__item -->


                    <?php endwhile; ?>
                    </div>
                    <!-- /category -->
               <?php  }
                rewind_posts();



            }
            ?>




    </div>
    <!-- /site__content -->

<?php get_footer(); ?>
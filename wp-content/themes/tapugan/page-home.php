<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>


<div class="mountains">
    <span class="mountains__bird mountains__bird_1"><img src="<?= DIRECT; ?>img/mountains/bird.GIF" alt=""></span>
    <span class="mountains__bird mountains__bird_2"><img src="<?= DIRECT; ?>img/mountains/bird.GIF" alt=""></span>
    <span class="mountains__bird mountains__bird_3"><img src="<?= DIRECT; ?>img/mountains/bird.GIF" alt=""></span>
    <span class="mountains__bird mountains__bird_4"><img src="<?= DIRECT; ?>img/mountains/bird.GIF" alt=""></span>
    <span class="mountains__bird mountains__bird_5"><img src="<?= DIRECT; ?>img/mountains/bird.GIF" alt=""></span>
    <span class="mountains__mountain"></span>
    <span class="mountains__potatoes"></span>
    <span class="mountains__carpet"></span>
</div>

<!-- site__content -->
<div class="site__content">

    <!-- main -->
    <div class="main">

        <!-- main__about -->
        <div class="main__about">

           <?php the_field('page_about_excerpt');
           $about_title = get_the_title(19);
           $about_perm = get_the_permalink(19);
           ?>
            <a href="<?php echo $about_perm; ?>" class="site__link"><?php echo $about_title; ?></a>


        </div>
        <!-- /main__about -->

        <!-- main__preview -->
        <div class="main__preview">

            <!-- product-preview -->
            <div class="product-preview">

                <?php

                    $terms = get_terms( 'products_cat', array(
                    'hide_empty' => true,
                    'orderby' => 'term_id',
                    'parent' => '0'
                ) );

                if($terms):
                foreach ($terms as $term){
                    $current_product_id = $term->term_id;
                    $curr_name = $term->name;
                    $link_on_category = get_term_link( $term );
               
                    if(get_field( 'show_this_category_on_home_page','products_cat_'.$current_product_id.'' )=='show'):
                    ?>

                    <!-- product-preview__item -->
                    <div class="product-preview__item">

                        <!-- product-preview__pic -->
                        <a href="<?php echo $link_on_category ?>" class="product-preview__pic"><img src="<?php the_field( 'choose_the_category_image_preview','products_cat_'.$current_product_id.'' )?>" alt="<?php echo $curr_name; ?>" title="<?php echo $curr_name; ?>"></a>
                        <!-- /product-preview__pic -->

                        <!-- product-preview__info -->
                        <div class="product-preview__info">
                            <h2 class="product-preview__title"><?php echo $curr_name; ?></h2>
                            <?php the_field( 'category_description','products_cat_'.$current_product_id.'' )?>
                            <a href="<?php echo $link_on_category ?>" class="site__link">לחץ כאן</a>
                        </div>
                        <!-- /product-preview__info -->

                    </div>
                    <!-- /product-preview__item -->

               <?php  endif; }
                endif; ?>

            </div>
            <!-- /product-preview -->

        </div>
        <!-- /main__preview -->

        <!-- main__pic -->
        <div class="main__pic"><img src="<?php the_field('choose_the_image'); ?>" alt="תפוגן" title="תפוגן"></div>
        <!-- /main__pic -->

    </div>
    <!-- /main -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>

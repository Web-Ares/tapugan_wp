<?php get_header();
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
$category = get_the_terms( get_the_ID(), 'products_cat');
$title = get_the_title();
$alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
$title_t = get_post(get_post_thumbnail_id())->post_title;
$link_on_category = get_term_link( $category[0]->term_id );
?>


    <div class="site__ban" style="background-image: url(<?php the_field('choose_the_main_background_on_page','products_cat_'.$category[0]->term_id.'') ?>)"></div>

    <!-- site__content -->
    <div class="site__content">

        <!-- product -->
        <div class="product">

            <!-- product__title -->
            <h1 class="product__title"><?= $category[0]->name; ?></h1>
            <!-- /product__title -->

            <div class="product__pic"><img src="<?= $thumb_url; ?>" alt="<?= $alt_text;  ?>" title="<?= $title_t;  ?>"></div>

            <div class="product__info">



                <?php the_field( 'text_block' ); ?>

                <?php

                // check if the repeater field has rows of data
                if( have_rows('add_a_instructions_element') ): ?>

                <div>

                    <strong><?php the_field('add_instructions_title'); ?></strong>

                   <?php  // loop through the rows of data
                    while ( have_rows('add_a_instructions_element') ) : the_row(); ?>

                        <dl>
                            <dt><?php the_sub_field('title_of_instruction'); ?></dt>
                            <dd><?php the_sub_field('instruction_text'); ?></dd>
                        </dl>

                    <?php endwhile; ?>
                    </div>
               <?php  endif; ?>

                <?php the_field( 'text_block_copy_2' ); ?>


                <?php

                // check if the repeater field has rows of data
                if( have_rows('table_of_product') ): ?>

                <table>
                    <thead>
                    <tr>
                        <?php $count = get_field('choose_2_or_3_columns_in_table');
                        ($count=='r3') ? $count=3 : $count=2; ?>

                        <td colspan="<?= $count; ?>"><?php the_field('title_for_table_of_product'); ?></td>
                    </tr>
                    </thead>
                    <tbody>

                    <?php  // loop through the rows of data
                    while ( have_rows('table_of_product') ) : the_row(); ?>

                        <tr>
                            <td><?php the_sub_field('add_a_title_of_column'); ?></td>
                            <td><?php the_sub_field('add_a_description_of_column'); ?></td>
                            <?php if($count=='3'):?>
                            <td><?php the_sub_field('add_a_third_line_of_column'); ?></td>
                            <?php endif; ?>
                        </tr>

                    <?php endwhile; ?>

                    </tbody>
                </table>
                <?php  endif; ?>


                <div class="product__info-shot">
                    <div>
                        <?php the_field( 'text_block_copy' ); ?>
                        <a class="btn-back" href="<?= $link_on_category; ?>"></a>
                    </div>
                    <img src="<?= DIRECT; ?>pic/kashrut.png" alt="כשר בהשגחת הבדצ" title="כשר בהשגחת הבדצ">

                </div>
                <p> ט.ל.ח. מידע מפורט ועדכני על מוצרים , ע"ג האריזה.</p>
            </div>

        </div>
        <!-- /product -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>
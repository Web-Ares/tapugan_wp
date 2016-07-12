<!-- site__footer -->
<footer class="site__footer">

    <!-- site__create -->
    <div class="site__create">designed by <a href="http://san-i.co.il" target="_blank">san interactive</a></div>
    <!-- /site__create -->

    <!-- site__footer-menu -->
    <nav class="site__footer-menu">
        <?php
        $locations = get_nav_menu_locations();
        $menu_items = wp_get_nav_menu_items($locations['footer_menu']);

        foreach ((array)$menu_items as $key => $menu_item) {

            if($menu_item->object=='page'){
                if($post->ID==$menu_item->object_id){
                    $active = ' active';
                } else {
                    $active = '';

                }
                $menu_title =  $menu_item->title;
            }
            elseif($menu_item->object=='products_cat') {
                $id = get_queried_object()->term_id;
                if($id==$menu_item->object_id){
                    $active = ' active';
                } else {
                    $active = '';

                }
                $menu_title =  $menu_item->title;

            }
            ?>

            <a href="<?= $menu_item->url; ?>" class="site__footer-menu__item<?= $active; ?>"><?= $menu_item->title; ?></a>


            <?php
        }?>

    </nav>
    <!-- /site__footer-menu -->

    <!-- site__copyright -->
    <div class="site__copyright"><a href="terms.html">תנאי שימוש</a> © 2010  כל הזכויות שמורות לתפוגן בע"מ</div>
    <!-- /site__copyright -->

</footer>
<!-- /site__footer -->

</div>
<!-- /site -->
<?php wp_footer(); ?>
</body>
</html>
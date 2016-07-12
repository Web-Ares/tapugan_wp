<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta charset="UTF-8">

    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php echo TEMPLATEURI; ?>/favicon.ico" />



<?php if(is_front_page()):?>
    <script type="text/javascript">

        var flashvars = {};
        var params = {};
        params.scale = "noscale";
        params.menu = "false";
        params.salign = "rt";
        params.allowFullScreen = "true";
        params.quality="best";
        params.devicefont="false";
        params.allowScriptAccess="always";
        params.wmode="transparent";

        var attributes = {};

        swfobject.embedSWF('includes/tapugan_preloader.swf', "flash", "1525", "530", "10",false, flashvars, params, attributes);

        function checkWidth(){
            var windowWidth = parseInt(document.documentElement.clientWidth);
            if (windowWidth < 1000){
                document.body.style.overflow="auto";
                document.getElementById('flashBanner').style.width = 1012+'px';
            }
        }
    </script>
<?php endif; ?>

</head>
<body>
<?php if (is_page() || is_single() || is_singular() || is_404() || is_tax() || is_category() || is_tax() ) {
    the_post();
} ?>
<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">


        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo"><img src="<?php echo DIRECT; ?>img/logo.png" alt="תפוגן"></h1>
            <!-- /logo -->
        <?php } else {?>
            <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo DIRECT; ?>img/logo.png" alt="תפוגן"></a>
        <?php } ?>




        <!-- menu -->
        <nav class="menu">

            <!-- menu__btn -->
            <span class="menu__btn"></span>
            <!-- /menu__btn -->

            <!-- menu__wrap -->
            <div class="menu__wrap">

                <?php
                $locations = get_nav_menu_locations();
                $menu_items = wp_get_nav_menu_items($locations['menu']);

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

                    <a href="<?= $menu_item->url; ?>" titile="<?= $menu_title; ?>" class="menu__item<?= $active; ?>"><?= $menu_title; ?></a>


                    <?php
                }?>


            </div>
            <!-- /menu__wrap -->

        </nav>
        <!-- /menu -->

    </header>
    <!-- /site__header -->
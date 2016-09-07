<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta charset="UTF-8">

    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php echo TEMPLATEURI; ?>/favicon.ico" />
    
</head>
<body>
<?php if (is_page() || is_single() || is_singular() || is_404() || is_tax() || is_category() || is_tax() ) {
    the_post();
} ?>


<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">


        <!-- menu -->
        <div class="menu">
            <div class="menu__wrap">

                <?php
                $image_array = array();
                $image_array = [
                    'img/about_nav.png',
                    'img/chips_nav.png',
                    'img/special_nav.png',
                    'img/vegetation_nav.png',
                    'img/faq_nav.png',
                    'img/home_nav.png'
                ];

                $locations = get_nav_menu_locations();
                $menu_items = wp_get_nav_menu_items($locations['menu']);
                $count_1 =1;
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

                    <a href="<?= $menu_item->url; ?>" class="menu__item menu__item_<?= $count_1;?>">
                        <span class="menu__rain"></span>
                        <span class="menu__cloud"><span><?= ($count_1!=7)? $menu_title : '' ?></span></span>
                    </a>
                    <?php
                    $count_1++;
                }?>

        </div>
        </div>
        <!-- /menu -->
        
        
        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo"><img src="<?php echo DIRECT; ?>img/logo.png" alt="תפוגן"></h1>
            <!-- /logo -->
        <?php } else {?>
            <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo DIRECT; ?>img/logo.png" alt="תפוגן"></a>
        <?php } ?>



    </header>
    <!-- /site__header -->
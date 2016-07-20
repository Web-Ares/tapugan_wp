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



<?php

if(is_page_template('page-contact.php')): ?>
<!--    <script type="text/javascript">-->
<!--        function isEmpty() {-->
<!--            strfield1 = document.forms[0].name1.value;-->
<!--            strfield2 = document.forms[0].company.value;-->
<!--            strfield3 = document.forms[0].email.value;-->
<!--            strfield4 = document.forms[0].phone.value;-->
<!--            strfield5 = document.forms[0].msg.value;-->
<!--            var name;-->
<!--            var last;-->
<!--            var phone;-->
<!--            var mail;-->
<!--            var comment = true;-->
<!--            var stripped = strfield4.replace(/[\(\)\.\-\ ]/g, '');-->
<!--            validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;-->
<!--            strEmail = document.forms[0].email.value;-->
<!--            if (strfield1 == "" || strfield1 == null || !isNaN(strfield1) || strfield1.charAt(0) == ' ')-->
<!--            {-->
<!--                ChangeTitle('name_error');-->
<!--                name=false;-->
<!--            }else{-->
<!--                name=true;-->
<!--                elemTitle('name_error');-->
<!--            }-->
<!--            if (strfield2 == "" || strfield2 == null || !isNaN(strfield2) || strfield2.charAt(0) == ' ')-->
<!--            {-->
<!--                ChangeTitle('last_error');-->
<!--                last=false;-->
<!--            }else{-->
<!--                last=true;-->
<!--                elemTitle('last_error');-->
<!--            }-->
<!--            if (strEmail.search(validRegExp) == -1)-->
<!--            {-->
<!--                ChangeTitle('mail_error');-->
<!--                mail=false;-->
<!--            } else{-->
<!--                mail=true;-->
<!--                elemTitle('mail_error');-->
<!--            }-->
<!---->
<!--            if (strfield4 == "" || strfield4 == null || strfield4.charAt(0) == ' ')-->
<!--            {-->
<!--                ChangeTitle('phone_error');-->
<!--                phone=false;-->
<!--            }else{-->
<!--                phone=true;-->
<!--                elemTitle('phone_error');-->
<!--            }-->
<!---->
<!--            if(name==true && last==true && phone==true && mail==true && comment==true){-->
<!--                return true;-->
<!--            }else {-->
<!--                return false;-->
<!--            }-->
<!--        }-->
<!--        function check(form){-->
<!--            if (isEmpty()){-->
<!--                document.getElementById('tofes').action="form.aspx";-->
<!--                return true;-->
<!--            }-->
<!--            return false;-->
<!--        }-->
<!--        function ChangeTitle(whatToWrite) {-->
<!---->
<!--            var head1 = document.getElementById(whatToWrite);-->
<!--            head1.style.visibility = "visible";-->
<!--        }-->
<!--        function elemTitle(whatToWrite) {-->
<!---->
<!--            var head1 = document.getElementById(whatToWrite);-->
<!--            head1.style.visibility = "hidden";-->
<!--        }-->
<!--        function hideAll(){-->
<!--            document.getElementById("name_error").style.visibility = "hidden";-->
<!--            document.getElementById("last_error").style.visibility = "hidden";-->
<!--            document.getElementById("mail_error").style.visibility = "hidden";-->
<!--            document.getElementById("phone_error").style.visibility = "hidden";-->
<!--        }-->
<!--    </script>-->
<?php endif;
?>


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

                    <a href="<?= $menu_item->url; ?>" class="menu__item menu__item_<?= $count_1;?>"><?= $menu_title; ?><span class="menu__rain"></span></a>
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
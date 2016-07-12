<?php get_header();
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
$category = get_the_terms( get_the_ID(), 'products_cat');
$title = get_the_title();
$link_on_category = get_term_link( $category[0]->term_id );
?>


    <div class="site__ban" style="background-image: url(img/no_flash.jpg)"></div>

    <!-- site__content -->
    <div class="site__content">

        <!-- product -->
        <div class="product">

            <!-- product__title -->
            <h1 class="product__title"><?= $category[0]->name; ?></h1>
            <!-- /product__title -->

            <div class="product__pic"><img src="<?= $thumb_url; ?>" alt="<?= $title;  ?>" title="<?= $title;  ?>"></div>

            <div class="product__info">

                <h2 class="product__info-title"><?= $title;  ?></h2>

                <p><strong>משקל נקי:</strong> 1.5 ק"ג</p>
                <p><strong>רכיבי המוצר: </strong>תפוח אדמה (94%), שמן מהצומח, דקסטרוזה, מייצב (E450)</p>
                <div>
                    <strong>הוראות ההכנה: </strong>
                    <dl>
                        <dt>בשמן עמוק:</dt>
                        <dd>: 2-3 דקות ב Cº180, או עד שמזהיב.<dd>
                    </dl>
                    <dl>
                        <dt>בתנור: </dt>
                        <dd> 15 דקות ב  Cº220, או עד שמזהיב.<</dd>
                    </dl>
                </div>
                <p><strong>אחסון: </strong> מוצר קפוא. אין להפשיר לפני השימוש, אין להקפיא לאחר ההפשרה</p>

                <table>
                    <thead>
                    <tr>
                        <td colspan="2">סימון תזונתי ב 100 גר':</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>אנרגיה (קלוריות)</td>
                        <td>156</td>
                    </tr>
                    <tr>
                        <td>חלבונים (גרם)</td>
                        <td>2.3</td>
                    </tr>
                    <tr>
                        <td>פחמימות (גרם)</td>
                        <td>23.3</td>
                    </tr>
                    <tr>
                        <td>שומנים (גרם)</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>מתוכו שומן רווי (גרם)</td>
                        <td>3.4</td>
                    </tr>
                    <tr>
                        <td>שומן טראנס (גרם)</td>
                        <td>פחות מ 0.5</td>
                    </tr>
                    <tr>
                        <td>כולסטרול (מ"ג)</td>
                        <td>פחות מ 2.5</td>
                    </tr>
                    <tr>
                        <td>נתרן (מ"ג)</td>
                        <td>45</td>
                    </tr>
                    </tbody>
                </table>

                <div class="product__info-shot">
                    <div>
                        <p><strong>תי"נ: </strong>GMP</p>
                        <p><strong>כשרויות: </strong>
                            בד"ץ העדה החרדית ירושלים (למעט פסח).</p>
                        <p>
                            כשר פרווה בהשגחת הרב יעקב אריאל רמת גן.
                        </p>
                        <a class="btn-back" href="<?= $link_on_category; ?>"></a>
                    </div>
                    <img src="<?= DIRECT; ?>pic/kashrut.png" alt="כשר בהשגחת הבדצ" title="כשר בהשגחת הבדצ">
                </div>
            </div>

        </div>
        <!-- /product -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>
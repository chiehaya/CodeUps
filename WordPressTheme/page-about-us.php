<?php get_header(); ?>

<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">About us</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="breadcrumb layout-breadcrumb">
        <div class="breadcrumb__inner inner">
            <div class="breadcrumb__content">
                <?php get_template_part('parts/breadcrumb'); ?>
            </div>
        </div>
    </div>

    <div class="about-page layout-page-top">
        <div class="about-page__inner inner">
            <div class="about-page__decoration page-decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <div class="about-page__images">
                <div class="about-page__image-1">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.jpg" alt="about us">
                </div>
                <div class="about-page__image-2">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.jpg" alt="about us">
                </div>
            </div>
            <div class="about-page__container">
                <p class="about-page__head">
                    Dive into<br>the Ocean
                </p>
                <div class="about-page__wrapper">
                    <p class="about-page__text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="gallery layout-gallery">
        <div class="gallery__inner inner">
            <div class="gallery__title section-title">
                <p class="section-title__en">Gallery</p>
                <h2 class="section-title__ja">フォト</h2>
            </div>
            <ul class="gallery__items">
                <?php
                $imgGroup = SCF::get('gallery_imgs');
                foreach ($imgGroup as $fields) { 
                    if (!empty($fields['gallery_img'])) {
                        $img_id = $fields['gallery_img'];
                        $img_url = wp_get_attachment_image_src($img_id, 'full');
                        if ($img_url) {
                ?>
                            <li class="gallery__item js-gallery">
                                <img src="<?php echo $img_url[0]; ?>" alt="ギャラリーアイテム">
                            </li>
                <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </section>

    <div class="modal js-modal">
        <div class="modal__background js-background-modal"></div>
        <div class="modal__wrapper js-modal__wrapper">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg" alt="ギャラリーアイテム">
        </div>
    </div>
</main>

<?php get_footer(); ?>

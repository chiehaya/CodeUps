<?php get_header(); ?>
<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Privacy Policy</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="breadcrumb layout-breadcrumb">
        <div class="breadcrumb__inner inner">
            <div class="breadcrumb__content">
                <?php get_template_part('parts/breadcrumb'); ?>
            </div>
        </div>
    </div>

    <section class="privacy layout-page-top">
        <div class="privacy__inner inner">
            <div class="privacy__decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <h2 class="privacy__title">プライバシーポリシー</h2>
            <div class="privacy__content">
                <?php
                    $page_obj = get_page_by_path('privacypolicy');
                    $page = get_post( $page_obj );
                    echo $page->post_content;   //本文を表示
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
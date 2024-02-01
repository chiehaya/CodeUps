<?php get_header(); ?>

<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Contact</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="breadcrumb layout-breadcrumb">
        <div class="breadcrumb__inner inner">
            <div class="breadcrumb__content">
                <?php get_template_part('parts/breadcrumb'); ?>
            </div>
        </div>
    </div>

    <div class="contact-page layout-page-top">
        <div class="contact-page__inner inner">
            <div class="contact-page__decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <div class="contact-page__content page-form">
                <?php echo do_shortcode('[contact-form-7 id="f8689bc" title="お問い合わせフォーム"]'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

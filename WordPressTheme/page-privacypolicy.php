<?php get_header(); ?>
<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Privacy Policy</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <section class="privacy layout-page-top">
        <div class="privacy__inner inner">
            <div class="privacy__decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (trim(get_the_content()) !== '') : ?>
                <h2 class="privacy__title">プライバシーポリシー</h2>
                <div class="privacy__content">
                    <?php the_content(); ?>
                </div>
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
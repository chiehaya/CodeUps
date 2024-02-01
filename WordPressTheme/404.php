<?php get_header(); ?>
<main>
    <section class="page-404">
        <div class="page-404__inner inner">
            <div class="page-404__breadcrumb breadcrumb">
                <div class="breadcrumb__content">
                    <?php get_template_part('parts/breadcrumb'); ?>
                </div>
            </div>
            <h1 class="page-404__title">404</h1>
            <p class="page-404__message">
            申し訳ありません。<br>お探しのページが見つかりません。
            </p>
            <div class="page-404__btn">
                <a href="/" class="btn btn--green">
                <span>
                    Page TOP
                </span>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>


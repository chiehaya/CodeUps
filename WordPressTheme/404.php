<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */

get_header();
?>

<body <?php body_class('custom-404-class'); ?>>
<main>
    <section class="page-404">
        <div class="page-404__inner inner">
            <div class="page-404__breadcrumb">
                <?php get_template_part('parts/breadcrumb'); ?>
            </div>
            <h1 class="page-404__title">404</h1>
            <p class="page-404__message">
            申し訳ありません。<br>お探しのページが見つかりません。
            </p>
            <div class="page-404__btn">
                <a href="<?php echo esc_url(home_url("/")) ?>" class="btn btn--green">
                <span>
                    Page TOP
                </span>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>


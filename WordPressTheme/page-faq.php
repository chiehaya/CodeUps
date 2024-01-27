<?php get_header(); ?>
<main>
<section class="sub-mv js-mv">
    <h1 class="sub-mv__title">FAQ</h1>
    <picture class="sub-mv__img">
    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpg">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.jpg" alt="サブメインビュー">
    </picture>
</section>

<div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <div class="breadcrumb__content">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    </div>
</div>

<div class="faq layout-page-top">
    <div class="faq__inner inner">
    <div class="faq__decoration">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
    </div>
    <ul class="faq__list faq-list">
        <?php
        $free_item = SCF::get('faq_group',22);
        foreach ($free_item as $fields) { 
        ?>
        <li class="faq-list__item">
        <p class="faq-list__item-question js-question"><?php echo $fields['question']; ?></p>
        <p class="faq-list__item-answer"><?php echo nl2br($fields['answer']); ?></p>
        </li>
        <?php } ?>
    </ul>
    </div>
</div>
<?php get_footer(); ?>
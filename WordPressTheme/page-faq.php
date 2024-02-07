<?php get_header(); ?>

<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">FAQ</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <div class="faq layout-page-top">
        <div class="faq__inner inner">
            <div class="faq__decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <?php
            $faqItems = SCF::get('faq_group', 22);
            if (!empty($faqItems)) :
            ?>
            <ul class="faq__list faq-list">
            <?php foreach ($faqItems as $fields) : ?>
                <?php if (!empty($fields['question']) && !empty($fields['answer'])) : ?>
                    <li class="faq-list__item">
                        <p class="faq-list__item-question js-question"><?php echo $fields['question']; ?></p>
                        <p class="faq-list__item-answer"><?php echo nl2br($fields['answer']); ?></p>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

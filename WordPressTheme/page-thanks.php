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
            <div class="contact-page__complete">
                <p class="contact-page__message">お問い合わせ内容を送信完了しました。</p>
                <p class="contact-page__message">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
                お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
                また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
            </div>
        </div>
    </div>
    
</main>
<?php get_footer(); ?>
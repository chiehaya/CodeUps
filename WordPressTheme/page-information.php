<?php get_header(); ?>
<main>
<section class="sub-mv js-mv">
    <h1 class="sub-mv__title">Information</h1>
    <picture class="sub-mv__img">
    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-pc.jpg">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-sp.jpg" alt="サブメインビュー">
    </picture>
</section>


<div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <div class="breadcrumb__content">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    </div>
</div>

<section class="info-page layout-page-top">
    <div class="info-page__inner inner">
    <div class="info-page__decoration page-decoration">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
    </div>
    <ul class="info-page__list" id="info-contents">
        <li class="info-page__tag">
        <span>ライセンス<br class="u-mobile">講習</span>
        </li>
        <li class="info-page__tag">
        <span>ファン<br class="u-mobile">ダイビング</span>
        </li>
        <li class="info-page__tag">
        <span>体験<br class="u-mobile">ダイビング</span>
        </li>
    </ul>
    <div class="info-page__contents" id="info-lisence">
        <div class="info-page__wrapper">
        <h2 class="info-page__title">ライセンス講習</h2>
        <p class="info-page__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
        </div>
        <div class="info-page__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/license.jpg" alt="ライセンス講習">
        </div>
    </div>
    <div class="info-page__contents" id="info-fun-diving">
        <div class="info-page__wrapper">
        <h2 class="info-page__title">ファンダイビング</h2>
        <p class="info-page__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
        </div>
        <div class="info-page__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving.jpg" alt="ファンダイビング">
        </div>
    </div>
    <div class="info-page__contents" id="info-diving">
        <div class="info-page__wrapper">
        <h2 class="info-page__title">体験ダイビング</h2>
        <p class="info-page__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
        </div>
        <div class="info-page__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving.jpg" alt="体験ダイビング">
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>
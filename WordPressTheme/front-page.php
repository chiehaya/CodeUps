<?php get_header(); ?>
    <main>
        <section class="mv js-mv">
        <div class="mv__inner">
            <div class="mv__title-wrap mv-title">
            <h2 class="mv-title__main">diving</h2>
            <p class="mv-title__sub">into the ocean</p>
            </div>
            <div class="mv__swiper swiper js-mv-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <picture class="mv__img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc01.jpg">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp01.jpg" alt="メインビュー">
                </picture>
                </div>
                <div class="swiper-slide">
                <picture class="mv__img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc02.jpg">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp02.jpg" alt="メインビュー">
                </picture>
                </div>
                <div class="swiper-slide">
                <picture class="mv__img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc03.jpg">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp03.jpg" alt="メインビュー">
                </picture>
                </div>
                <div class="swiper-slide">
                <picture class="mv__img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc04.jpg">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp04.jpg" alt="メインビュー">
                </picture>
                </div>
            </div>
            </div>
        </div>
        </section>

        <div class="loader">
        <div class="loader__inner">
            <div class="loader__title mv-title mv-title--green">
            <h2 class="mv-title__main">diving</h2>
            <p class="mv-title__sub">into the ocean</p>
            </div>
            <div class="loader__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc01.jpg" alt="ローディングイメージ">
            </div>
            <div class="loader__imgs">
            <div class="loader__img-left">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loader-left.jpg" alt="ローディングイメージ">
            </div>
            <div class="loader__img-right">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loader-right.jpg" alt="ローディングイメージ">
            </div>
            </div>
        </div>
        </div>

        <section class="campaign layout-campaign">
        <div class="campaign__inner inner">
            <div class="campaign__title section-title">
            <p class="section-title__en">Campaign</p>
            <h2 class="section-title__ja">キャンペーン</h2>
            </div>
            <div class="campaign__swiper-controller">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            </div>
            <div class="campaign__list">
            <div class="campaign__swiper swiper js-campaign-swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide campaign__item campaign-item">
                    <div class="campaign-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.jpg" alt="キャンペーン">
                    </div>
                    <div class="campaign-item__content">
                    <p class="campaign-item__category category">ライセンス講習</p>
                    <p class="campaign-item__title">ライセンス取得</p>
                        <p class="campaign-item__text">全部コミコミ(お一人様)</p>
                        <div class="campaign-item__price">
                        <p class="campaign-item__listing-price">¥56,000</p>
                        <p class="campaign-item__discount-price">¥46,000</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide campaign__item campaign-item">
                    <div class="campaign-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign02.jpg" alt="キャンペーン">
                    </div>
                    <div class="campaign-item__content">
                    <p class="campaign-item__category category">体験ダイビング</p>
                    <p class="campaign-item__title">貸切体験ダイビング</p>
                    <p class="campaign-item__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-item__price">
                        <p class="campaign-item__listing-price">¥24,000</p>
                        <p class="campaign-item__discount-price">¥18,000</p>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide campaign__item campaign-item">
                    <div class="campaign-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign03.jpg" alt="キャンペーン">
                    </div>
                    <div class="campaign-item__content">
                    <p class="campaign-item__category category">体験ダイビング</p>
                    <p class="campaign-item__title">ナイトダイビング</p>
                    <p class="campaign-item__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-item__price">
                        <p class="campaign-item__listing-price">¥10,000</p>
                        <p class="campaign-item__discount-price">¥8,000</p>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide campaign__item campaign-item">
                    <div class="campaign-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign04.jpg" alt="キャンペーン">
                    </div>
                    <div class="campaign-item__content">
                    <p class="campaign-item__category category">ファンダイビング</p>
                    <p class="campaign-item__title">貸切ファンダイビング</p>
                    <p class="campaign-item__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-item__price">
                        <p class="campaign-item__listing-price">¥20,000</p>
                        <p class="campaign-item__discount-price">¥16,000</p>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide campaign__item campaign-item">
                    <div class="campaign-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.jpg" alt="キャンペーン">
                    </div>
                    <div class="campaign-item__content">
                    <p class="campaign-item__category category">ライセンス講習</p>
                    <p class="campaign-item__title">ライセンス取得</p>
                    <p class="campaign-item__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-item__price">
                        <p class="campaign-item__listing-price">¥56,000</p>
                        <p class="campaign-item__discount-price">¥46,000</p>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide campaign__item campaign-item">
                    <div class="campaign-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.jpg" alt="キャンペーン">
                    </div>
                    <div class="campaign-item__content">
                    <p class="campaign-item__category category">ライセンス講習</p>
                    <p class="campaign-item__title">ライセンス取得</p>
                    <p class="campaign-item__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-item__price">
                        <p class="campaign-item__listing-price">¥56,000</p>
                        <p class="campaign-item__discount-price">¥46,000</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="campaign__btn">
            <a href="archive-campaign.html" class="btn">
                <span>
                View more
                </span>
            </a>
            </div>
        </div>
        </section>

        <section class="about layout-about">
        <div class="about__inner inner">
            <div class="about__decoration">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about03.png" alt="装飾">
            </div>
            <div class="about__title section-title">
            <p class="section-title__en">About us</p>
            <h2 class="section-title__ja">私たちについて</h2>
            </div>
            <div class="about__images">
            <div class="about__image-1">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.jpg" alt="about us">
            </div>
            <div class="about__image-2">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.jpg" alt="about us">
            </div>
            </div>
            <div class="about__container">
            <p class="about__head">
                Dive into<br>the Ocean
            </p>
            <div class="about__wrapper">
                <p class="about__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <div class="about__btn">
                <a href="page-about.html" class="btn">
                    <span>
                    View more
                    </span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </section>

        <section class="information layout-information">
        <div class="information__inner  inner">
            <div class="information__title section-title">
            <p class="section-title__en">Information</p>
            <h2 class="section-title__ja">ダイビング情報</h2>
            </div>
            <div class="information__container">
            <div class="information__img js-colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="information">
            </div>
            <div class="information__contents">
                <p class="information__topic">ライセンス講習</p>
                <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
                <div class="information__btn">
                <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>" class="btn">
                    <span>
                    View more
                    </span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </section>

        <section class="blog layout-blog">
        <div class="blog__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.jpg" alt="ブログ背景">
        </div>
        <div class="blog__inner inner">
            <div class="blog__decoration">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog04.png" alt="装飾">
            </div>
            <div class="blog__title section-title">
            <p class="section-title__en section-title__en--white">Blog</p>
            <h2 class="section-title__ja section-title__ja--white">ブログ</h2>
            </div>
            <?php
$args = array(
    "post_type" => "post",
    "posts_per_page" => 3
);
$the_query = new WP_Query($args);
?>
<div class="blog__items cards">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="cards__item card">
            <figure class="card__img">
                <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                <?php endif ?>
            </figure>
            <div class="card__body">
                <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                <p class="card__title">
                    <?php the_title(); ?>
                </p>
                <p class="card__text">
                    <?php $content = get_the_content();
                    echo wp_trim_words($content, 89, '...');
                    ?>
                </p>
            </div>
        </a>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
            </div>
            <div class="blog__btn">
            <a href="home.html" class="btn">
                <span>
                View more
                </span>
            </a>
            </div>
        </div>
        </section>

        <section class="voice layout-voice">
        <div class="voice__inner inner">
            <div class="voice__decoration1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice03.png" alt="装飾">
            </div>
            <div class="voice__decoration2">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice04.png" alt="装飾">
            </div>
            <div class="voice__title section-title">
            <p class="section-title__en">Voice</p>
            <h2 class="section-title__ja">お客様の声</h2>
            </div>
            <div class="voice__contents voice-cards">
            <div class="voice-cards__item">
                <div class="voice-card">
                <div class="voice-card__head">
                    <div class="voice-card__description">
                    <div class="voice-card__type">
                        <p class="voice-card__gender">20代(女性)</p>
                        <p class="voice-card__category category">ライセンス講習</p>
                    </div>
                    <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                    </div>
                    <figure class="voice-card__img js-colorbox">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice01.jpg" alt="20代女性">
                    </figure>
                </div>
                <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。
                </p>
                </div>
            </div>
            <div class="voice-cards__item">
                <div class="voice-card">
                <div class="voice-card__head">
                    <div class="voice-card__description">
                    <div class="voice-card__type">
                        <p class="voice-card__gender">20代(男性)</p>
                        <p class="voice-card__category category">ファンダイビング</p>
                    </div>
                    <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                    </div>
                    <figure class="voice-card__img js-colorbox">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice02.jpg" alt="20代男性">
                    </figure>
                </div>
                <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。
                </p>
                </div>
            </div>
            </div>
            <div class="voice__btn">
            <a href="archive-voice.html" class="btn">
                <span>
                View more
                </span>
            </a>
            </div>
        </div>
        </section>

        <section class="price layout-price">
        <div class="price__inner inner">
            <div class="price__decoration">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-deco.png" alt="装飾">
            </div>
            <div class="price__title section-title">
            <p class="section-title__en">Price</p>
            <h2 class="section-title__ja">料金一覧</h2>
            </div>
            <div class="price__contents">
            <picture class="price__img js-colorbox">
                <source media="(min-width: 768px)" srcset="./assets/images/common/price-pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="亀の画像">
            </picture>
            <div class="price__items">
                <h3 class="price__menu">ライセンス講習</h3>
                <dl class="price__list">
                <div class="price__wrapper">
                    <dt class="price__term">オープンウォーターダイバーコース</dt>
                    <dd class="price__description">¥50,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">アドバンスドオープンウォーターコース</dt>
                    <dd class="price__description">¥60,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">レスキュー＋EFRコース</dt>
                    <dd class="price__description">¥70,000</dd>
                </div>
                </dl>
                <h3 class="price__menu">体験ダイビング</h3>
                <dl class="price__list">
                <div class="price__wrapper">
                    <dt class="price__term">ビーチ体験ダイビング(半日)</dt>
                    <dd class="price__description">¥7,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">ビーチ体験ダイビング(1日)</dt>
                    <dd class="price__description">¥14,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">ボート体験ダイビング(半日)</dt>
                    <dd class="price__description">¥10,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">ボート体験ダイビング(1日)</dt>
                    <dd class="price__description">¥18,000</dd>
                </div>
                </dl> 
                <h3 class="price__menu">ファンダイビング</h3>  
                <dl class="price__list">
                <div class="price__wrapper">
                    <dt class="price__term">ビーチダイビング(2ダイブ)</dt>
                    <dd class="price__description">¥14,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">ボートダイビング(2ダイブ)</dt>
                    <dd class="price__description">¥18,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">スペシャルダイビング(2ダイブ)</dt>
                    <dd class="price__description">¥24,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">ナイトダイビング(1ダイブ)</dt>
                    <dd class="price__description">¥10,000</dd>
                </div>
                </dl>
                <h3 class="price__menu">スペシャルダイビング</h3>  
                <dl class="price__list">
                <div class="price__wrapper">
                    <dt class="price__term">貸切ダイビング(2ダイブ)</dt>
                    <dd class="price__description">¥24,000</dd>
                </div>
                <div class="price__wrapper">
                    <dt class="price__term">1日ダイビング(3ダイブ)</dt>
                    <dd class="price__description">¥32,000</dd>
                </div>
                </dl>
                </div>
            </div>
            <div class="price__btn">
                <a href="page-price.html" class="btn">
                <span>
                    View more
                </span>
                </a>
            </div>
        </div>
        </section>

        <?php get_footer(); ?>

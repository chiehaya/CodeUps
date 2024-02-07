<?php get_header(); ?>
<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Site MAP</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <div class="sitemap layout-page-top">
        <div class="sitemap__inner inner">
            <div class="sitemap__decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <div class="sitemap__nav">
                <div class="sitemap__flex-sp">
                    <div class="sitemap__flex sitemap__item--first">
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">
                                キャンペーン
                                </a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">ライセンス取得</a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">貸切体験ダイビング</a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">ナイトダイビング</a>
                            </li>
                        </ul>
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/about-us")) ?>">
                                私たちについて
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sitemap__flex sitemap__item--second">
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">
                                ダイビング情報
                                </a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">ライセンス講習</a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=3")) ?>">体験ダイビング</a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=2")) ?>">ファンダイビング</a>
                            </li>
                        </ul>
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/blog")) ?>">
                                ブログ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sitemap__flex-sp">
                    <div class="sitemap__flex sitemap__item--third">
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/voice")) ?>">
                                お客様の声
                                </a>
                            </li>
                        </ul>
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/price")) ?>">
                                料金一覧
                                </a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">ライセンス講習</a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=3")) ?>">体験ダイビング</a>
                            </li>
                            <li class="sitemap__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=2")) ?>">ファンダイビング</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sitemap__flex sitemap__item--last">
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/faq")) ?>">
                                よくある質問
                                </a>
                            </li>
                        </ul>
                        <ul class="sitemap__item sitemap__item--last">
                            <li class="sitemap__title">
                                <a href="page-privacy.html">
                                プライバシー<br class="u-mobile">ポリシー
                                </a>
                            </li>
                        </ul>
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="page-terms.html">利用規約</a>
                            </li>
                        </ul>
                        <ul class="sitemap__item">
                            <li class="sitemap__title">
                                <a href="<?php echo esc_url(home_url("/contact")) ?>">お問合せ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
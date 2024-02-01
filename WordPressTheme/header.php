<!DOCTYPE html>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noindex">
    <!-- meta情報 -->
    <?php wp_head(); ?>
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    </head>
    <body>
    <?php if(is_front_page()): ?>
    <header class="header layout-header js-header">
    <?php else : ?>
    <header class="header layout-header js-header is-show">
    <?php endif; ?>    
        <div class="header__inner">
            <h1 class="header__logo">
                <a href="<?php echo esc_url(home_url("/")) ?>">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="codeups">
                </a>
            </h1>
            <nav class="header__nav">
                <ul class="header__nav-items">
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/campaign")) ?>">Campaign<span>キャンペーン</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/about-us")) ?>">About us<span>私たちについて</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">Information<span>ダイビング情報</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/blog")) ?>">Blog<span>ブログ</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/voice")) ?>">Voice<span>お客様の声</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/price")) ?>">Price<span>料金一覧</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/faq")) ?>">FAQ<span>よくある質問</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/contact")) ?>">Contact<span>お問合せ</span></a>
                    </li>
                </ul>
            </nav>
            <button class="header__hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="header__drawer js-drawer">
                <div class="header__drawer-inner">
                    <div class="header__drawer-nav">
                        <div class="page-nav">
                        <div class="page-nav__flex-sp">
                            <div class="page-nav__flex">
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">
                                    キャンペーン
                                </a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">ライセンス取得</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">貸切体験ダイビング</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">ナイトダイビング</a>
                                </li>
                            </ul>
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/about-us")) ?>">
                                    私たちについて
                                </a>
                                </li>
                            </ul>
                            </div>
                            <div class="page-nav__flex">
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">
                                    ダイビング情報
                                </a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">ライセンス講習</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=3")) ?>">体験ダイビング</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/information/?tab=2")) ?>">ファンダイビング</a>
                                </li>
                            </ul>
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/blog")) ?>">
                                    ブログ
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="page-nav__flex-sp">
                            <div class="page-nav__flex">
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/voice")) ?>">
                                    お客様の声
                                </a>
                                </li>
                            </ul>
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/price")) ?>">
                                    料金一覧
                                </a>
                                </li>
                                <li class="page-nav__link">
                                <a href="page-price.html#price">ライセンス講習</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="page-price.html#price-lisence">体験ダイビング</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="page-price.html#price-lisence">ファンダイビング</a>
                                </li>
                            </ul>
                            </div>
                            <div class="page-nav__flex">
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/faq")) ?>">
                                    よくある質問
                                </a>
                                </li>
                            </ul>
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">
                                    プライバシー<br class="u-mobile">ポリシー
                                </a>
                                </li>
                            </ul>
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                                </li>
                            </ul>
                            <ul class="page-nav__item">
                                <li class="page-nav__title">
                                <a href="<?php echo esc_url(home_url("/contact")) ?>">お問合せ</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
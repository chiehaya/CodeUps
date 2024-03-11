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
                            <?php
                    $current_term_id = 0;

                    // カテゴリーの取得
                    $terms = get_terms(array(
                        'taxonomy' => 'campaign_category',
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        'number'  => 5
                    ));

                    // 現在のターム ID の取得
                    $queried_object = get_queried_object();
                    if ($queried_object instanceof WP_Term) :
                        $current_term_id = $queried_object->term_id;
                    endif;

                    // タームが存在する場合にのみ表示
                    if ($terms) :
                    ?>
                        <ul class="page-nav__item">
                        <?php
                        $home_class = (is_post_type_archive()) ? 'is-active' : '';
                        $home_link = sprintf(
                        '<li class="page-nav__title %s"><a href="%s" class="">キャンペーン</a></li>',
                        $home_class,
                        esc_url(home_url('/campaign')),
                        esc_attr(__('View all posts', 'textdomain'))
                        );
                        echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                        foreach ($terms as $term):
                        $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                        $term_link = sprintf('<li class="page-nav__link %s"><a href="%s">%s</a></li>', $term_class, esc_url(get_term_link($term->term_id)), esc_html($term->name));
                        echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                        endforeach;
                        ?>
                    </ul>
                    <?php endif; ?>
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
                                <a href="<?php echo esc_url(home_url("/price#price")) ?>">ライセンス講習</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/price#price-lisence")) ?>">体験ダイビング</a>
                                </li>
                                <li class="page-nav__link">
                                <a href="<?php echo esc_url(home_url("/price#price-lisence")) ?>">ファンダイビング</a>
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
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
                <?php foreach (range(1, 4) as $i): 
                $index = sprintf("%02d", $i); // 01, 02, 03のように0埋めする
                $mainView = get_field('mv_group' . $index); 
                
                // mv_pcとmv_spの両方に値がある場合にのみループを回す
                if (!empty($mainView['mv_pc' . $index]) && !empty($mainView['mv_sp' . $index])) :
                    $pcImage = $mainView['mv_pc' . $index]['url'];
                    $spImage = $mainView['mv_sp' . $index]['url'];
                    $mvText = $mainView['mv_text' . $index];
                ?>
                    <div class="swiper-slide">
                        <picture class="mv__img">
                            <source media="(min-width: 768px)" srcset="<?php echo $pcImage; ?>">
                            <img src="<?php echo $spImage; ?>" alt="<?php echo $mvText; ?>">
                        </picture>
                    </div>
                <?php
                endif;
                endforeach; 
                ?>
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
            <?php
            $args = array(
                "post_type" => "campaign", // カスタム投稿のスラッグ名
                "posts_per_page" => 10, // 表示する件数
                'orderby' => 'date',
                'order' => 'DESC'  
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <div class="campaign__list">
                    <div class="campaign__swiper swiper js-campaign-swiper">
                        <div class="swiper-wrapper">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="swiper-slide campaign__item campaign-item">
                                    <div class="campaign-item__img">
                                        <?php if (get_the_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                        <?php else : ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                                        <?php endif ?>
                                    </div>
                                    <div class="campaign-item__content">
                                    <?php
                                        $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');

                                        foreach (!empty($taxonomy_terms) ? $taxonomy_terms : [] as $taxonomy_term) :
                                            echo '<p class="campaign-item__category category">' . esc_html($taxonomy_term->name) . '</p>';
                                        endforeach;
                                    ?>
                                        <p class="campaign-item__title">
                                            <?php the_title(); ?>
                                        </p>
                                        <?php  $campaignPrice= get_field('campaign_price');
                                        if ($campaignPrice) : ?>
                                        <p class="campaign-item__text"><?php echo $campaignPrice['campaign_text']; ?></p>
                                        <div class="campaign-item__price">
                                            <p class="campaign-item__listing-price"><?php echo $campaignPrice['listing_price']; ?></p>
                                            <p class="campaign-item__discount-price"><?php echo $campaignPrice['discount_price']; ?></p>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <p class="campaign__message">記事が投稿されていません</p>
            <?php endif; ?>
            <div class="campaign__btn">
                <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="btn">
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
                        <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="btn">
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
        <div class="information__inner inner">
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
                    <p class="information__text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                        正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
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
            <?php if ($the_query->have_posts()) : ?>
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
            <?php else : ?>
            <p class="blog__message">記事が投稿されていません</p>
            <?php endif; ?>
            <div class="blog__btn">
                <a href="<?php echo esc_url(home_url("/blog")) ?>" class="btn">
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
            <?php
            $args = array(
                "post_type" => "voice",
                "posts_per_page" => 2
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="voice__contents voice-cards">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="voice-cards__item">
                        <a href="<?php echo esc_url(home_url("/voice")) ?>" class="voice-card">
                            <div class="voice-card__head">
                                <div class="voice-card__description">
                                    <div class="voice-card__type">
                                    <?php  $voiceCustomer = get_field('voice_customer');
                                            if ($voiceCustomer) : ?>
                                            <p class="voice-card__gender"><?php echo $voiceCustomer['voice_age']; ?>(<?php echo $voiceCustomer['voice_gender']; ?>)</p>
                                    <?php endif; ?>
                                    <?php
                                    $taxonomy_terms_category = get_the_terms($post->ID, 'voice_category');
                                    if (!empty($taxonomy_terms_category)) :
                                        foreach ($taxonomy_terms_category as $taxonomy_term_category) :
                                            echo '<p class="voice-card__category category">' . esc_html($taxonomy_term_category->name) . '</p>';
                                        endforeach;
                                    endif;
                                    ?>
                                    </div>
                                    <p class="voice-card__title">
                                    <?php
                                        $title = get_the_title();
                                        $limited_title = mb_strlen($title, 'UTF-8') > 20 ? mb_substr($title, 0, 20, 'UTF-8') . '...' : $title;
                                        echo $limited_title;
                                        ?>
                                    </p>
                                </div>
                                <figure class="voice-card__img js-colorbox">
                                    <?php if (get_the_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                                    <?php endif ?>
                                </figure>
                            </div>
                            <p class="voice-card__text">
                                <?php $content = get_the_content();
                                echo wp_trim_words($content, 200, '...');
                                ?>
                            </p>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
                <p class="voice__message">記事が投稿されていません</p>
            <?php endif; ?>
            <div class="voice__btn">
                <a href="<?php echo esc_url(home_url("/voice")) ?>" class="btn">
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
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="亀の画像">
                </picture>
                <div class="price__items">
                    <?php
                    $pran_fields = array('pran01', 'pran02', 'pran03', 'pran04');
                    foreach ($pran_fields as $field) :
                            $price_menu = SCF::get_option_meta('price', $field . '_name');
                            $free_item = SCF::get_option_meta('price', $field);
                    if (!empty($free_item) && isset($free_item[0][$field . '_menu']) && isset($free_item[0][$field . '_price']) && $free_item[0][$field . '_menu'] !== '' && $free_item[0][$field . '_price'] !== '') :
                    ?>
                    <h3 class="price__menu"><?php echo esc_html($price_menu); ?></h3>
                    <dl class="price__list">
                        <?php foreach ($free_item as $fields) : ?>
                            <div class="price__wrapper">
                                <dt class="price__term"><?= $fields[$field . '_menu']; ?></dt>
                                <dd class="price__description"><?= $fields[$field . '_price']; ?></dd>
                            </div>
                        <?php endforeach; ?>
                    </dl>
                    <?php else : ?>
                        <p>現在メニューはありません</p>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>      
            </div>
            <div class="price__btn">
                <a href="<?php echo esc_url(home_url("/price")) ?>" class="btn">
                    <span>
                        View more
                    </span>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>


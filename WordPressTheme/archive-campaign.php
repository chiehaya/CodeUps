<?php get_header(); ?>
<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Campaign</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>
    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    <div class="camapaign-page layout-page-top">
        <div class="camapaign-page__inner inner">
            <div class="camapaign-page__decoration page-decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
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
            <ul class="camapaign-page__tab tab">
                <?php
                // ALL タブの作成
                $home_class = (is_post_type_archive()) ? 'is-active' : '';
                $home_link = sprintf(
                    '<li class="tab__link %s"><a href="%s" class="">ALL</a></li>',
                    $home_class,
                    esc_url(home_url('/campaign')),
                    esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                // タームのリンクの作成
                foreach ($terms as $term):
                    $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                    $term_link = sprintf('<li class="tab__link %s"><a href="%s">%s</a></li>', $term_class, esc_url(get_term_link($term->term_id)), esc_html($term->name));
                    echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                endforeach;
                ?>
            </ul>
            <?php endif; ?>

            <?php if (have_posts()) : ?>
            <div class="campaign-page__cards">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="campaign-page__card campaign-item">
                        <div class="campaign-item__img campaign-item__img--sub">
                            <?php if(get_the_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                            <?php else : ?>
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                            <?php endif ?>
                        </div>
                        <div class="campaign-item__content campaign-item__content--sub">
                        <?php
                            $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');

                            if (!empty($taxonomy_terms)) :
                                foreach ($taxonomy_terms as $taxonomy_term) :
                                    echo '<p class="campaign-item__category category">' . esc_html($taxonomy_term->name) . '</p>';
                                endforeach;
                            endif;
                        ?>
                            <p class="campaign-item__title campaign-item__title--sub"><?php the_title(); ?></p>
                            <?php  $campaignPrice= get_field('campaign_price');
                                if ($campaignPrice) : ?>
                            <p class="campaign-item__text campaign-item__text--sub"><?php echo $campaignPrice['campaign_text']; ?></p>
                            <div class="campaign-item__price">
                                <p class="campaign-item__listing-price"><?php echo $campaignPrice['listing_price']; ?></p>
                                <p class="campaign-item__discount-price"><?php echo $campaignPrice['discount_price']; ?></p>
                            </div>
                            <?php endif; ?>
                            <p class="campaign-item__message">
                                <?php $content = get_the_content();
                                echo wp_trim_words($content, 170, '...');
                                ?>
                            </p>
                            <?php  $campaignTime= get_field('campaign_time');
                                if ($campaignTime) : ?>
                            <p class="campaign-item__date">
                                <?php echo $campaignTime['campaign_start_time']; ?>-<?php echo $campaignTime['campaign_end_time']; ?>
                            </p>
                            <?php endif; ?>
                            <p class="campaign-item__reservation">
                                ご予約・お問い合わせはコチラ
                            </p>
                            <div class="campaign-item__btn">
                                <a href="<?php echo esc_url(home_url("/contact")) ?>" class="btn">
                                    <span>
                                        Contact us
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
                <div class="campaign-page__pagenavi">
                    <?php wp_pagenavi(); ?>
                </div>
            <?php else: ?>
                <p class="campaign-page__message">記事が投稿されていません</p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

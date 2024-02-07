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
                $terms = get_terms(array(
                    // 表示するタクソノミースラッグを記述
                'taxonomy' => 'campaign_category',
                'orderby' => 'name',
                'order'   => 'ASC',
                // 表示するタームの数を指定
                'number'  => 5
                ));

                // 現在のターム ID の取得
                $queried_object = get_queried_object();
                if ($queried_object instanceof WP_Term) :
                    $current_term_id = $queried_object->term_id;
                endif;

            // タームが存在する場合にのみ表示
                if ($terms):
            ?>
            <ul class="camapaign-page__tab tab">
                <?php
                // カスタム投稿一覧ページへのURL
                $home_class = (is_post_type_archive()) ? 'is-active' : '';
                $home_link = sprintf(
                    '<li class="tab__link %s">
                        <a href="%s" class="">ALL</a>
                    </li>',
                    $home_class,
                    esc_url(home_url('/campaign')),
                    esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                // タームのリンク
                foreach ($terms as $term) :
                    $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                    ?>
                    <li class="tab__link <?= esc_attr($term_class); ?>">
                        <a href="<?= esc_url(get_term_link($term->term_id)); ?>" class=""><?= esc_html($term->name); ?></a>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
            <?php endif; ?>

            <?php if (have_posts()) : ?>
            <div class="campaign-page__cards">
            <?php
                $menu_slug = get_query_var('campaign_category');
                $args = array(
                "post_type" => "campaign",
                'tax_query' => array(
                array(
                'taxonomy' => 'campaign_category',
                'field'    => 'slug',
                'terms'    => $menu_slug,
                ),
                ),
                );
                $the_query = new WP_Query($args);
            ?>
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
                        if ( ! empty( $taxonomy_terms ) ) {
                            foreach( $taxonomy_terms as $taxonomy_term ) {
                                echo '<p class="campaign-item__category category">' . esc_html( $taxonomy_term->name ) . '</p>';
                                            //ここの呼び出しは適宜合わせる　
                            }
                        }
                        ?>
<p class="campaign-item__title campaign-item__title--sub"><?php the_title(); ?></p>
                            <p class="campaign-item__text campaign-item__text--sub">全部コミコミ(お一人様)</p>
                            <div class="campaign-item__price">
                                <?php if(get_field('listing_price')): ?>
                                    <p class="campaign-item__listing-price"><?php the_field('listing_price') ?></p>
                                <?php endif; ?>
                                <?php if(get_field('discount_price')): ?>
                                    <p class="campaign-item__discount-price"><?php the_field('discount_price') ?></p>
                                <?php endif; ?>
                            </div>
                            <p class="campaign-item__message">
                                <?php $content = get_the_content();
                                echo wp_trim_words($content, 170, '...');
                                ?>
                            </p>
                            <?php if(get_field('campaign_date')): ?>
                            <p class="campaign-item__date">
                                    <?php the_field('campaign_date') ?>
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
</main>
<?php get_footer(); ?>
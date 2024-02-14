<?php get_header(); ?>
<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Voice</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <div class="voice-page layout-page-top">
        <div class="voice-page__inner inner">
            <div class="voice-page__decoration page-decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>

            <?php
            $current_term_id = 0;
            $terms = get_terms(array(
                'taxonomy' => 'voice_category',
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

                <ul class="voice-page__tab tab">
                <?php
                // ALL タブの作成
                $home_class = (is_post_type_archive()) ? 'is-active' : '';
                $home_link = sprintf(
                    '<li class="tab__link %s">
                        <a href="%s" class="">ALL</a>
                    </li>',
                    $home_class,
                    esc_url(home_url('/voice')),
                    esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                // タームのリンクの作成
                foreach ($terms as $term) :
                    $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                    $term_link = sprintf(
                        '<li class="tab__link %s">
                            <a href="%s" class="">%s</a>
                        </li>',
                        $term_class,
                        esc_url(get_term_link($term->term_id)),
                        esc_html($term->name)
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                endforeach ?>
            </ul>
            <?php endif; ?>

            <?php if (have_posts()) : ?>
            <div class="voice-page__contents voice-cards">
                <?php while (have_posts()) : the_post(); ?>        
                    <a href="<?php echo esc_url(home_url("/voice")) ?>" class="voice-cards__item">
                        <div class="voice-card">
                            <div class="voice-card__head">
                                <div class="voice-card__description">
                                    <div class="voice-card__type">
                                    <?php  $voiceCustomer = get_field('voice_customer');
                                            if ($voiceCustomer) : ?>
                                            <p class="voice-card__gender"><?php echo $voiceCustomer['voice_age']; ?>(<?php echo $voiceCustomer['voice_gender']; ?>)</p>
                                    <?php endif; ?>
                                    <?php
                                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                                        echo (!empty($taxonomy_terms))
                                            ? implode('', array_map(function($term) {
                                                return '<p class="voice-card__category category">' . esc_html($term->name) . '</p>';
                                            }, $taxonomy_terms))
                                            : '';
                                    ?>
                                    </div>
                                    <p class="voice-card__title"><?php the_title(); ?></p>
                                </div>
                                <figure class="voice-card__img js-colorbox">
                                    <?php if(get_the_post_thumbnail()): ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                                    <?php endif ?>
                                </figure>
                            </div>
                            <p class="voice-card__text">
                                <?php $content = get_the_content();
                                echo wp_trim_words($content, 200, '...');
                                ?>
                            </p>
                        </div>
                    </a>
                <?php endwhile; ?>      
                </div>
                <div class="voice-page__pagenavi">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
            <?php else: ?>
                <p class="voice-page__message">記事が投稿されていません</p>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>

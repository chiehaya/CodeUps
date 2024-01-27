<?php get_header(); ?>
<main>
<section class="sub-mv js-mv">
    <h1 class="sub-mv__title">Blog</h1>
    <picture class="sub-mv__img">
    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.jpg">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.jpg" alt="サブメインビュー">
    </picture>
</section>

<div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <div class="breadcrumb__content">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    </div>
</div>

<div class="two-colums layout-two-colums">
    <div class="two-colums__inner inner">
    <div class="two-colums__decoration page-decoration">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
    </div>
    <div class="two-colums__contents">
        <div class="two-colums__main">
        <div class="two-colums__items cards cards--2col">
            <?php if (have_posts()): 
                while (have_posts()):
                the_post();?>
            <a href="<?php the_permalink(); ?>" class="cards__item card">
            <figure class="card__img">
                <?php if(get_the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                <?php endif ?>
            </figure>
            <div class="card__body">
                <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n/d'); ?></time>
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
            <?php endwhile; endif; ?>
        </div>
        <div class="two-colums__pagenavi wp-pagenavi">
            <?php wp_pagenavi(); ?>
        </div>
        </div>
        <aside class="two-colums__sub detail">
        <div class="detail__group">
            <h3 class="detail__side-title">
            人気記事
            </h3>
            <?php
            $arg = array(
             'posts_per_page' =>3, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'trending_article' // 表示したいカテゴリーのスラッグを指定
        );
            $posts = get_posts( $arg );
            if( $posts ): ?>
            <div class="detail__popular popular">
            <?php
            foreach ( $posts as $post ) :
            setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>" class="popular__item">
                <figure class="popular__img">
                    <?php if(get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                    <?php endif ?>
                </figure>
                <div class="popular__body">
                <time class="popular__date" datetime="?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                <p class="popular__title">
                    <?php the_title(); ?>
                </p>
                </div>
            </a>
            <?php endforeach; ?>
            </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="detail__group">
            <h3 class="detail__side-title">
            口コミ
            </h3>
            <div class="detail__voice detail-voice">
            <a href="#" class="detail-voice__item">
                <div class="detail-voice__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice05.jpg" alt="">
                </div>
                <p class="detail-voice__kinds">
                30代(カップル)
                </p>
                <p class="detail-voice__title">
                ここにタイトルが入ります。ここにタイトル
                </p>
            </a>
            <div class="detail-voice__btn">
                <a href="#" class="btn">
                <span>
                    View more
                </span>
                </a>
            </div>
            </div>
        </div>
        <div class="detail__group">
            <h3 class="detail__side-title">
            キャンペーン
            </h3>
            <div class="detail__campaign detail-campaign">
            <a href="#" class="detail-campaign__item">
                <div class="detail-campaign__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.jpg" alt="キャンペーン">
                </div>
                <div class="detail-campaign__content">
                <p class="detail-campaign__title">ライセンス取得</p>
                <p class="detail-campaign__text">全部コミコミ(お一人様)</p>
                <div class="detail-campaign__price">
                    <p class="detail-campaign__listing-price">¥56,000</p>
                    <p class="detail-campaign__discount-price">¥46,000</p>
                </div>
                </div>
            </a>
            <a href="#" class="detail-campaign__item">
                <div class="detail-campaign__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign02.jpg" alt="キャンペーン">
                </div>
                <div class="detail-campaign__content">
                <p class="detail-campaign__title">貸切体験ダイビング</p>
                <p class="detail-campaign__text">全部コミコミ(お一人様)</p>
                <div class="detail-campaign__price">
                    <p class="detail-campaign__listing-price">¥24,000</p>
                    <p class="detail-campaign__discount-price">¥18,000</p>
                </div>
                </div>
            </a>
            </div>
            <div class="detail-campaign__btn">
            <a href="#" class="btn">
                <span>
                View more
                </span>
            </a>
            </div>
        </div>
        <div class="detail__group">
            <h3 class="detail__side-title">
            アーカイブ
            </h3>
            <ul class="detail__archive detail-archive">
            <?php
            // 年ごとに分けて月を表示する
            $blog_by_year = array();
            $the_query = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 5,
            ));
            while ($the_query->have_posts()) : $the_query->the_post();
                $year = get_the_date('Y');
                $month = get_the_date('n');
                $blog_by_year[$year][$month][] = $post;
            endwhile;
            wp_reset_postdata();

            // 年ごとのループ
            foreach ($blog_by_year as $year => $months) :
            ?>
                <li class="detail-archive__item js-archive-item">
                    <p class="detail-archive__year js-archive-year">
                        <?php echo esc_html($year); ?>年
                    </p>
                    <?php
                    // 月ごとのループ
                    foreach ($months as $month => $blog) :
                        $post_count = count($blog); // 投稿数をカウント
                    ?>
                    <p class="detail-archive__month js-archive-month">
                        <a id="post-<?php the_ID(); ?>" href="<?php echo esc_url(home_url("{$year}/{$month}/")); ?>">
                            <?php echo esc_html($month); ?>月
                        </a>
                    </p>
                    <?php endforeach; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        </div>
        </aside>
    </div>
    </div>
</div>
<?php get_footer(); ?>
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
        <?php
        $args = array(
            "post_type" => "voice", //「カスタム投稿のスラッグ名」
            "posts_per_page" => 1  //「表示する件数」
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="detail__voice detail-voice">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo esc_url(home_url("/voice")) ?>" class="detail-voice__item">
                    <div class="detail-voice__img">
                        <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                        <?php endif ?>
                    </div>
                    <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_gender');//'genre'はスラッグ名
                        if ( ! empty( $taxonomy_terms ) ) {
                            foreach( $taxonomy_terms as $taxonomy_term ) {
                                echo '<p class="detail-voice__kinds">' . esc_html( $taxonomy_term->name ) . '</p>';
                                            //ここの呼び出しは適宜合わせる　
                            }
                        }
                        ?>
                    <p class="detail-voice__title">
                        <?php the_title(); ?>
                    </p>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </a>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
            <div class="detail-voice__btn">
                <a href="<?php echo esc_url(home_url("/voice")) ?>" class="btn">
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
        <?php
        $args = array(
            "post_type" => "campaign", //「カスタム投稿のスラッグ名」
            "posts_per_page" => 2  //「表示する件数」
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="detail__campaign detail-campaign">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="detail-campaign__item">
                <div class="detail-campaign__img">
                <?php if(get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                <?php endif ?>
                </div>
                <div class="detail-campaign__content">
                <p class="detail-campaign__title">
                    <?php the_title(); ?>
                </p>
                <p class="detail-campaign__text">全部コミコミ(お一人様)</p>
                <div class="detail-campaign__price">
                    <?php if(get_field('listing_price')): ?>
                    <p class="detail-campaign__listing-price">
                        <?php the_field('listing_price') ?> 
                    </p>
                    <?php endif; ?>
                    <?php if(get_field('discount_price')): ?>
                        <p class="detail-campaign__discount-price"><?php the_field('discount_price') ?></p>
                    <?php endif; ?>
                </div>
                </div>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </a>
        </div>
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>
        <div class="detail-campaign__btn">
            <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="btn">
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
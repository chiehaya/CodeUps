<aside class="two-colums__sub detail">
    <div class="detail__group">
        <h3 class="detail__side-title">
            人気記事
        </h3>
        <div class="detail__popular popular">
            <?php
            $arg = array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'category_name' => 'trending_article'
            );
            $posts = get_posts($arg);
            if ($posts) :
            ?>
            <?php
            foreach ($posts as $post) :
                setup_postdata($post);
            ?>
                <a href="<?php the_permalink(); ?>" class="popular__item">
                    <figure class="popular__img">
                        <?php if (get_the_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                        <?php endif ?>
                    </figure>
                    <div class="popular__body">
                        <time class="popular__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n/j'); ?></time>
                        <p class="popular__title">
                            <?php the_title(); ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="detail__group">
        <h3 class="detail__side-title">
        口コミ
        </h3>
        <div class="detail__voice detail-voice">
            <?php
            $args = array(
                "post_type" => "voice", //「カスタム投稿のスラッグ名」
                "posts_per_page" => 1,  //「表示する件数」
                'orderby' => 'date',
                'order' => 'DESC'   
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo esc_url(home_url("/voice")) ?>" class="detail-voice__item">
                    <div class="detail-voice__img">
                        <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                        <?php endif ?>
                    </div>
                    <?php  $voiceCustomer = get_field('voice_customer');
                            if ($voiceCustomer) : ?>
                            <p class="detail-voice__kinds"><?php echo $voiceCustomer['voice_age']; ?>(<?php echo $voiceCustomer['voice_gender']; ?>)</p>
                    <?php endif; ?>
                    <p class="detail-voice__title">
                        <?php the_title(); ?>
                    </p>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
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
        <div class="detail__campaign detail-campaign">
            <?php
            $args = array(
                "post_type" => "campaign", //「カスタム投稿のスラッグ名」
                "posts_per_page" => 2,  //「表示する件数」
                'orderby' => 'date',
                'order' => 'DESC'   
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
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
                    <?php  $campaignPrice= get_field('campaign_price');
                                if ($campaignPrice) : ?>
                    <p class="detail-campaign__text"><?php echo $campaignPrice['campaign_text']; ?></p>
                    <div class="detail-campaign__price">
                        <p class="detail-campaign__listing-price">
                            <?php echo $campaignPrice['listing_price']; ?>
                        </p>
                        <p class="detail-campaign__discount-price">
                            <?php echo $campaignPrice['discount_price']; ?>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <p>記事が投稿されていません</p>
                <?php endif; ?>
            </a>
        </div>
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
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1, // すべての記事を取得する
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $the_query = new WP_Query($args);
            $blog_by_year = array();

            while ($the_query->have_posts()) : $the_query->the_post();
                $year = get_the_date('Y');
                $month = get_the_date('n');
                $blog_by_year[$year][$month][] = $post;
            endwhile;

            wp_reset_postdata();

            if (!empty($blog_by_year)) :
            foreach ($blog_by_year as $year => $months) :
            ?>
                <li class="detail-archive__item js-archive-item">
                    <p class="detail-archive__year js-archive-year">
                        <?php echo esc_html($year); ?>年
                    </p>
                    <?php
                    foreach ($months as $month => $blog) :
                        $post_count = count($blog);
                    ?>
                        <p class="detail-archive__month js-archive-month">
                            <a id="post-<?php the_ID(); ?>" href="<?php echo esc_url(home_url("{$year}/{$month}/")); ?>">
                                <?php echo esc_html($month); ?>月
                            </a>
                        </p>
                    <?php endforeach; ?>
                </li>
            <?php endforeach; ?>
            <?php else : ?>
                <li class="detail-archive__message">記事が投稿されていません</li>
            <?php endif; ?>
        </ul>
    </div>
</aside>
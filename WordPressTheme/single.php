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

<section class="two-colums layout-two-colums">
    <div class="two-colums__inner inner">
    <div class="two-colums__decoration page-decoration">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
    </div>
    <div class="two-colums__contents">
        <div class="two-colums__content single-blog">
        <time class="single-blog__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.n/j'); ?></time>
        <h2 class="single-blog__title"><?php the_title(); ?></h2>
        <figure class="single-blog__img">
        <?php if(get_the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                <?php endif ?>
        </figure>
        <?php the_content(); ?>
        <?php 
            $prev = get_previous_post(); // 直前の投稿の情報を取得
            $prev_url = $prev ? get_permalink($prev->ID) : null; // 直前の投稿のパーマリンク（URL）を取得

            $next = get_next_post(); // 次の投稿の情報を取得
            $next_url = $next ? get_permalink($next->ID) : null; // 次の投稿のパーマリンク（URL）を取得
        ?>
        <div class="two-colums__pagenavi wp-pagenavi">
        <?php if($prev): ?>
            <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>"></a>
        <?php endif; ?>
        <?php if($next): ?>
            <a class="nextpostslink" rel="prev" href="<?php echo $next_url; ?>"></a>
        <?php endif; ?>
        </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    </div>
</section>
<?php get_footer(); ?>
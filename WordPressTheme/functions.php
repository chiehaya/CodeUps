<?php

// スタイルシートとスクリプトを読み込む
function codeups_enqueue_styles_scripts() {
    wp_enqueue_style('codeups-google-font-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap');
    wp_enqueue_style('codeups-google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap');
    wp_enqueue_style('codeups-google-font-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');

    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('codeups-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), null, true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('codeups-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'jquery-inview', 'swiper-js'), null, true);
    wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery', 'jquery-inview', 'swiper-js'), null, true);
}

// WordPressにフックする
add_action('wp_enqueue_scripts', 'codeups_enqueue_styles_scripts');

function enqueue_custom_scripts() {
    echo '<script>';
    echo 'jQuery(document).ready(function($){';
    echo 'if (window.innerWidth > 768) {';
    echo 'executeOnLargeScreen();';
    echo '} else {';
    echo 'executeOnSmallScreen();';
    echo '}';
    echo '});';
    echo '</script>';
}

// front-page.phpの場合にenqueue_custom_scripts()を呼び出す
if (is_front_page()) {
    add_action('wp_footer', 'enqueue_custom_scripts');
}

function change_posts_per_page($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if (is_post_type_archive('voice') && $query->is_post_type_archive('voice')) {
        $query->set('posts_per_page', 6);
    }

    if (is_post_type_archive('campaign') && $query->is_post_type_archive('campaign')) {
        $query->set('posts_per_page', 4);
    }

    if (is_tax('voice_category') && $query->is_tax('voice_category')) {
        $query->set('posts_per_page', 6);
    }

    if (is_tax('campaign_category') && $query->is_tax('campaign_category')) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

function custom_posts_per_page($query) {
    if ($query->is_main_query() && !is_admin() && is_date()) {
        $query->set('posts_per_page', 10);
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}

function campaign_selectlist($tag, $unused)
{
    //セレクトボックスの名前が'select-campaign'かどうか
    if ($tag['name'] != 'select-campaign') {
        return $tag;
    }
    //get_posts()でセレクトボックスの中身を作成する
    //クエリの作成
    $args = array(
        'numberposts' => 3,
        'post_type' => 'campaign', //カスタム投稿タイプを指定
        //並び順⇒セレクトボックス内の表示順
        'orderby' => 'ID',
        'order' => 'ASC'
    );
    //クエリをget_posts()に入れる
    $campaign_posts = get_posts($args);
    //クエリがなければ戻す
    if (!$campaign_posts) {
        return $tag;
    }
    //セレクトボックスにforeachで入れる
    foreach ($campaign_posts as $campaign_post) {
        $tag['raw_values'][] = $campaign_post->post_title;
        $tag['values'][] = $campaign_post->post_title;
        $tag['labels'][] = $campaign_post->post_title;
    }
    return $tag;
}
add_filter('wpcf7_form_tag', 'campaign_selectlist', 10, 2);

add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
        $title = single_term_title('',false);
    } elseif (is_post_type_archive() ){
        $title = post_type_archive_title('',false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：'.esc_html( get_search_query(false) );
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {

	}
    return $title;
});


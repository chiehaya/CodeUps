<?php
// スタイルシートとスクリプトを読み込む
function codeups_enqueue_styles_scripts() {
    // Google Fonts
    wp_enqueue_style('codeups-google-font-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap');
    wp_enqueue_style('codeups-google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap');
    wp_enqueue_style('codeups-google-font-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');

    // カスタムスタイル.css
    wp_enqueue_style('codeups-style', get_template_directory_uri() . '/assets/css/style.css');

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // jQuery Inview
    wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);

    // カスタムscript.js
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

//アーカイブの表示件数変更
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('campaign') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '4' ); //表示件数を指定 全部表示させたいときは-1を指定する
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
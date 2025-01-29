<?php 
/* ------------- Index ------------- 
 * 1. 読み込み
 *      1.1 CSSとJSの読み込み
 * 2. 関数定義
 *      2.1 wp_nav_menu(メニューの表示)のカスタマイズ
 *      2.2 パンくずリスト表示用関数
 * 9. 設定項目
 *      9.1 管理画面のメニューを有効に
 *      9.2 カスタム投稿(News)を作成
   --------------------------------- */


// ---------- 1. 読み込み ---------- 
// 1.1 CSSとJSの読み込み
function add_link_files() {
    // * 後でキャッシュ削除できるようにする

    // CSSの読み込み
    wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/assets/css/main.css?'. date('YmdHis', filemtime(get_template_directory() . '/assets/css/main.css')) );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css?'. date('YmdHis', filemtime(get_template_directory() . '/style.css')));
    wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri().'/assets/css/tailwind.css?'. date('YmdHis', filemtime(get_template_directory() . '/assets/css/tailwind.css')));
    wp_enqueue_style( 'footer', get_stylesheet_directory_uri().'/assets/css/footer.css?'. date('YmdHis', filemtime(get_template_directory() . '/assets/css/footer.css')) );
    wp_enqueue_style( 'header', get_stylesheet_directory_uri().'/assets/css/header.css?'. date('YmdHis', filemtime(get_template_directory() . '/assets/css/header.css')) );
  
    // front-pageでfront-page.cssを読み込む
    if ( is_front_page() ) {
        wp_enqueue_style( 'front-page-css', get_template_directory_uri() . '/assets/css/front-page.css?'. date('YmdHis', filemtime(get_template_directory() . '/assets/css/front-page.css')));
    }
    
    // JavaScriptの読み込み
    // get_template_dictionary_uri()とget_theme_file_uri()のどっちがいいか後で調べる
    // dateをつけることで自動でキャッシュ削除されるように
    wp_enqueue_script( 'test', get_template_directory_uri().'/assets/js/test.js?'. date('YmdHis', filemtime(get_template_directory() . '/assets/js/test.js')), array(), '1.0', true);
    wp_enqueue_script( 'header', get_template_directory_uri().'/assets/js/header.js?'. date('YmdHis', filemtime(get_template_directory() . '/assets/js/header.js')), array(), '1.0', true);
    wp_enqueue_script( 'front-page-js', get_template_directory_uri().'/assets/js/front-page.js?'. date('YmdHis', filemtime(get_template_directory() . '/assets/js/front-page.js')), array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_link_files' );

// Gutenberg用のCSS読み込み
function mytheme_setup(){
    add_theme_support( 'wp-block-style'  );
}
add_action( 'after_setup_theme', 'mytheme_setup');

// ---------- 2. 関数定義 ----------
// 2.1 wp_nav_menu(メニューの表示)のカスタマイズ
// header.php, wp_nav_menu(walker)
class Custom_Walker_Main_Menu extends Walker_Nav_Menu {
    private $current_item_title = ''; // 親タイトルを保存するためのプロパティ

    /**
     * メニューの新しいレベルが始まる前に呼び出されます。
     *
     * @param string $output 参照渡し。追加の内容を付加するために使います。
     * @param int $depth メニュー項目の深さ。インデントに使います。
     * @param stdClass $args wp_nav_menu() の引数オブジェクト。
     */
    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ($depth === 0) {
            // 親タイトルを使用してサブメニューのヘッダを追加
            $output .= '<ul class="header__transition-sub-menu-slow sub-menu absolute lg:top-[70px] lg:right-0 bg-primary-700  flex flex-wrap w-full px-24">'
                     . '<h3 class="text-[32px] font-bold p-8 text-left text-white w-full mb-2">' . $this->current_item_title . '</h3>';
        } else {
            $output .= '<ul class="sub-2-menu hidden">';
        }
    }

    /**
     * 各メニュー項目が始まる前に呼び出されます。
     *
     * @param string $output 参照渡し。追加の内容を付加するために使います。
     * @param object $item メニュー項目データオブジェクト。
     * @param int $depth メニュー項目の深さ。
     * @param stdClass $args wp_nav_menu() の引数オブジェクト。
     * @param int $id 現在のアイテムID。
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $css_classes = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

        // 親タイトルの更新
        if ($depth == 0) {
            $this->current_item_title = $item->title;  // 現在の親項目のタイトルを保存
            $output .= '<li id="menu-item-' . $item->ID . '" class="' . $css_classes . ' header__transition-colors-slow flex h-[70px] items-center border-b-2 text-black lg:hover:text-primary-900 border-transparent hover:border-primary-900">';
            $output .= '<h4 class=""><a href="' . $item->url . '" class="text-[18px] font-semibold">' . $item->title . '</a></h4>';
        } else {
            $output .= '<li id="menu-item-' . $item->ID . '" class="' . $css_classes . ' w-1/4 hover:bg-primary-900">';
            $output .= '<a href="' . $item->url . '" class="block px-6 py-4 text-center text-base text-white text-lg font-semibold">' . $item->title . '</a>';
        }
    }
}

// 2.2 パンくずリスト表示用関数
function custom_breadcrumb() {
    echo '<ol><li><a href="'.esc_url( home_url() ).'" class="hover:text-primary-900" >ホーム</a></li>';
    if (is_singular()):
      the_title('<li>', '</li>');
    endif;
    echo '</ol>';
}



// ---------- 9. 設定項目 ---------- 
// 9.1 管理画面のメニューを有効に
function register_my_menus() { 
    register_nav_menus(
        array(
        'header' => 'ヘッダー',//表示する位置
        'footer' => 'フッター',//表示する位置
        'side' => 'サイド',//表示する位置
        ) 
    );
}
add_action( 'after_setup_theme', 'register_my_menus' );

// 9.2 カスタム投稿(News)を作成
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'ニュース', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'News',    // カスタム投稿の識別名
        ],
        'public'        => true,    // 投稿タイプをpublicにするか
        'has_archive'   => true,    // アーカイブ機能ON/OFF
        'menu_position' => 4,       // 管理画面上での配置場所
        'show_in_rest'  => true,    // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports'      => ["title", "editor"]
    ]);
    register_taxonomy( 'news-category', 'news', [
        'label'         => 'カテゴリー',
        'hierarchical'  => true,
        'public'        => true,
        'show_in_rest'  => true,
    ]);
}

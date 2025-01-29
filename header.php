<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="早稲田大学,創造理工学部,経営システム工学科,大森研究室,ロジスティクス,サプライチェーンマネジメント,サービスオペレーション">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="大森研究室｜早稲田大学　創造理工学部　経営システム工学科">
    <meta property="og:description"
        content="早稲田大学　創造理工学部　経営システム工学科　大森研究室のオフィシャルサイトです．当研究室では，IE(Industrial Engineering)やOR(Operations Research)をベースとしたロジスティクス、サプライチェーンマネジメント、サービスのオペレーションの研究を行っています．また，企業との産学連携プロジェクトや海外大学との共同研究・国際プロジェクトにも多数参画しています．">
    <meta property="og:site_name" content="大森研究室｜早稲田大学　創造理工学部　経営システム工学科">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('assets/images/favicon.png')); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>
<style>
/* Transition用のCSS */
.header__transition-colors-slow {
    transition-property: border-color;
    transition-duration: 0.8s;
    transition-timing-function: ease;
}

.header__transition-sub-menu-slow {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.6s ease-in-out;
}

.header__transition-sub-menu-slow.ohmorilab__visible {
    max-height: 200px;
}

.header__transition-sub-menu-slow:not(.ohmorilab__visible) {
    transition: none;
}

.ohmorilab__site-title {
    font-family: "Noto Serif JP", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
}

.scrolled-header {
    background-color: white;
    transition: background-color 0.3s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('ohmorilab__site-header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // You can adjust this value as needed
            header.classList.add('scrolled-header');
        } else {
            header.classList.remove('scrolled-header');
        }
    });
});
</script>

<body>
    <header id="ohmorilab__site-header" class='fixed w-full bg-transparent h-[70px] sm:px-10 font-[sans-serif] z-50'>
        <div class='flex items-center gap-5 relative h-[70px]'>
            <div class='flex justify-between items-center mx-4'>
                <h1 class="ohmorilab__site-title text-[24px] font-bold"><a href=<?= esc_url( home_url() );?>
                        class='px-4'><?php bloginfo( 'name' ); ?></a></h1>
                <?php wp_nav_menu( array(
                'menu'  => 'main', 
                'theme_location' => 'header-menu', 
                'menu_class' => 'text-white items-center lg:!flex lg:space-x-5 max-lg:space-y-2 max-lg:hidden max-lg:py-4 max-lg:w-full px-6',
                'walker'  => new Custom_Walker_Main_Menu 
            )); ?>
            </div>
            <nav id="navi">
                <ul class="nav-menu">
                    <li><a href="#">ホーム</a></li>
                    <li><a href="#">活動</a></li>
                    <li><a href="#">研究内容</a></li>
                    <li><a href="#">研究業績</a></li>
                    <li><a href="#">お知らせ</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
                <ul class="nav-sns">
                    <li><a href="#" target="_blank">Twitter</a></li>
                    <li><a href="#" target="_blank">facebook</a></li>
                    <li><a href="#" target="_blank">instagram</a></li>
                </ul>
            </nav>
            <div class="toggle_btn lg:hidden">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="mask"></div>
        </div>
    </header>
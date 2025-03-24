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
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

</head>
<body>
    <header id="header">
        <nav id="navi">
            <ul class="nav-menu">
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li><a href="<?php echo home_url(); ?>/research">研究内容</a></li>
                <li><a href="<?php echo home_url(); ?>/publication">研究業績</a></li>
                <li><a href="news.html">お知らせ</a></li>
                <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
            </ul>
            <ul class="nav-sns">
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="#" target="_blank">facebook</a></li>
                <li><a href="#" target="_blank">instagram</a></li>
            </ul>
        </nav>
        <div class="toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="mask"></div>
    </header>

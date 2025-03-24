<?php
/**
 * 404 Template
 *
 * @package Ohmori-Lab Theme
 */
get_header();
?>

<body class="flex flex-col min-h-screen">
    <div class="flex-grow bg-primary-50 flex flex-col items-center justify-center">
        <div class="text-center">
            <h1 class="text-6xl font-bold text-primary-800 mb-10 pt-12">
                <div class="block sm:inline sm:w-auto w-full">404</div>
                <div class="block sm:inline sm:w-auto w-full"> Not Found</div>
            </h1>
            <p class="text-xl text-primary-700 mb-10">検索されたページが見つかりません</p>
            <a href="/" class="bg-primary-700 hover:bg-primary-800 text-white text-base font-bold py-4 px-6 rounded">
                トップ画面に戻る
            </a>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
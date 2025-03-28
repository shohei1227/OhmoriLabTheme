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
    <footer id="footer">
            <div class="foot-wrapper">
                <div class="flex">
                    <div class="logo">
                        <img src="">
                    </div>
                    <div class="info">
                        <p>
                            早稲田大学 創造理工学部 経営システム工学科（西早稲田キャンパス）<br>
                            〒169-8555 東京都新宿区大久保3-4-1 51号館15階
                        </p>
                    </div>
                </div>
                <p class="copyright">Copyright &copy; Waseda University, Ohmori Lab, 2024</p>
            </div>
        </footer>
</body>
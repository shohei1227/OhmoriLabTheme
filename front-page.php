<?php
/**
 * FrontPage Template
 *
 * @package Ohmori-Lab Theme
 */
 get_header();
?>


 <!-- <!DOCTYPE html> -->

<!-- <html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>大森研究室｜早稲田大学　創造理工学部　経営システム工学科</title>
        <meta name="description" content="早稲田大学　創造理工学部　経営システム工学科　大森研究室のオフィシャルサイトです．当研究室では，IE(Industrial Engineering)やOR(Operations Research)をベースとしたロジスティクス、サプライチェーンマネジメント、サービスのオペレーションの研究を行っています．また，企業との産学連携プロジェクトや海外大学との共同研究・国際プロジェクトにも多数参画しています．">
        <meta name="keywords" content="早稲田大学,創造理工学部,経営システム工学科,大森研究室,ロジスティクス,サプライチェーンマネジメント,サービスオペレーション">
        <meta property="og:locale" content="ja_JP">
        <meta property="og:type" content="website">
        <meta property="og:title" content="大森研究室｜早稲田大学　創造理工学部　経営システム工学科">
        <meta property="og:description" content="早稲田大学　創造理工学部　経営システム工学科　大森研究室のオフィシャルサイトです．当研究室では，IE(Industrial Engineering)やOR(Operations Research)をベースとしたロジスティクス、サプライチェーンマネジメント、サービスのオペレーションの研究を行っています．また，企業との産学連携プロジェクトや海外大学との共同研究・国際プロジェクトにも多数参画しています．">
        <meta property="og:site_name" content="大森研究室｜早稲田大学　創造理工学部　経営システム工学科">
        <meta name="viewport" content="width=device-width" initial-scale="1">
        <link rel="icon" href="">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="js/main.js"></script>
    </head> -->
    <!-- <body>
        <header id="header">
            <h1 class="site-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/topvisual.jpg" alt="">
            </h1>
            <nav id="navi">
                <ul class="nav-menu">
                    <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                    <li><a href="<?php echo home_url(); ?>/research">研究内容</a></li>
                    <li><a href="/publication">研究業績</a></li>
                    <li><a href="news.html">お知らせ</a></li>
                    <li><a href="/contact">お問い合わせ</a></li>
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
        </header> -->
        <h1 class="site-title" id="id_topvisual">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/topvisual.jpg" alt="">
        </h1>
        <main>
            <section id="about">
                <div class="about-img fixed-bg">
                    <h2 class="sec-title">大森研究室</h2>
                    <h3 class="sec-subtitle">Ohmori lab.</h3>
                </div>

                <div class="about-content wrapper">
                    <h3 class="item-title">大森峻一</h3>
                    <div class="content">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about4.jpg" alt="テキスト">
                        <div class="text">
                          <p>
                            IE(Industrial Engineering)やOR(Operations Research)をベースとしたロジスティクス、サプライチェーンマネジメント、サービスのオペレーションの研究に従事。企業との産学連携プロジェクトにも多数参画。海外の大学との共同研究・国際プロジェクト運営にも多数参画。早稲田大学理工学部経営システム工学科卒(’07)、同修士(’09)、博士課程修了、博士(工学)(’13：早稲田大学)
                          </p>
                        </div>
                    </div>
                    <div class="about-item">
                        <h3 class="item-title">研究内容</h3>
                        <ul>
                            <li>
                               <p>経営工学</p>
                                <p>オペレーションズリサーチ</p>
                                <p>最適化</p>
                            </li>
                            <li>
                                <p>施設計画</p>
                                <p>ロジスティクス</p>
                                <p>サプライチェーンマネジメント</p>
                            </li>
                        </ul>
                        <a class="btn" href="research.html"><span>Read More</span></a>
                    </div>
                    <div class="member">
                        <h3 class="item-title">メンバー</h3>
                        <ul>
                            <li>
                                <span class="grade">M2</span>
                                <p></p>
                            </li>
                            <li>
                                <span class="grade">M1</span>
                                <p>阿部悠吾</p>
                                <p>天谷太亮</p>
                                <p>網倉晃太郎</p>
                                <p>近江柚乃</p>
                                <p>大島実奈人</p>
                                <p>黒崎心絃美</p>
                                <p>渡邊友樹</p>
                            </li>
                            <li>
                                <span class="grade">B4</span>
                                <p>川瀬猛士</p>
                                <p>桑田大輝</p>
                                <p>菅原理名</p>
                                <p>鈴木滉次郎</p>
                                <p>永井克樹</p>
                                <p>野口翔平</p>
                                <p>牧野悠</p>
                                <p>三塩航平</p>
                                <p>満岡勇紀</p>
                                <p>森田大貴</p>
                            </li><li>
                                <span class="grade">B3</span>
                                <p>荒木裕冴</p>
                                <p>榎本綾菜</p>
                                <p>大倉穰</p>
                                <p>キム・ジュンファン</p>
                                <p>高岡春</p>
                                <p>豊田俊瑞</p>
                                <p>三村珠貴丸</p>
                                <p>山口結子</p>
                                <p>吉田莉乃</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="news">
                <div class="news-img fixed-bg">
                    <h2 class="sec-title">News</h2>
                </div>
                <div class="news-content wrapper">
                    <dl>
                        <dt>2025.03.26</dt>
                        <dd>2025年度卒業生の論文を公開しました</dd>
                        <dt>2025.02.03</dt>
                        <dd>サプライチェーンレジリエンスに関する対談記事が公開されました</dd>
                        <dt>2025.01.17</dt>
                        <dd>大森教授の取材記事が掲載されました</dd>
                    </dl>
                    <a class="btn" href="news.html"><span>Read More</span></a>
                </div>
            </section>
        </main>
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
<!-- </html> -->
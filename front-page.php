<?php
/**
 * FrontPage Template
 *
 * @package Ohmori-Lab Theme
 */
get_header();
?>

<body>
    <main>
        <!-- Header セクション トップページ上部の画像など -->
        <section class="ohmorilab__header">
            <div class="ohmorilab__description">
                <h2 class="ohmorilab__description-title">大森研究室</h2>
                <h3>革新的なオペレーションで<br>未来を切り拓く</h3>
            </div>
        </section>
        <!-- About セクション  研究室の説明(大森先生、研究内容、メンバー)-->
        <section class="ohmorilab__about">
            <div class="about-img fixed-bg">
                <h2 class="sec-title">About Ohmori Lab</h2>
            </div>
            <div class="about-content">
                <h3 class="content-title">教員紹介</h3>
                <div class="about-professor">
                    <img class="ohmori-professor-img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ohmori.jpeg" alt="大森峻一准教授">
                    <div class="ohmori-professor-text">
                        <h3>大森峻一</h3>
                        <p>経営システム工学科・准教授</p>
                        <p>グローバル生産・物流コラボレート研究所・所長</p>
                        <p>価値創造研究所・研究員</p>
                        <p>データサイエンス研究所・研究員</p>
                    </div>
                </div>
                <h3 class="content-title">研究分野</h3>
                <div class="about-research">
                    <ul>
                        <li>サプライチェーンネットワーク設計</li>
                        <li>多段階在庫最適化</li>
                        <li>施設レイアウト設計</li>
                        <li>配送計画</li>
                        <li>スケジューリング</li>
                        <li>需要予測</li>
                        <li>ロバスト最適化</li>
                        <li>データ・ドリブン最適化</li>
                    </ul>
                    <div class="btn">
                        <a class="readmore-btn" href="#"><span><?php _e("Read More", "test-ja")?></span></a>
                    </div>
                </div>
                <h3 class="content-title">メンバー</h3>
                <div class="about-member">
                    <ul>
                        <li>
                            <span class="about-member__grade">M2</span>
                            <p>該当なし</p>
                        </li>
                        <li>
                            <span class="about-member__grade">M1</span>
                            <p>XXX</p>
                        </li>
                        <li>
                            <span class="about-member__grade">B4</span>
                            <p>野口 翔平</p>
                            <p>XXX</p>
                            <p>XXX</p>
                            <p>XXX</p>
                        </li>
                        <li>
                            <span class="about-member__grade">B3</span>
                            <p>該当なし</p>
                        </li>
                    </ul>
                    <p class="about-member_description">2024年7月1日現在</p>
                </div>
            </div>
        </section>
        <!-- News セクション  研究室に関するニュース-->
        <section class="ohmorilab__news">
            <div class="news-img fixed-bg">
                <h2 class="sec-title">News</h2>
            </div>
            <?php
                // Fetch latest news
                $args = array(
                    'post_type'      => 'news',
                    'posts_per_page' => 6,
                );
                $news_query = new WP_Query($args);
                if ($news_query->have_posts()) :
                    echo '<div class="news-table wrapper divide-y divide-slate-400 border-y border-slate-400">';
                    while ($news_query->have_posts()) : $news_query->the_post(); 
            ?>
            <div class="hover:bg-primary-200 ">
                <a href="<?php the_permalink()?>">
                    <div class="flex flex-wrap items-center px-2 py-8">
                        <p class="text-base px-2 lg:w-1/5"><?php echo get_the_date(); ?></p>
                        <?php 
                            $news_categories = get_the_terms(get_the_ID(), 'news-category');
                            if ($news_categories && !is_wp_error($news_categories)) : ?>
                        <p class="text-sm px-2 text-gray-600 w-1/2 lg:w-1/5">
                            <?php foreach ($news_categories as $news_category) : ?>
                            <?php echo esc_html($news_category->name); ?>
                            <?php if (next($news_categories)) echo ', '; ?>
                            <?php endforeach; ?>
                        </p>
                        <?php endif; ?>
                        <h3 class="text-2xl px-4 font-semibold w-full text-center lg:w-3/5"><?php the_title(); ?></h3>
                    </div>
                </a>
            </div>
            <?php 
                endwhile;
                echo '</div>';
                wp_reset_postdata();
                else :
                    echo '<p class="text-center">No news found.</p>';
                endif;
            ?>
            <div class="btn">
                <a class="readmore-btn" href="#"><span>Read More</span></a>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
</body>
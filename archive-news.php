<?php
/**
 * FrontPage Template
 *
 * @package Ohmori-Lab Theme
 */
 get_header();
?>

<main>
<section id="news">
                <div class="news-img fixed-bg">
                    <h2 class="sec-title">News</h2>
                </div>
                <div class="news-content wrapper">
                    <?php
                // Fetch latest news
                $args = array(
                    'post_type'      => 'news',
                    'posts_per_page' => 100,
                );
                $news_query = new WP_Query($args);
                if ($news_query->have_posts()) :
                    echo '<dl>';
                    while ($news_query->have_posts()) : $news_query->the_post(); 
            ?>
                <a href="<?php the_permalink()?>">
                        <dt><?php echo get_the_date(); ?></dt>
                        <dd><?php the_title(); ?></dd>
                </a>
            <?php 
                endwhile;
                echo '</dl>';
                wp_reset_postdata();
                else :
                    echo '<p class="text-center">No news found.</p>';
                endif;
            ?>
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
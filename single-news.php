<?php get_header(); ?>

<div class="flex flex-col min-h-screen pt-[70px]">
    <div class="page-title-wrapper min-h-[190px] bg-primary-100 flex flex-col justify-center items-center">
        <!-- ページのパンくずリスト -->
        <div class="ohmorilab__breadcrumbs w-3/5 pb-2 text-primary-800">
            <?php custom_breadcrumb(); ?>
        </div>
        <!-- ページのタイトル -->
        <h1 class="page-title lg:text-5xl text-4xl mb-8 w-3/5 text-primary-900 font-bold"><?php the_title();?></h1>
    </div>
    <!-- ページのメイン -->
    <div class="ohmorilab__page flex-grow items-center justify-center mx-auto my-10 max-w-[1000px] w-4/5">
        <?php the_content(); ?>
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
</div>
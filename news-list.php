<?php
/*
 * Template Name:お知らせ一覧
 */
get_header();
?>

<div id="primary" class="content-area sub-pages">
        <div class="sub-page-header">
			<img src="/wp-content/uploads/2024/02/rl-news-listtitle@2x.png">
		</div>
    <div id="main" class="post-list-wrap inner">

       

    <!-- カテゴリーボタン -->
    <div id="news-categories">
        <button class="category-button" data-id="all">ALL</button>
        <?php 
        $categories = get_categories();
        foreach($categories as $category) {
            echo '<button class="category-button" data-id="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</button>';
        }
        ?>
    </div>

    <!-- ニュース一覧 -->
    <div id="news-list" class="flex">
        <!-- AJAXでニュース一覧がここに挿入される -->
    </div>

    </div><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
?>
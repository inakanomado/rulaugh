<?php
/*
 * Template Name:スポンサーリスト
 */
get_header();
?>

<div id="primary" class="content-area sub-pages sponsor-list-wrap">
        <div class="sub-page-header">
			<img src="/wp-content/uploads/2024/02/rl-sponsor-listitle@2x.png">
		</div>
    <div id="main" class="post-list-wrap inner">

	<div class="top-sponsors max-width1 flex">
			<?php
			$top_args = array(
				'post_type' => 'sponsor',
				'posts_per_page' => -1,
			);
			$top_query = new WP_Query($top_args);

			if ($top_query->have_posts()) :
				while ($top_query->have_posts()) : $top_query->the_post();
				// カスタムフィールド 'sponsor_id' からIDを取得
				$sponsor_id = get_post_meta(get_the_ID(), 'sponsor_id', true);
				$post_slug = $post->post_name; // 投稿のスラッグを取得
				// 以下、投稿の詳細を出力
				if (has_post_thumbnail()) :
					echo '<div class="top-sponsor-item" id="section-' . esc_attr($post_slug) . '">';
					echo '<a href="#' . esc_attr($sponsor_id) . '">';
					the_post_thumbnail('medium');
					echo '</a>';
					echo '</div>';
				endif;
			endwhile;
							wp_reset_postdata();
			endif;
			?>
		</div>

	<div class="sponsor-list-content">
		<?php display_sponsors_list(); ?>
	</div>

    </div><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
?>
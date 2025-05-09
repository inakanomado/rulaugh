<?php
/*
 * Template Name:お問い合わせ
 */
get_header();
?>

<div class="contact-page sub-pages">
	<div class="contact-page-inner">

		<div class="sub-page-header">
			<img src="/wp-content/uploads/2024/02/rl-contact-subheader@2x.png">
		</div>


		<div class="contact-form">
			<div class="contact-toptext">当社サービスに関するご質問は、下記フォームよりお気軽にお問い合わせください。<br>なお、ご質問内容によってはお時間をいただく場合がございますので、予めご了承ください。
			</div>
			<?php echo do_shortcode('[contact-form-7 id="e0cc201" title="コンタクトフォーム 1"]'); ?>
		</div>

	</div>
</div>

<?php get_footer();
?>
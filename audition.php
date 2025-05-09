<?php
/* Template Name: Background Animation Page */
get_header();
?>

<!-- ① AOSのCSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- 背景アニメーション：3レイヤー -->
<div class="bg-animate layer1"></div>
<div class="bg-animate layer2"></div>
<div class="bg-animate layer3"></div>

<!-- コンテンツ -->
<div class="content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>

<!-- メインビジュアル（画像にする） -->
<div class="main-box">
  <section class="aud-hero">
    <div class="aud-hero-inner">
      
      <!-- 左のテキスト画像 -->
      <div class="top-text">
        <img src="/wp-content/uploads/2025/05/new-main-title-text@2x-8.png" alt="RuLaugh Production Audition" class="aud-hero-text-img hero-text animated-load delayed" data-aos="fade-left" data-aos-delay="500" data-aos-duration="3000">
      </div>

      <!-- キャラ＋帯画像 -->
      <div class="top-character">
        <img src="/wp-content/uploads/2025/05/new-main-visual@2x-8.png" alt="キャラクター" class="aud-hero-character hero-girl animated-load" data-aos="fade-up" data-aos-duration="1200">
      </div>

    </div>
  </section>
</div>

<!-- セクション1：るらふオーディションとは？（画像見出し＋テキスト） -->
<section id="section-about"　class="section-about" data-aos="fade-up">
  <div class="about-overwrap">
		<div class="about-inner-wrap">
			<div class="about-title">
				<h2>るらふオーディションとは<span>？</span></h2>
			</div>
			<div class="about-subtitle">
				<p>What is hololive production Audition?</p>
			</div>
  			<p class="about-text">VTuber事務所「るらふ」では、地域に笑顔と活気を届けることを目的に、VTuberゼロ期生オーディションを開催しています。<br>選ばれた方には、丹波篠山に拠点を持つ事務所「るらふ」の所属VTuberとして、歌や	配信など、あなたの得意な表現を活かしたエンタメ活動をスタートしていただきます。<br>esportsプロチームなどの地域密着型プロジェクトに続き、VTuberという新たな挑戦へ。「地元から、夢を叶える」仲間として、あなたの参加を心よりお待ちしています。</p>
		</div>
	</div>
</section>

<!-- セクション1：待遇＆サポート -->
<section id="section-treatment"　class="treatment-requirements" data-aos="fade-up" data-aos-delay="300">
	<div class="requirements-overwrap">
		<div class="requirements-inner-wrap">
			<div class="requirements-title">
				<h2>待遇＆サポート</h2>
			</div>
			<div class="requirements-subtitle">
				<p>Support</p>
			</div>
		</div>
	 	<div class="required-wrap">
			<ul class="aud-feature-list">
  				<li>
    				<span class="feature-number">01</span>
    				<span class="feature-text">オリジナルキャラクター提供（Live2D）</span>
 				</li>
  				<li>
    				<span class="feature-number">02</span>
    				<span class="feature-text">配信/動画制作機材の設定サポート</span>
  				</li>
  				<li>
   					<span class="feature-number">03</span>
    				<span class="feature-text">1人1人に合わせたマネジメント体制</span>
  				</li>
			</ul>
			<div class="treatment-textwrap">
				<p class="treatment-text1">このほかにも、配信活動をサポートするためのさまざまな取り組みをご用意しています。</p>
				<p class="treatment-text2">※記載内容はすべてをお約束するものではありません。</p>
			</div>
		</div>
	</div>
</section>
<!-- セクション2：応募条件（画像タイトル＋テキスト） -->
<section id="section-requirements"　class="section-requirements" data-aos="fade-up" data-aos-delay="300">
 <div class="requirements-overwrap">
		<div class="requirements-inner-wrap">
			<div class="requirements-title">
				<h2>応募条件</h2>
			</div>
			<div class="requirements-subtitle">
				<p>Requirements</p>
			</div>
		</div>
	 	<div class="required-wrap">
			<div class="required-title"><h4><span class="required-title-span">01</span><span class="required-title-span2">必須条件</span></h4></div>
			<div class="required-box-wrap">
				<div class="required-box"><img src="/wp-content/uploads/2025/04/entryConditionPC-1-1.png"></div>
				<div class="required-box"><img src="/wp-content/uploads/2025/04/entryConditionPC-2-1.png"></div>
				<div class="required-box"><img src="/wp-content/uploads/2025/04/entryConditionPC-3-1.png"></div>
				<div class="required-box required-box2"><img src="/wp-content/uploads/2025/04/entryConditionSP-1-1.png"></div>
				<div class="required-box required-box2"><img src="/wp-content/uploads/2025/04/entryConditionSP-2-1.png"></div>
				<div class="required-box required-box2"><img src="/wp-content/uploads/2025/04/entryConditionSP-3-1.png"></div>
			</div>
		</div>
	 	<div class="required-wrap">
			<div class="required-title"><h4><span class="required-title-span">02</span><span class="required-title-span2">歓迎条件</span></h4></div>
			<div class="required-tyui"><p>※以下要項に1つでも当てはまる方大歓迎です、当てはまっていなくても勿論ご応募いただけます</p></div>
			<div class="custom-bullet">
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />丹波篠山・丹波・三田にお住まいの方、またはご縁のある方</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />丹波地域が好きな方、地域と関わることに興味がある方</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />esports・歌・演技・企画力など、タレント活動に活かせる“あなたならでは”の強みをお持ちの方</p>
			</div>
		</div>
	 	<div class="required-wrap">
			<div class="required-title"><h4><span class="required-title-span">03</span><span class="required-title-span2">その他条件</span></h4></div>
			<div class="custom-bullet">
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />継続的に活動できる方</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />現在、芸能事務所やレーベル、その他類する団体に所属していない方</p>
				<p class="required-tyui2">※ただし現在所属中でも、合格後にご自身の責任で契約を終了・解除できる場合は可</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />選考過程において、当社の定める各種規定に同意いただける方</p>
			</div>
		</div>
	</div>
</section>

<!-- セクション3：選考フロー（画像タイトル＋ステップ構成） -->
<section id="section-flow"　class="section-flow" data-aos="fade-up" data-aos-delay="300">
  <div class="requirements-overwrap">
		<div class="requirements-inner-wrap">
			<div class="requirements-title">
				<h2>選考フロー</h2>
			</div>
			<div class="requirements-subtitle">
				<p>Audition Process</p>
			</div>
		</div>
	 	<div class="required-wrap">
			<div class="required-box-wrap">
				<div class="required-box"><img src="/wp-content/uploads/2025/04/aud-flow-senkou@2x-100.jpg"></div>
				<div class="required-box"><img src="/wp-content/uploads/2025/04/aud-flow-mensetu@2x-100.jpg"></div>
				<div class="required-box"><img src="/wp-content/uploads/2025/04/aud-flow-tuti@2x-100.jpg"></div>
				<div class="required-box required-box2"><img src="/wp-content/uploads/2025/04/aud-flow-sp1@2x-8.png"></div>
				<div class="required-box required-box2"><img src="/wp-content/uploads/2025/04/aud-flow-sp2@2x-8.png"></div>
				<div class="required-box required-box2"><img src="/wp-content/uploads/2025/04/aud-flow-sp3@2x-8.png"></div>
			</div>
		</div>
	</div>
</section>

<!-- セクション4：注意事項（テキスト） -->
<section id="section-notes"　class="section-notes" data-aos="fade-up" data-aos-delay="300">
 <div class="requirements-overwrap">
		<div class="requirements-inner-wrap">
			<div class="requirements-title">
				<h2>注意事項</h2>
			</div>
			<div class="requirements-subtitle">
				<p>Precautions</p>
			</div>
		</div>
	 	<div class="required-wrap">
			<div class="custom-bullet">
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />オーディション応募に関する審査費用は一切かかりません。</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />審査過程で発生する交通費や諸費用は自己負担となります。</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />連絡先は、必ず連絡が取れる電話番号・メールアドレスをご記入ください。</p>
				<p class="required-tyui2">※連絡が取れない場合、選考を進められないことがあります。</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />ご提出いただいた応募資料は返却いたしません。</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />オーディション合格は、即タレントデビューを確約するものではありません。</p>
				<p class="with-icon"><img src="/wp-content/uploads/2025/04/aud-li-asirai@2x-8.png" alt="装飾アイコン" class="icon" />審査状況・選考結果に関するお問い合わせにはお答えできません。</p>
			</div>
		</div>
	</div>
</section>

<!-- エントリーボタン -->
<section class="section-entry" data-aos="fade-up" data-aos-delay="300">
  <div class="button_block">
		<div class="entry-button">
				<a href="https://forms.gle/dqo4HZNYheLDyRQD9" target="_blank">
					<span>エントリー</span>
					Entry
					<div class="arrow_p">
						<div class="arrow"></div>
					</div>
				</a>
	   </div>
    </div>
</section>


<section class="aud-share" data-aos="fade-up" data-aos-delay="300">
  <h2 class="aud-share-label">Share</h2>
  <ul class="aud-share-icons">
    <li><a href="https://twitter.com/share?url=https://rulaugh.com/audition/&text=ルラフオーディション開催中！" target="_blank" rel="noopener noreferrer"><img src="/wp-content/uploads/2025/04/logo-black.png" alt="X" /></a></li>
  </ul>
</section>

<!-- ② AOSのJS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true,
    throttleDelay: 50,
    debounceDelay: 100
  });
</script>





<?php get_footer(); ?>

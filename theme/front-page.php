<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
<main>
	<?php get_template_part( './elements/fp-topheader' ); ?>

	<div class="row text-center" style="background:#FFF">
		<div class="medium-12 column show-for-medium"><a href="<?php echo get_page_link( '5972' ); ?>"><img style="max-width:none;width:100%" src="<?php echo get_template_directory_uri(), '/assets/img/header--jiko-old.jpg'; ?>" alt="広島最大級！交通事故解決の実績多数！"></a></div>
		<div class="small-12 hide-for-medium"><a href="<?php echo get_page_link( '5972' ); ?>"><img src="<?php echo get_template_directory_uri(), '/assets/img/header--jiko-old-01.jpg'; ?>" alt="広島最大級！交通事故解決の実績多数！"></a></div>
		<div class="small-12 hide-for-medium"><a href="<?php echo get_page_link( '5972' ); ?>"><img src="<?php echo get_template_directory_uri(), '/assets/img/header--jiko-old-02.jpg'; ?>" alt="広島最大級！交通事故解決の実績多数！"></a></div>
	</div>

	<?php get_template_part( './elements/fp-welcome-mess' ); ?>


	<?php get_template_part( 'elements/cta--jiko-lp' ); ?>



	<div class="row">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column small-12 large-8 contents --mt0 --pt0">
			<section class="contents--section contents--section__flow">
				<h2 id="front--flow">交通事故問題解決までの流れ</h2>
				<div class="row text-center">
					<div class="column small-6">
						<h3><a href="<?php echo get_page_link( '5981' ); ?>">1.事故の発生</a></h3>
						<p><a href="<?php echo get_page_link( '5981' ); ?>" class="button hollow"><img src="<?php echo home_url(), '/wp-content/uploads/2018/01/1808468ee5ba7c8e77144ffc03836a8f.png'; ?>" alt="1.事故の発生"></a></p>
					</div>
					<div class="column small-6">
						<h3><a href="<?php echo get_page_link( '5983' ); ?>">2.治療～症状固定</a></h3>
						<p><a href="<?php echo get_page_link( '5983' ); ?>" class="button hollow"><img src="<?php echo home_url(), '/wp-content/uploads/2018/01/567a9153e61bebf4d77c21d23d0bac82.png'; ?>" alt="2.治療～症状固定"></a></p>
					</div>
					<div class="column small-6">
						<h3><a href="<?php echo get_page_link( '5985' ); ?>">3.後遺障害の有無の判定</a></h3>
						<p><a href="<?php echo get_page_link( '5985' ); ?>" class="button hollow"><img src="<?php echo home_url(), '/wp-content/uploads/2018/01/8dedddfbb17930eaedd2595527d6cd72.png'; ?>" alt="3.後遺障害の有無の判定"></a></p>
					</div>
					<div class="column small-6">
						<h3><a href="<?php echo get_page_link( '5987' ); ?>">4.示談交渉<br><span class="--small">※示談不成立の場合裁判</span></a></h3>
						<p><a href="<?php echo get_page_link( '5987' ); ?>" class="button hollow"><img src="<?php echo home_url(), '/wp-content/uploads/2018/01/0cad6f539ace8fa08cdeb0a1a917e621.png'; ?>" alt="4.示談交渉"></a></p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__cases">
				<h2 id="front--cases">こんなに違う！<br>慰謝料などの賠償金</h2>
				<p class="text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/lp/jiko/cta.png'; ?>" alt="弁護士の介入で慰謝料などが増額するケースが大半です！" class="thumbnail"></p>
				<h3 class="cta--lp_title --contents"><img src="<?php echo get_template_directory_uri(), '/assets/img/lp/jiko/car.png'; ?>" alt="交通事故のアイコン">交通事故に遭ったら<br>弁護士に相談してください！</h3>
				<div class="cta--lp_desc">
					<p>保険会社は裁判の基準ではなく、保険会社独自の基準で慰謝料などの賠償金を算出し、提案をしてきます。</p>
					<p>そこで、弁護士は本来受け取るべき裁判の基準まで、慰謝料などの賠償金を上げることができるため、このように大きく異なった結果となります。</p>
					<p class="text-right"><a href="<?php echo get_the_permalink( '5912' ); ?>" class="button">詳しくはこちら</a></p>
				</div>
			</section>


			<section class="contents--section contents--section__recommend">
				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-2 text-center"><a href="<?php echo get_page_link( '5979' ); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/ImgSDTop1.jpg'; ?>" alt="イメージ画像"></a></div>
						<div class="column small-10">
							<h3 class="post--title"><a href="<?php echo get_page_link( '5979' ); ?>">交通事故問題解決の流れ</a></h3>
							<p class="post--excerpt">交通事故の経験豊富な事務所をお選び下さい</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-2 text-center"><a href="<?php echo get_page_link( '5972' ); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/ImgSDTop2.jpg'; ?>" alt="イメージ画像"></a></div>
						<div class="column small-10">
							<h3 class="post--title"><a href="<?php echo get_page_link( '5972' ); ?>">事務所選びの５つのポイント</a></h3>
							<p class="post--excerpt">どの法律事務所に相談・依頼するかにより、満足度に大きな違いがでてきます</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-2 text-center"><a href="<?php echo get_page_link( '6036' ); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/ImgSDTop3.jpg'; ?>" alt="イメージ画像"></a></div>
						<div class="column small-10">
							<h3 class="post--title"><a href="<?php echo get_page_link( '6036' ); ?>">弁護士と行政書士の違い</a></h3>
							<p class="post--excerpt">事故直後の早い段階から専門家にご相談下さい</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-2 text-center"><a href="<?php echo get_page_link( '6012' ); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/ImgSDTop4.jpg'; ?>" alt="イメージ画像"></a></div>
						<div class="column small-10">
							<h3 class="post--title"><a href="<?php echo get_page_link( '6012' ); ?>">適切な後遺障害認定のために</a></h3>
							<p class="post--excerpt">後遺障害の等級によって損害賠償が大きく異なります</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-2 text-center"><a href="<?php echo get_page_link( '5994' ); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/ImgSDTop5.jpg'; ?>" alt="イメージ画像"></a></div>
						<div class="column small-10">
							<h3 class="post--title"><a href="<?php echo get_page_link( '5994' ); ?>">損害賠償の計算</a></h3>
							<p class="post--excerpt">保険会社から提示された計算書が不明な場合はご相談下さい</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-2 text-center"><a href="<?php echo get_page_link( '6034' ); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/ImgSDTop6.jpg'; ?>" alt="イメージ画像"></a></div>
						<div class="column small-10">
							<h3 class="post--title"><a href="<?php echo get_page_link( '6034' ); ?>">死亡事故の場合</a></h3>
							<p class="post--excerpt">警察との対応や損害賠償について解説します</p>
						</div>
					</div>
				</article>
			</section>

			
			<section class="contents--section contents--section__cta text-center"><a href="https://www.law-yamashita.com/contact"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop10.jpg'; ?>" alt="広島の弁護士による交通事故無料相談受付中"></a></section>


			<section class="contents--section">
				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-4 text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgCD1.jpg'; ?>" alt="イメージ画像"></div>
						<div class="column small-8">
							<h3 class="post--title">（1）面談の予約</h3>
							<p class="post--excerpt">まずはお電話にて、ご相談日時をご予約ください。予約受付時間は平日９～１８時、土曜日１０～１７時です。</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-4 text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgCD2.jpg'; ?>" alt="イメージ画像"></div>
						<div class="column small-8">
							<h3 class="post--title">（2）弁護士との面談</h3>
							<p class="post--excerpt">事務所に来所いただき、弁護士がお話をお伺いします。また、実際に依頼した場合の解決方針についてご説明します。</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-4 text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgCD3.jpg'; ?>" alt="イメージ画像"></div>
						<div class="column small-8">
							<h3 class="post--title">（3）示談交渉または訴訟</h3>
							<p class="post--excerpt">当事務所との間で委任契約を結んでいただいた場合、弁護士が依頼者に代わって交渉するので、治療に専念することができます。</p>
						</div>
					</div>
				</article>

				<article class="post--topic">
					<div class="row align-middle">
						<div class="column small-4 text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgCD4.jpg'; ?>" alt="イメージ画像"></div>
						<div class="column small-8">
							<h3 class="post--title">（4）解決</h3>
							<p class="post--excerpt">適正な賠償金を受け取り、交通事故問題から解放されます。</p>
						</div>
					</div>
				</article>

				<p class="text-right"><a href="<?php echo get_page_link( '6070' ); ?>" class="button">ご予約・ご相談の流れ</a></p>

			</section>


			<section class="contents--section contents--section__cases">
				<h2 id="front--cases">なぜ、弁護士が入ると賠償金額が上がるの？</h2>
				<p>交通事故に遭った場合、賠償金等については保険会社と交渉することになります。あまり知られていないことですが、保険会社は示談の際、支払う賠償金の額をできるだけ低く抑えようとします。</p>
				<p>しかも、相手はプロですから、色々と理論武装しています。<br>
				被害者は、「名前の知れた保険会社が言うのだから、そんなものだろう」と思って、「何かおかしいな」と感じながら示談に応じてしまったり、不満を感じても、どのように対応して良いか分からないという状況に陥りがちです。</p>
				<p>このような場合、弁護士に相談頂ければ、親身に相談に乗り、賠償金や保険会社との交渉について、アドバイスをしたり、代理人となって、保険会社と交渉することも可能です。</p>
				<p class="text-right"><a href="<?php echo get_page_link( '5998' ); ?>" class="button">損害賠償額の任意保険基準と裁判基準の違い</a></p>
				<ul class="no-bullet">
					<li>○保険会社から提示された示談の額が正当なのか相談したい。 </li>
					<li>○保険会社から「治療を打ち切る」と言われている。</li>
					<li>○交通事故に遭ったが、保険会社から自分にも過失があると言われている。 </li>
					<li>○後遺症の認定を受けるべきか迷っているので、相談したい。</li>
				</ul>
				<p>このような場合は、弁護士にご相談ください。</p>
			</section>


			<?php get_template_part( './elements/fp--access' ); ?>


			<section class="contents--section contents--section__access">
				<h2 id="front--access">「広島の弁護士による交通事故無料相談」サイトについて</h2>
				<p>本サイトは、広島に在住の皆様に、交通事故の際の損害賠償、後遺症（後遺障害）、保険会社との示談交渉等に関する知識をご提供することを目的に、山下江法律事務所が運営しております。</p>
				<p>いざ、交通事故に遭った場合、被害者は保険会社と交渉することになります。<br>保険会社はこのような知識に関してプロですが、一方で、被害者が損害賠償、後遺症、示談等の情報を得る手段は限られています。<br>本サイトを通じて、広島在住の皆様に、交通事故の法律問題に関する情報をご提供し、一人でも多くの方に、お役立て頂ければ幸いです。</p>
				<p>ご相談対応エリア＝広島県内全域に対応しております。<br>（県外の方も対応しておりますのでお気軽にどうぞ。）</p>
			</section>


			<?php
				$args = array(
					'posts_per_page' => 4,
					'post_status'    => 'publish'
				);
				$news = new WP_Query( $args );
				if ( $news->have_posts() ) :
			?>
			<div class="contents--section">
				<h2><a href="<?php echo get_page_link( '5749' ); ?>">最新情報<span class="badge">　></span></a></h2>
				<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
				<dl>
					<dt><span class="label secondary"><?php get_the_date( 'Y-m-d' ); ?></span>　<?php the_category( '　' ); ?></dt>
					<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
				</dl>
				<?php
					endwhile;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '5749' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>お知らせ一覧</a></p>
			</div>
				<?php endif; ?>


			<div class="contents--section">
				<h2><a href="https://www.law-yamashita.com/topics" target="_blank">事務所の最新情報<span class="badge">　></span></a></h2>
				<?php
					$url = 'https://www.law-yamashita.com/feed';
					$url = sprintf( esc_html( "%s" ), $url );
					add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					include_once( ABSPATH . WPINC . '/feed.php' );
					$feed = fetch_feed( $url );
					remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					$maxitems = 3;
					if ( ! is_wp_error( $feed ) ) {
						$maxitems = $feed->get_item_quantity( $maxitems );
						$rss_items = $feed->get_items( 0, $maxitems );
					}
					$site_title = $feed->get_title();
					$site_url = $feed->get_permalink();

					$output = '';
					date_default_timezone_set( 'Asia/Tokyo' );
					foreach ( $rss_items as $item ) {
						$f_link = esc_url( $item->get_permalink() );
						$f_date = $item->get_date( 'Y-m-d' );
						$f_title = esc_html( $item->get_title() );
						$f_category = '';
						foreach ( $item->get_categories() as $category ) {
							$f_category .= $category->get_label();
						}
						$output .= <<< EOM
<dl>
	<dt><span class="label secondary">{$f_date}</span>　<span class="label">{$f_category}</span></dt>
	<dd><a href="{$f_link}" target="_blank">{$f_title}</a></dd>
</dl>
EOM;
					}
					echo $output;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="https://www.law-yamashita.com/topics" class="button large" target="_blank"><?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧<br><br><span style="font-size:0.8em">※メインサイトへ移行します。</span></a></p>
			</div>
			
		</div>
	</div>
</main>
<?php get_footer(); ?>

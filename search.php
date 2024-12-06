<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package seed
 */
global $wp_query;
get_header();
$keyword = $wp_query->query['s'];
?>
<style type="text/css">
	html:has(#search-popup-wrap[data-toggle="1"]){
		overflow: inherit !important;
	}
	body{
		overflow: unset;
	}
	.keyword-span{
		color: #828A92;
	}
	.kw-count{
		margin-top: 20px;
		margin-bottom: 70px;
	}
	.search-parent {
		display: grid;
		grid-template-columns: auto 976px;
		gap: 10px;
		padding-bottom: 56px;
	}
	.search-side .-sidebar-search{
		position: sticky;
		top: 80px;
	}
	.search-count-top{
		font-size: 26px;
	}
	.search-count-text{
		margin-bottom: 24px;
	}
	.search-section-top {
		display: grid;
		grid-template-columns: auto 200px;
		align-items: baseline;

	}
	.search-section-top .-r{
		text-align: right;
	}
	.sec-line{
		border: 1px solid #DFE3E8;
		width: 100%;
		margin-top: 65px;
		margin-bottom: 44px;
	}
	.line04-sq {
		position: absolute;
		top: -8px;
		left: -8px;
		width: 140px;
		height: 140px;
		z-index: 0;
		padding-top: 30%;
	}
	.line04-sq.-con2 {
		left: unset;
		right: -8px;
	}
	.line04-sq.-con1{
		left: unset;
		right: -8px;
		top: unset;
		bottom: 8px;
	}
	.s-leaves {
		position: absolute;
		right: 0;
		top: 800px;
		width: 300px;
		pointer-events: none;
	}
	.search-body-popup {
		display: none;
	}
	#search-popup-wrap {
		background: transparent !important;
		pointer-events: none;
	}
	#search-popup-wrap header {
		background: #fff;
		pointer-events: auto;
		isolation: isolate;
	}
	.search-section[data-count="0"]{
		display: none;
	}
	.li-nav[data-count="0"]{
		color: #BFC4C8;
		pointer-events: none;
		cursor: none;
	}
	<?php if ($_GET['focus'] != '' AND $_GET['focus'] != 'all'): ?>
		.search-section-top > .-r{
			display: none;
		}
	<?php endif ?>

	@media (max-width: 1023px) {
		.search-parent{
			grid-template-columns: 1fr;
		}
		.kw-count{
			margin-bottom: 20px;
		}
	}
	
	/*-- Mobile Version --*/
	@media (max-width: 767px) {
		.search-section-top{
			grid-template-columns:1fr;
			
			margin-bottom: 2rem;
		}
		.search-count-text{
			margin-bottom: 0;
		}
		.search-section-top .-r{
			margin-top: .5rem;
			text-align: left;
		}
	}

	.search-main-not-found{
		display: none;
	}
	#main[data-found="0"] .search-main-not-found{
		display: block;
	}
	#main[data-found="0"] .search-main-found{
		display: none;
	}
</style>
<img src="/wp-content/uploads/2023/05/leaves-shadow-1.png" class="s-leaves">
<div class="cont-pd main-body">
	<h5 class="kw-count"><?php pll_e('ผลการค้นหา')?> "<?=$keyword?>" - <span class="keyword-span"><span class="keyword-count"></span> <?php pll_e('รายการ')?></span></h5>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" data-found="1">

			
			<div class="search-main-found">
				<div class="-body-w-side">
					<div class="search-side">
						<div class="-sidebar-search">
							<h1 class="mb-8"><?php pll_e('ประเภทเนื้อหา')?></h1>
							<div>
								<aside class="dynamic-side-nav" data-selected="0">
									<ul class="">
										<?php 
										$el = [];
										$el[0] = ['ทั้งหมด','all'];
										$el[1] = ['โครงการ','project'];
										$el[2] = ['โปรโมชั่น','promotion'];
										$el[3] = ['แอสเซทไวส์คลับ','club'];
										$el[4] = ['บล็อก','blog'];
										$el[5] = ['ข่าวสาร','news'];
										foreach ($el as $key => $v) {
											?>
											<li class="li-nav" data-value="<?=$v[1]?>"><a class="block" href="/<?=pll_current_language()?>/?s=<?=$s?>&focus=<?=$v[1]?>"><?=$v[0]?></a></li>
											<?php
										}
										?>
									</ul>
									<div class="-runner"></div>
								</aside>
							</div>
						</div>
					</div>
					<div class="sear-box">
						<?php 
						if ($_GET['focus'] == '' OR $_GET['focus'] == 'all') {
							get_template_part( 'template-parts/search', 'project',['short']);
							get_template_part( 'template-parts/search', 'promotion',['short']);
							get_template_part( 'template-parts/search', 'club',['short']);
							get_template_part( 'template-parts/search', 'blog',['short']);
							get_template_part( 'template-parts/search', 'news',['short']);
						}else{
							get_template_part( 'template-parts/search', $_GET['focus'],['long']);
							$arg = array('s' => $keyword,'post_type' => ['condominium','house'],'posts_per_page'=>1);
							$project_search = new WP_Query($arg);

							$arg = array('s' => $keyword,'post_type' => 'promotion','posts_per_page'=>1);
							$promotion_search = new WP_Query($arg);

							$arg = array('s' => $keyword,'post_type' => 'asw_club','posts_per_page'=>1);
							$club_search = new WP_Query($arg);

							$arg = array('s' => $keyword,'post_type' => 'post','posts_per_page'=>1);
							$blog_search = new WP_Query($arg);

							$arg = array('s' => $keyword,'post_type' => 'news','posts_per_page'=>1);
							$news_search = new WP_Query($arg);
						}
						?>
					</div>
				</div>
			</div>

			<div class="search-main-not-found">
				
				<div class="text-center pb-16 mt-12">
					<img src="/wp-content/uploads/2023/05/projects-search.png" style="max-width:286px" class="mb-5">
					<h5 class="mb-2"><?php pll_e('ไม่พบเนื้อหาที่คุณต้องการ?')?></h5>
					<div><?php pll_e('ลองปรับรายละเอียดการค้นหาดูอีกครั้ง')?></div>
				</div>
				<section class="pb-20">
					<h2 class="mb-4"><?php pll_e('โครงการที่คุณอาจสนใจ')?></h2>
					<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-8 vst-wrap">
						<?php 
						$search_project = get_field('search_project', 'option');

						foreach ($search_project as $key => $pj): 
							$pjf = get_fields($pj->ID);
							$logo = $pjf['logo']['sizes']['medium'];
							$price = $pjf['price'];
							$line = $pjf['line_id'];
							$status = get_the_terms($pj->ID,'project_status')[0]->name;
							$status_slug = get_the_terms($pj->ID,'project_status')[0]->slug;
							$location = get_the_terms($pj->ID,'project_location')[0]->name;
							$type = $pj->post_type;
							if ($type == 'condominium') {
								$type_name = 'คอนโดมีเนียม';
							}
							else if ($type == 'house') {
								$type_name = 'บ้านและทาวน์โฮม';
							}
							$fim =  get_the_post_thumbnail_url($pj->ID, 'large');
							?>

							<div data-compare-selected="0" class="home-project-card -for-search bg-white card-360 -card-360-max" style="--fim:url(<?=$fim?>)" data-status_slug="<?=$status_slug?>" data-type="<?=$type?>">
								<div class="-header">
									<div class="-pj-status"><?=$status?></div>
									<div class="-pj-logo" style="--pj-logo:url(<?=$logo?>)"></div>
								</div>
								<div class="-inner">
									<a  target="_blank" href="<?=get_permalink($pj->ID)?>" class="">
										<div class="-inner-img">
											<div class="-fim"></div>
											<div class="-content">
												<div class="-cont-footer">
													<div class="-l">
														<div class="-type">
															<?=$type_name?>
														</div>
														<div class="-location">
															<?=$location?>
														</div>
													</div>
													<div class="-r">
														<div><?php pll_e('เริ่มต้น')?></div>
														<div class="-price"><?=$price?></div>
														<div><?php pll_e('ล้านบาท')?></div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="-pj-cp" data-compare-id="<?=$pj->ID?>" onclick="cp_add_project(`<?=$pj->ID?>`,`<?=$pj->post_name?>`,`<?=$pj->post_title?>`)">
									<div class="-s0">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M1.22505 7.10838C0.980973 6.86431 0.980973 6.46858 1.22505 6.2245L5.20253 2.24702C5.4466 2.00295 5.84233 2.00295 6.08641 2.24702C6.33049 2.4911 6.33049 2.88683 6.08641 3.13091L3.17588 6.04144H18.3337C18.6788 6.04144 18.9587 6.32126 18.9587 6.66644C18.9587 7.01162 18.6788 7.29144 18.3337 7.29144H3.17588L6.08641 10.202C6.33049 10.4461 6.33049 10.8418 6.08641 11.0859C5.84233 11.3299 5.4466 11.3299 5.20253 11.0859L1.22505 7.10838Z" fill="white"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M18.7749 15.0254C19.019 14.7813 19.019 14.3856 18.7749 14.1415L14.7975 10.164C14.5534 9.91994 14.1577 9.91994 13.9136 10.164C13.6695 10.4081 13.6695 10.8038 13.9136 11.0479L16.8241 13.9584H1.66634C1.32116 13.9584 1.04134 14.2383 1.04134 14.5834C1.04134 14.9286 1.32116 15.2084 1.66634 15.2084H16.8241L13.9136 18.119C13.6695 18.363 13.6695 18.7588 13.9136 19.0029C14.1577 19.2469 14.5534 19.2469 14.7975 19.0029L18.7749 15.0254Z" fill="white"/>
										</svg>
									</div>
									<div class="-s1">

										<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M1.22505 11.1084C0.980973 10.8643 0.980973 10.4686 1.22505 10.2245L5.20253 6.24702C5.4466 6.00295 5.84233 6.00295 6.08641 6.24702C6.33049 6.4911 6.33049 6.88683 6.08641 7.13091L3.17588 10.0414H18.3337C18.6788 10.0414 18.9587 10.3213 18.9587 10.6664C18.9587 11.0116 18.6788 11.2914 18.3337 11.2914H3.17588L6.08641 14.202C6.33049 14.4461 6.33049 14.8418 6.08641 15.0859C5.84233 15.3299 5.4466 15.3299 5.20253 15.0859L1.22505 11.1084Z" fill="white"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M18.7749 19.0254C19.019 18.7813 19.019 18.3856 18.7749 18.1415L14.7975 14.164C14.5534 13.9199 14.1577 13.9199 13.9136 14.164C13.6695 14.4081 13.6695 14.8038 13.9136 15.0479L16.8241 17.9584H1.66634C1.32116 17.9584 1.04134 18.2383 1.04134 18.5834C1.04134 18.9286 1.32116 19.2084 1.66634 19.2084H16.8241L13.9136 22.119C13.6695 22.363 13.6695 22.7588 13.9136 23.0029C14.1577 23.2469 14.5534 23.2469 14.7975 23.0029L18.7749 19.0254Z" fill="white"/>
											<ellipse cx="18.3337" cy="7.33317" rx="6.66667" ry="6.66667" fill="#1D9F9B"/>
											<path d="M15.833 7.33317L17.4997 8.99984L20.833 5.6665" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>

									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</section>
			</div>



		</main>
	</div>

</div>
<?php get_footer(); ?>


<script type="text/javascript">
	document.querySelector('#search-popup-wrap').dataset.toggle=1
</script>

<script type="text/javascript">
	let key_count = 0;
	let key_count_el = $('.keyword-count')
	let search_count_el = $$('.search-count-num')
	if (key_count_el != null) {
		for(let k of search_count_el){
			key_count += parseInt(k.innerText)
		}
	}
	key_count_el.innerText = key_count
	$('#main').dataset.found = key_count
</script>

<?php if ($_GET['focus'] != '' AND $_GET['focus'] != 'all'): ?>
	<script type="text/javascript">
		$('.dynamic-side-nav').dataset.selected = $('.li-nav[data-value="<?=$_GET['focus']?>"]').dataset.i
		$('.li-nav[data-value="project"]').dataset.count = <?=$project_search->post_count?>;
		$('.li-nav[data-value="promotion"]').dataset.count = <?=$promotion_search->post_count?>;
		$('.li-nav[data-value="club"]').dataset.count = <?=$club_search->post_count?>;
		$('.li-nav[data-value="blog"]').dataset.count = <?=$blog_search->post_count?>;
		$('.li-nav[data-value="news"]').dataset.count = <?=$news_search->post_count?>;
	</script>
	<?php endif ?>
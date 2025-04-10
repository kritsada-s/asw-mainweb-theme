<?php get_header();?>
<style type="text/css">
.list-pad-desc{
	font-weight: 300;
	padding: 0rem 22rem;
	text-align: center;
}
@media (max-width: 1024px) {
	.list-pad-desc{
		padding: 20px;
	}
}
.leaf11{
	top: 25%;
	width: 13vw;
}
.leaf12{
	bottom: -40px;
	width: 170px;
	height: auto;
}
@media (max-width: 767px) {
	.leaf11{
		width: 32vw;
	}
	.leaf12{
		display: none;
	}
}
@media (min-width: 1440px) {
	.leaf12{
		bottom: -10vw;
		width: 15vw;
	}
}
.quick-filter:hover {
	transition: .2s all;
	background: var(--ci-blue-900) !important;
}
.quick-filter {
	transition: .2s all;
}
</style>
<section id="project-search-nav" class="bg-ci-grey-900 relative">
	<img src="/wp-content/uploads/2022/11/leaves-shadow-1-2.png" class="absolute pointer-events-none leaf11">
	<img src="/wp-content/uploads/2022/11/shutterstock_1574382076-1-2.png" class="absolute pointer-events-none leaf12">
	<div class="cont-pd py-4 flex flex-row items-center">
		<a href="/home" class="cl-ci-blue-400">หน้าแรก</a>
		<img src="/wp-content/uploads/2023/01/Vector-84-1.png" style="margin:0px 12px;width: 5px;">
		<a href="/project-search" class="">ค้นหาโครงการ</a>
	</div>
	<sp style="height: 44px;" ></sp>
	<h1 class="f56-42 cl-ci-grey-200 flex justify-center"><?php the_title() ?></h1>
	<sp class="m"></sp>
	<p class="cl-ci-grey-400 f26-22 list-pad-desc">เรามุ่งมั่นที่จะออกแบบที่อยู่อาศัย เพื่อความสุขของคนอยู่ โดยคำนึงถึงไลฟ์สไตล์ และการใช้ชีวิตของแต่ละคนที่แตกต่างกัน
		ให้คุณได้ใช้ชีวิตในแบบที่คุณต้องการ 
	ให้คุณได้ใช้ชีวิตในแบบที่คุณต้องการ </p>
	<sp class="xl"></sp>
</section>

<div style="overflow: visible;">
	<section id="condo-filter" class="pt-16 pb-6" style="background: linear-gradient(180deg, #EDF2F7 -4.71%, #FFFFFF 164.99%);">

		<div class="padding-xs-hzt pst -ab -left wide" style="z-index: 1000;top: 0%;">
			<div class="cont-pd">
				<div class="">
					<theboxes class="middle center t-center- -clip round" style="margin-top: 0px;z-index: 10;border-radius: 8px;" boxing="5">
						<box col=""><inner id="filter_0" class="padding quick-filter v-middle-wrap pointer" onclick="filter_pop(4, this)">
							<div class="quick-filter-inner">
								<span class="wide">
									<div class="grid grid-cols-5">
										<div class="col-span-1 flex items-center">
											<img src="/wp-content/uploads/2022/10/Icon-in-input.png" class="inline-block" style="height:1.5rem">
										</div>
										<div class="col-span-4">
											<span class="" style="font-size:26px;line-height:32px;" id="the_pro">
												ประเภทที่อยู่อาศัย
											</span>
										</div>
									</div>
								</span>
								<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow" style="height:.5rem">
							</div>
						</inner></box>
						<box col=""><inner id="filter_1" class="padding quick-filter v-middle-wrap pointer" onclick="filter_pop(1, this)">
							<div class="quick-filter-inner">
								<span class="wide">
									<div class="grid grid-cols-5">
										<div class="col-span-1 flex items-center">
											<img src="/wp-content/uploads/2022/10/Icon-in-input-1.png" class="inline-block" style="height:1.5rem">
										</div>
										<div class="col-span-4">
											<span class="" style="font-size:26px;line-height:32px;" id="lo_pro">
												ทำเล
											</span>
										</div>
									</div>
								</span>
								<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow" style="height:.5rem">
							</div>
						</inner></box>
						<box col=""><inner id="filter_2" class="padding quick-filter v-middle-wrap pointer" onclick="filter_pop(2, this)">
							<div class="quick-filter-inner">
								<span class="wide">
									<div class="grid grid-cols-5">
										<div class="col-span-1 flex items-center">
											<img src="/wp-content/uploads/2022/10/Icon-in-input-2.png" class="inline-block" style="height:1.5rem">
										</div>
										<div class="col-span-4">
											<span class="" style="font-size:26px;line-height:32px;" id="brand_pro">
												แบรนด์
											</span>
										</div>
									</div>
								</span>
								<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow" style="height:.5rem">
							</div>
						</inner></box>
						<box col=""><inner id="filter_3" class="padding quick-filter v-middle-wrap cursor-pointer" onclick="filter_pop_price(this)" data-open="-1" data-price-min="2" data-price-max="4">
							<div class="quick-filter-inner">
								<span class="wide">
									<div class="grid grid-cols-5">
										<div class="col-span-1 flex items-center">
											<img src="/wp-content/uploads/2022/10/Icon-in-input-3.png" class="inline-block" style="height:1.5rem">
										</div>
										<div class="col-span-4">
											<span class="" style="font-size:26px;line-height:32px;" id="price_pro">
												ช่วงราคา
											</span>
										</div>
									</div>
								</span>
								<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow" style="height:.5rem">
							</div>
						</inner></box>
						<box col=""><inner id="filter_4" class="padding quick-filter v-middle-wrap pointer" onclick="filter_pop(0, this)">
							<div class="quick-filter-inner">
								<span class="wide">
									<div class="grid grid-cols-5">
										<div class="col-span-1 flex items-center">
											<img src="/wp-content/uploads/2022/11/Group-908.png" style="height:1.5rem">
										</div>
										<div class="col-span-4">
											<span class="" style="font-size:26px;line-height:32px;" id="type_pro">
												สถานะโครงการ
											</span>
										</div>
									</div>
								</span>
								<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow" style="height:.5rem">
							</div>
						</inner></box>
					</theboxes>
					<style type="text/css">
					.input-width{
						width: 30px;
						margin-left: 5px;
						margin-right: 5px;
					}
					.check-wrap {
						display: block;
						position: relative;
						padding-left: 35px;
						cursor: pointer;
						font-size: 22px;
						line-height: 28px;
						font-weight: 400;
						color: var(--ci-grey-300);
						-webkit-user-select: none;
						-moz-user-select: none;
						-ms-user-select: none;
						user-select: none;
						padding-right: 12px;
						margin-bottom: 4px;
					}
					.check-wrap input {
						position: absolute;
						opacity: 0;
						cursor: pointer;
						height: 0;
						width: 0;
					}
					.checkmark {
						transition: .5s;
						position: absolute;
						top: 3px;
						left: 0;
						height: 16px;
						width: 16px;
						border-radius: 4px;
						border:1px solid var(--ci-blue-600);
						background-color: white;
						margin-left: 7px;
						margin-top: 2px;
					}
					.check-wrap input:checked ~ .checkmark {
						background-color: var(--ci-veri-400);
					}
					.checkmark:after {
						content: "";
						position: absolute;
						display: none;
					}
					.check-wrap input:checked ~ .checkmark:after {
						display: block;
					}
					.check-wrap .checkmark:after {
						left: 4.5px;
						top: 2px;
						width: 5px;
						height: 8px;
						border: solid white;
						border-width: 0 2px 2px 0;
						-webkit-transform: rotate(45deg);
						-ms-transform: rotate(45deg);
						transform: rotate(45deg);
					}
					.popup-filter{
						transition: .5s;
						border: 1px solid var(--ci-blue-600);
						border-radius: 24px;
						padding: 0.75rem;
						padding-bottom: 0;
						align-items: center;
						margin-top: 10px;
						margin-right: 3px;
						width: fit-content;
						padding-top: 4px;
					}
					.popup-filter:hover{
						border:1px solid var(--ci-veri-400);
						background-color: var(--ci-veri-900);
					}
					#filter-selected{
						color: var(--ci-veri-200);
						font-weight: 500;
					}
					.popup-select{
						transition: .5s;
						border: 1px solid var(--ci-veri-400);
						background-color: var(--ci-veri-900);
						border-radius: 30px;
						padding-left: 1rem;
						padding-right: 0.75rem;
						padding-top: 0.25rem;
						padding-bottom: 0.25rem;
						align-items: center;
						margin-top: 8px;
						margin-bottom: 8px;
						margin-right: 8px;
						white-space: nowrap;
					}
					.popup-select label{
						color: var(--ci-veri-200);
						font-weight: 400;
						margin-bottom: 0;
					}
					.filter-bet-line{
						border: 1px solid #CFD4D9;
						width: 0;
						height: 30px;
						margin-left:20px;
						margin-right:20px;
					}
					.quick-filter-toggle-2{
						top: 5px;
						left: 8.5%;
						width: 36em;
					}
					.quick-filter-toggle-3{
						top: 5px;
						width: 45em;
					}
					.quick-filter-toggle-5{
						width: 14em;
						position: relative;
						z-index: 10;
						display: none;
					}
					@media (max-width: 1024px) {
						.quick-filter-toggle-2{
							width: 27em;
						}
						.quick-filter-toggle-3{
							width: 90vw;
						}
					}
					@media (max-width: 768px) {
						.popup-select{
							padding-right: 1.5rem;
						}
					}
					.popup-filter-price{
						font-size: 22px;
						line-height: 28px;
						font-weight: 400;
						color: var(--ci-grey-300);
						transition: .5s;
					}
					.popup-filter-price:hover{
						background-color: var(--ci-blue-900);
					}
					.popup-filter-price:hover.-mini{
						background-color: unset;
					}
					.popup-filter-price label{
						margin-bottom: 0;
					}
				</style>
				<div id="filter_the" class="quick-filter-toggle-5">
					<div class="bg-white round" style="padding:24px 12px;padding-right: 0;">
						<?php
						$terms = get_terms( array(
							'taxonomy' => 'project-type',
							'hide_empty' => false,
						) ); 
						foreach ($terms as $key => $value) {
							if ($value->parent == 0){ ?>
								<div class="flex inline popup-filter" num="4" onclick="check_chk(this, 4);sort_info();">
									<label class="check-wrap" termID="<?=$value->term_id?>" name="<?=$value->name?>"><?=$value->name?>
									<input type="checkbox" name="<?=$value->name?>">
									<span class="checkmark"></span>
								</label>
							</div>
						<?php }
					}
					?>
				</div>
			</div>
			<div id="filter_type" class="quick-filter-toggle-1" style="top: 5px;width: unset;padding-left: 75%;">
				<div class="bg-white round" style="padding:32px 24px;padding-top: 22px;">
					<?php
					$terms = get_terms( array(
						'taxonomy' => 'project_status',
						'hide_empty' => false,
					) );
					foreach ($terms as $key => $value){
						$stat_label = get_field('label',$value->taxonomy . '_' . $value->term_id); ?>
						<div class="flex inline popup-filter" num="0" onclick="check_chk(this, 0);sort_info()">
							<label class="check-wrap" name="<?=$stat_label?>" termId="<?=$value->term_id?>"><?=$stat_label?>
							<input type="checkbox" name="<?=$stat_label?>">
							<span class="checkmark"></span>
						</label>
					</div>
				<?php }
				?>
			</div>
		</div>
		<div id="filter_location" class="quick-filter-toggle-2">
			<div class="bg-white round" style="padding:45px 24px;padding-top: 30px;">
				<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">ในกรุงเทพฯ</span>
				<sp style="height: 8px;" ></sp>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'project_location',
					'hide_empty' => false,
				) );
				foreach ($terms as $key => $value) { 
					if ($value->parent == 76){
						?>
						<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="1" onclick="check_chk(this, 1);sort_info()">
							<label class="check-wrap" termId="<?=$value->term_id?>" name="<?=$value->name?>"><?=$value->name?>
							<input type="checkbox" name="<?=$value->name?>">
							<span class="checkmark"></span>
						</label>
					</div>
				<?php }
			}
			?>

			<div style="padding-top: 42px;padding-bottom: 22px;">
				<hr style="width: 80px;background-color: var(--cl-ci-grey-900);">
			</div>
			<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">ต่างจังหวัด</span>
			<sp style="height: 8px;" ></sp>
			<?php
			$terms = get_terms( array(
				'taxonomy' => 'project_location',
				'hide_empty' => false,
			) );
			foreach ($terms as $key => $value) { 
				if ($value->parent == 77){
					?>
					<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="1" onclick="check_chk(this, 1);sort_info()">
						<label class="check-wrap" termId="<?=$value->term_id?>" name="<?=$value->name?>"><?=$value->name?>
						<input type="checkbox" name="<?=$value->name?>">
						<span class="checkmark"></span>
					</label>
				</div>
			<?php }
		}
		?>
	</div>
</div>
<div id="filter_project" class="quick-filter-toggle-3">
	<div class="bg-white round" style="padding:48px 32px;padding-top: 30px;">
		<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">คอนโดมิเนียม</span>
		<sp style="height: 8px;" ></sp>
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'project-type',
			'hide_empty' => false,
		) );
		foreach ($terms as $key => $value) {
			if ($value->parent == 35) {
				$iconic = get_field('project_logo',$value->taxonomy . '_' . $value->term_id); 
				$is_show = get_field('is_show',$value->taxonomy . '_' . $value->term_id);
				if ($is_show != 'hide') {?>
					<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="2" onclick="check_chk(this, 2);sort_info()">
						<label class="check-wrap" termId="<?=$value->term_id?>" name="<?= $value->name ?>">
							<input type="checkbox" name="<?= $value->name ?>">
							<img src="<?=$iconic['url']?>" style="width: auto;height: 30px;margin-right: 5px;" >

							<span class="checkmark" style="margin-top: 4px;"></span>
						</label>
					</div>
				<?php }
			}
		}
		?>
		<div style="padding-top: 40px;padding-bottom: 22px;">
			<hr style="width: 80px;background-color: var(--cl-ci-grey-900);">
		</div>
		<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">บ้านและทาวน์โฮม</span>
		<sp style="height: 8px;" ></sp>
		<?php
		foreach ($terms as $key => $value) {
			if ($value->parent == 46) {
				$iconic = get_field('project_logo',$value->taxonomy . '_' . $value->term_id);
				$is_show = get_field('is_show',$value->taxonomy . '_' . $value->term_id);
				if ($is_show != 'hide') { ?>
					<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="2" onclick="check_chk(this, 2);sort_info()">
						<label class="check-wrap" termId="<?=$value->term_id?>" name="<?= $value->name ?>">
							<input type="checkbox" name="<?= $value->name ?>">
							<img src="<?=$iconic['url']?>" style="width: auto;height: 30px;margin-right: 5px;" >

							<span class="checkmark" style="margin-top: 4px;"></span>
						</label>
					</div>
				<?php }
			}
		}
		?>
	</div>
</div>
<?php 
// $price = get_field("price_range", 2);
?>
<!-- <div id="filter_cost" class="quick-filter-toggle-4" style="top: 5px;left: 60%;">
	<div class="bg-white round py-4">
		<?php 
		foreach ($price as $key => $value) {
			?>
			<div class="flex inline popup-filter-price p-2 pl-6 pointer" num="3" onclick="check_chk(this, 3);sort_info()">
				<label class="pointer" for="type_condo" price="<?=$value['price']?>" name="ไม่เกิน <?=$value['price']?> ล้านบาท">ไม่เกิน <?=$value['price']?> ล้านบาท</label>
				<div class="ratio-box" style="display:none;">
					<div class="ratio-box-inner-x"></div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div> -->

<?php 
$filter_price = get_field('filter_price_range',2);
// pre($filter_price);
?>
<style type="text/css">
#filter_cost[data-open="-1"]{
	display: none;
}
#filter_cost[data-open="1"]{
	display: block !important;
}
#filter_3[data-open="1"] .quick-filter-arrow{
	transform: rotate(-180deg) !important;
}
</style>

<div id="filter_cost" class="quick-filter-toggle-4" data-open="-1">
	<div class="bg-white round py-4">
		<?php 
		foreach ($filter_price as $key => $value) {
			?>
			<div class="flex inline popup-filter-price p-2 pointer pl-6" onclick="filter_price_select(this)" data-price-max="<?=$value['max']?>" data-price-min="<?=$value['min']?>">
				<label class="pointer" for="type_condo"><?=$value['label']?></label>
				<div class="ratio-box" style="display:none;">
					<div class="ratio-box-inner-x"></div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>

</div>
</div>
</div>
<sp class="m"></sp>
</section>
<script type="text/javascript">
	function filter_price_select(el){

	}

</script>

<style type="text/css">
.txt-selected{
	margin-right: 12px;
	display: flex;
	align-items: center;
	white-space: nowrap;
}
.clear-all {
	color: var(--ci-orange-500);
	padding-left: 22px;
	padding-right: 16px;
	transition: .5s;
	border-radius: 8px;
	height: 48px;
}
.clear-all:hover {
	background-color: var(--ci-orange-900);
}
#filter-mini{
	display: none;
}

#filter-head{
	display: none;

}
#filter-select .cont-pd {
	max-width: 1320px;
	min-width: 320px;
	display: block;
	position: relative;
	margin: auto;
	padding: 0 16px;
}
#filter-select{
	border: 1px solid var(--ci-blue-800);
}
#filter{
	position: static;
}
@media (max-width: 1023px) {
	#filter{
		border-bottom: 1px solid var(--ci-blue-800);
		position: sticky;
		top: calc(50px);
	}
}
@media (max-width: 1116px) {
	#filter-mini{
		display: block;
	}
	#filter-head{
		z-index: 1;
		background-color: white;
		padding-top: 1rem;
		border-top: 1px solid var(--ci-blue-800);
	}

	#condo-filter{
		display: none;
	}
	#filter-select .cont-pd {
		margin: 0;
		padding: 0 0 0 1rem;
	}
	.filter-inner-mini {
		width: 100%;
		max-width: 420px;
		margin-left: auto;
		margin-right: auto;

	}
	.filter-cards-wrap{
		position: relative;
		transition: all .5s cubic-bezier(0, 0, 0.3, 1.07);
		width: 100%;
		height: 70%;
			/*margin-top: 2rem;
			margin-bottom: 2rem;*/
		}
		.filter-inner-mini{
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 100%;
			padding: 16px 26px;
			border-radius: 16px;
			border: 1px solid var(--ci-blue-800);
			box-shadow: 0px 0px 30px rgba(98, 137, 177, 0.4);
		}
		.txt-selected{
			margin-right: 12px;
			display: flex;
			align-items: center;
			white-space: nowrap;
		}
		.quick-filter{
			transition: .2s all;
		}
		.quick-filter:hover {
			transition: .2s all;
			background: var(--ci-blue-900) !important;
		}
		.hidescroll::-webkit-scrollbar {
			display: none;
		}
		.hidescroll{
			-ms-overflow-style: none;  /* IE and Edge */
			scrollbar-width: none;  /* Firefox */
		}
		.clear-all{
			color: var(--ci-orange-500);
			padding-left: 22px;
			padding-right: 16px;
			transition: .5s;
			border-radius: 8px;
			height: 48px;
		}
		.clear-all:hover{
			background-color: var(--ci-orange-900);
		}
	</style>
	<!--=== The Section Boxes : filter-mini ===-->
	<section id="filter-head"class="hidden xl:block">
		<h3 style="font-weight: 400;font-size: 30px;line-height: 36px;text-align: center">ค้นหาโครงการคอนโดมิเนียม</h3>
	</section>
	<section id="filter" class="" style="z-index: 99;">
		<section id="filter-mini" class="">
			<div class="cont-pd py-4 bg-white">
				<div class="flex items-center justify-center mini-filter relative mob-no-pd">
					<div class="filter-cards-wrap">
						<div class="filter-inner-mini pointer bg-white" onclick="openPopFilter()">
							<!-- onclick test is "openPopFilter()" -->
							<span class="wide">
								<div class="grid grid-cols-5 gap-0 flex items-center">
									<div class="col-span-1 flex items-center">
										<img src="/wp-content/uploads/2022/10/Icon-in-input.png" class="inline-block" style="height:2.5rem;margin:0;">
									</div>
									<div class="col-span-4">
										<h6 class="filter-select" id="">
											<div class="grid-rows-2 flex flex-row">
												<div class="row-span-1" style="font-size: 24px;line-height: 26px;font-weight: 500;">ค้นหา</div>
												<div class="row-span-1" style="font-size: 24px;line-height: 26px;font-weight: 400;">ที่อยู่โครงการในแบบคุณ</div>
											</div>
										</h6>
									</div>
								</div>
							</span>
							<img src="/wp-content/uploads/2022/11/arrow.png" style="height: 15px;">
						</div>	
					</div>
				</div>
			</div>
		</section>
		<section id="filter-select" class="" style="background-color: white;display: none;">
			<div class="pl-4 cont-pd" style="padding-top: 8px;padding-bottom: 8px;">
				<div class="hidescroll flex flex-row overflow-y-scroll md:overflow-y-hidden md:grid md:grid-cols-6 md:gap-2">
					<div class="col-span-5">
						<div id="filter-selected" class="relative flex items-center md:flex-wrap" style="width: 100%;">
						</div>
					</div>
					<div class="col-span-1 flex justify-end mx-4 md:mx-0 items-start">
						<div class="clear-all inline-flex items-center pointer" onclick="filter_pop(999, this);check_chk('clear', 999)" style="white-space: nowrap;">
							<img src="/wp-content/uploads/2022/11/Vector-10.png" style="width: 21px;height: 21px;">&ensp;ล้างทั้งหมด
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>


	<!--=== The Section Boxes : filter select ===-->

	<section id="-filter-select" class="py-2 md:py-4" style="background-color: white;display: none;">
		<div class="cont-pd">
			<div class="hidescroll flex flex-row overflow-y-scroll md:overflow-y-hidden md:grid md:grid-cols-6 md:gap-2">
				<div class="col-span-5">
					<div id="-filter-selected" class="relative flex items-center md:flex-wrap" style="width: 100%;">

					</div>
				</div>
				<div class="col-span-1 flex justify-end ml-4 md:ml-0">
					<div class="cl-ci-orange-500 inline-flex items-center pointer" onclick="filter_pop(999, this);check_chk('clear', 999)" style="white-space: nowrap;">
						<img src="/wp-content/uploads/2022/11/Vector-10.png" style="width: 21px;height: 21px;">&ensp;ล้างทั้งหมด
					</div>
				</div>
			</div>
		</div>
	</section>

	<style type="text/css">
	.mini-filter-popup{
		position: fixed;
		right: 120%;
		opacity: 0;
		top: 0;
		width: 100%;
		/*min-height: 100%;*/
		z-index: 10000;
		background: linear-gradient(360deg, #EDF2F7 0%, #FDFDFE 13.24%, #FFFFFF 103.44%);
		transition: .5s;

		height: calc(100%);
		/*overflow: scroll;*/
	}
	.close-filter {
		color: var(--ci-grey-100);
		position: fixed;
		top: 27.5px;
		right: 16px;
		font-size: 45px;
		transition: .3s;
		display: none;
		cursor: pointer;
	}
	.popup-filter-inner{
		display: block;
		cursor: pointer;
	}
	.clear-wrap-mini{
		background-color: #f5f7fa;
		position: fixed;
		width: calc(100% - 32px);
		bottom: 10px;
	}
	.sp-mini{
		height: 40px;
	}
	.quick-filter-arrow-mini{
		transition: .5s;
		height: 0.5rem;
		margin-right: 0;
	}
	.ratio-box{
		display: flex;
		justify-content: center;
		align-items: center;
		width: 22px;
		height: 22px;
		background-color: white;
		border:1px solid var(--ci-grey-600);
		border-radius: 25px;
	}
	.ratio-box-inner{
		width: 12px;
		height: 12px;
		background-color: var(--ci-veri-500);
		border-radius: 25px;
		opacity: 0;
		transition: .25s;
	}
</style>
<div class="mini-filter-popup">
	<div class="cont-pd" style="height: calc(100% - 60px);
	overflow: scroll;">
	<span class="close-filter" onclick="closePopFilter()" style="">&times;</span>
	<h3 style="color: #374151;font-size: 30px;line-height: 36px;font-weight: 400;margin-top: 27.5px;">ค้นหาคอนโดมิเนียมในแบบคุณ</h3>
	<sp class="" style="height: 32px;" ></sp>
	<div class="popup-filter-inner" onclick="filter_pop_mini(0)">
		<div class="grid grid-cols-12">
			<div class="col-span-1 flex items-center">
				<img src="/wp-content/uploads/2022/10/Icon-in-input.png" class="inline-block" style="height:2rem;margin:0;">
			</div>
			<div class="col-span-10 pl-3">
				<h6 class="" id="the_pro_mini" style="font-size: 24px;line-height: 32px;font-weight: 400;">
					ประเภทโครงการ
				</h6>
			</div>
			<div class="col-span-1 flex items-center">
				<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow-mini">
			</div>
		</div>
	</div>
	<sp class="sp-mini"></sp>
	<div id="filter_the_mini" class="mini-filter-toggle-4">
		<div class="bg-white">
			<?php
			$terms = get_terms( array(
				'taxonomy' => 'project-type',
				'hide_empty' => false,
			) );
			foreach ($terms as $key => $value){
				if ($value->parent == 0) { ?>
					<div class="flex inline-flex popup-filter" slug="<?=$value->name?>" num="5" onclick="check_chk(this, 4);">
						<label class="check-wrap" num="<?=$value->term_id?>" name="<?= $value->name ?>"><?=$value->name?>
						<input type="checkbox" name="<?= $value->name ?>">
						<span class="checkmark" style="margin-top: 4px;"></span>
					</label>
				</div>
			<?php }
		}
		?>
	</div>
</div>
<div class="popup-filter-inner" onclick="filter_pop_mini(1)">
	<div class="grid grid-cols-12">
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Icon-in-input-1.png" class="inline-block" style="height:2rem;margin:0;">
		</div>
		<div class="col-span-10 pl-3">
			<h6 class="" id="loca_pro_mini" style="font-size: 24px;line-height: 32px;font-weight: 400;">
				ทำเล
			</h6>
		</div>
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow-mini">
		</div>
	</div>
</div>
<sp class="sp-mini"></sp>
<div id="filter_loca_mini" class="mini-filter-toggle-1">
	<div class="bg-white">
		<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">ในกรุงเทพฯ</span>
		<br>
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'project_location',
			'hide_empty' => false,
		) );
		foreach ($terms as $key => $value) { 
			if ($value->parent == 76){
				?>
				<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="1" onclick="check_chk(this, 1);sort_info()">
					<label class="check-wrap" termId="<?=$value->term_id?>" name="<?=$value->name?>"><?=$value->name?>
					<input type="checkbox" name="<?=$value->name?>">
					<span class="checkmark"></span>
				</label>
			</div>
		<?php }
	}
	?>
	<sp style="height: 20px;"></sp>
	<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">ต่างจังหวัด</span>
	<br>
	<?php
	$terms = get_terms( array(
		'taxonomy' => 'project_location',
		'hide_empty' => false,
	) );
	foreach ($terms as $key => $value) { 
		if ($value->parent == 77){
			?>
			<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="1" onclick="check_chk(this, 1);sort_info()">
				<label class="check-wrap" termId="<?=$value->term_id?>" name="<?=$value->name?>"><?=$value->name?>
				<input type="checkbox" name="<?=$value->name?>">
				<span class="checkmark"></span>
			</label>
		</div>
	<?php }
}
?>
</div>
<sp style="height: 20px;"></sp>
<hr style="color: var(--cl-ci-grey-900);width: 100%;">
</div>
<div class="popup-filter-inner" onclick="filter_pop_mini(2)">
	<div class="grid grid-cols-12">
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Icon-in-input-2.png" class="inline-block" style="height:2rem;margin:0;">
		</div>
		<div class="col-span-10 pl-3">
			<h6 class="" id="brand_pro_mini" style="font-size: 24px;line-height: 32px;font-weight: 400;">
				แบรนด์
			</h6>
		</div>
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow-mini">
		</div>
	</div>
</div>
<sp class="sp-mini"></sp>
<div id="filter_brand_mini" class="mini-filter-toggle-2">
	<div class="bg-white">
		<span class="pl-3 cl-ci-blue-300" style="font-size: 26px;">คอนโดมิเนียม</span>
		<br>
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'project-type',
			'hide_empty' => false,
		) );
		foreach ($terms as $key => $value) {
			if ($value->parent == 35) {
				$iconic = get_field('project_logo',$value->taxonomy . '_' . $value->term_id);
				$is_show = get_field('is_show',$value->taxonomy . '_' . $value->term_id);
				if ($is_show != 'hide') { ?>
					<div class="flex inline-flex popup-filter" slug="<?=$value->slug?>" num="2" onclick="check_chk(this, 2);sort_info()">
						<label class="check-wrap" termId="<?=$value->term_id?>" name="<?= $value->name ?>">
							<input type="checkbox" name="<?= $value->name ?>">
							<img src="<?=$iconic['url']?>" style="width: auto;height: 30px;margin-right: 5px;" >

							<span class="checkmark" style="margin-top: 4px;"></span>
						</label>
					</div>
				<?php }
			}
		}
		?>
	</div>
	<sp style="height: 20px;"></sp>
	<hr style="color: var(--cl-ci-grey-900);width: 100%;">
</div>
<div class="popup-filter-inner" onclick="filter_pop_mini(3)">
	<div class="grid grid-cols-12">
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Icon-in-input-3.png" class="inline-block" style="height:2rem;margin:0;">
		</div>
		<div class="col-span-10 pl-3">
			<h6 class="" id="cost_pro_mini" style="font-size: 24px;line-height: 32px;font-weight: 400;">
				ช่วงราคา
			</h6>
		</div>
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow-mini">
		</div>
	</div>
</div>
<sp class="sp-mini"></sp>
<div id="filter_cost_mini" class="mini-filter-toggle-3">
	<div class="bg-white pl-5">
		<?php 
		foreach ($price as $key => $value) {
			?>
			<div class="flex inline popup-filter-price -mini p-2 pointer justify-between pr-0" num="3" onclick="check_chk(this, 3);">
				<label class="pointer" for="type_condo" price="<?=$value['price']?>" name="ไม่เกิน <?=$value['price']?> ล้านบาท">ไม่เกิน <?=$value['price']?> ล้านบาท</label>
				<div class="ratio-box">
					<div class="ratio-box-inner"></div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>
<div class="popup-filter-inner" onclick="filter_pop_mini(4)">
	<div class="grid grid-cols-12">
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/11/Group-908.png" class="inline-block" style="height:2rem;margin:0;">
		</div>
		<div class="col-span-10 pl-3">
			<h6 class="" id="stat_pro_mini" style="font-size: 24px;line-height: 32px;font-weight: 400;">
				สถานะโครงการ
			</h6>
		</div>
		<div class="col-span-1 flex items-center">
			<img src="/wp-content/uploads/2022/10/Vector.png" class="quick-filter-arrow-mini">
		</div>
	</div>
</div>
<sp class="sp-mini"></sp>
<div id="filter_stat_mini" class="mini-filter-toggle-4">
	<div class="bg-white">
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'project_status',
			'hide_empty' => false,
		) );
		foreach ($terms as $key => $value){
			$stat_label = get_field('label',$value->taxonomy . '_' . $value->term_id); ?>
			<div class="flex inline-flex popup-filter" num="0" onclick="check_chk(this, 0);sort_info()">
				<label class="check-wrap" name="<?=$stat_label?>" termId="<?=$value->term_id?>"><?=$stat_label?>
				<input type="checkbox" name="<?=$stat_label?>">
				<span class="checkmark"></span>
			</label>
		</div>
	<?php }
	?>
</div>
</div>
<div class="grid grid-cols-2 gap-4 clear-wrap-mini">
	<div class="col-span-1 cl-ci-blue-300 flex items-center justify-center">
		<div class="clear-all-mini flex items-center justify-center" onclick="filter_pop(999, this);check_chk('clear', 999)">
			<h6 style="font-size: 24px;line-height: 32px;font-weight: 400;">ล้างทั้งหมด</h6>
		</div>
	</div>
	<div class="col-span-1 flex items-center justify-center">
		<button class="quick-filter-btn" style="width: 100%;" onclick="closePopFilter()">
			<h6 style="font-size: 24px;line-height: 32px;font-weight: 400;">ค้นหา</h6>
		</button>
	</div>
</div>
</div>
</div>

<script type="text/javascript">
	const popup = document.getElementsByClassName("mini-filter-popup")[0];
	function openPopFilter(){
		popup.style.opacity = "1";
		popup.style.right = "0";
		document.getElementsByClassName("close-filter")[0].style.display = "block";
	}
	function closePopFilter(){
		popup.style.opacity = "0";
		popup.style.right = "120%";
		document.getElementsByClassName("close-filter")[0].style.display = "none";
	}
	var recent_pop_mini = -1;
	function filter_pop_mini(num){
		let sp = document.getElementsByClassName("sp-mini");
		let arrow = document.getElementsByClassName("quick-filter-arrow-mini");
		for(let i of sp){
			i.style.height = "40px";
		}
		for(i of arrow){
			i.style.transform = "rotate(0deg)";
		}
		filter_the_mini.style.display='none';
		filter_stat_mini.style.display='none';
		filter_loca_mini.style.display='none';
		filter_brand_mini.style.display='none';
		filter_cost_mini.style.display='none';
		if(num != recent_pop_mini){
			switch (num) {
				case 0:
				filter_the_mini.style.display='block';
				sp[0].style.height = "20px";
				arrow[0].style.transform = "rotate(-180deg)";
				break;
				case 1:
				filter_loca_mini.style.display='block';
				sp[1].style.height = "20px";
				arrow[1].style.transform = "rotate(-180deg)";
				break;
				case 2:
				filter_brand_mini.style.display='block';
				sp[2].style.height = "20px";
				arrow[2].style.transform = "rotate(-180deg)";
				break;
				case 3:
				filter_cost_mini.style.display='block';
				sp[3].style.height = "20px";
				arrow[3].style.transform = "rotate(-180deg)";
				break;
				case 4:
				filter_stat_mini.style.display='block';
				sp[4].style.height = "20px";
				arrow[4].style.transform = "rotate(-180deg)";
				break;
			}
			recent_pop_mini = num;
		}
		else{
			recent_pop_mini = -1;
		}
	}
</script>

<?php 
$the_type = explode(",", $_GET['type']);
$pro_type = explode(",", $_GET['status']);
$pro_loca = explode(",", $_GET['location']);
$pro_brand = explode(",", $_GET['brand']);
$pro_price = ($_GET['price']);
$pro_price_max = ($_GET['price_max']);
$pro_price_min = ($_GET['price_min']);

$lis_the = array();
$lis_type = array();
$lis_loca = array();
$lis_brand = array();
// pre($pro_price);

foreach ($the_type as $key => $value) {
	array_push($lis_the, get_term($value)->name);
}
foreach ($pro_type as $key => $value) {
	$stat_label = get_field('label','project_status' . '_' . $value);
	array_push($lis_type, $stat_label);
}
foreach ($pro_loca as $key => $value) {
	array_push($lis_loca, get_term($value)->name);
}
foreach ($pro_brand as $key => $value) {
	array_push($lis_brand, get_term($value)->name);
}

?>
<script type="text/javascript">

	function sort_info(){
		let allcard = document.getElementsByClassName("project-card");
		var chk_display = 0
		var chk_price = 0
		var chk_price_max = 999
		var chk_price_min = 0
		var chk_type = 0
		var chk_the = 0
		for(let i of allcard){
			chk_price = 0
			chk_type = 0
			chk_the = 0
			i.style.display = "none"
			if (txtt_brand.includes(i.getAttribute("cate")) && txtt_loca.includes(i.getAttribute("loca"))) {
				i.style.display = "block"
				chk_display++
				chk_price = 1
				chk_type = 1
				chk_the = 1
			}
			else if(txtt_brand.length == 0 && txtt_loca.includes(i.getAttribute("loca"))){
				i.style.display = "block"
				chk_display++
				chk_price = 1
				chk_type = 1
				chk_the = 1
			}
			else if(txtt_brand.includes(i.getAttribute("cate")) && txtt_loca.length == 0){
				i.style.display = "block"
				chk_display++
				chk_price = 1
				chk_type = 1
				chk_the = 1
			}
			else if(txtt_brand.length == 0 && txtt_loca.length == 0){
				i.style.display = "block"
				chk_display++
				chk_price = 1
				chk_type = 1
				chk_the = 1
			}
			if(((parseFloat(i.getAttribute("data-price"))/100).toFixed(2) > parseInt(txt_price.split(" ")[1])) && chk_price){
				i.style.display = "none"
				chk_display--
				chk_type = 0
				chk_the = 0
			}
			if(txtt_type.length == 0){
			}
			else if(!(txtt_type.includes(i.getAttribute("type"))) && chk_type){
				i.style.display = "none"
				chk_display--
				chk_the = 0
			}
			if(txtt_the.length == 0){
			}
			else if(!(txtt_the.includes(i.getAttribute("the"))) && chk_the){
				i.style.display = "none"
				chk_display--
			}
			let set_filter_price_max = parseInt(document.querySelector('#filter_3').dataset.priceMax)
			set_filter_price_max *= 100

			let set_filter_price_min = parseInt(document.querySelector('#filter_3').dataset.priceMin)
			set_filter_price_min *= 100


			if(parseFloat(i.dataset.price)>=set_filter_price_min &&  parseFloat(i.dataset.price)<=set_filter_price_max){

			}else{
				i.style.display = "none"
				chk_display--
			}
		}
		// xconsolex.log(txtt_the)
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'project-type',
			'hide_empty' => false,
		) );
		$count_num = 0;
		foreach ($terms as $key => $value) {
			if ($value->parent == 0) {
				$count_num += $value->count;
			}
		}
		?>
		let allpro = <?=$count_num?>;
		if (allpro == chk_display){
			document.getElementById("tit-con").innerHTML = "โครงการแนะนำจากแอสเซทไวส์ "
		}
		else{
			document.getElementById("tit-con").innerHTML = "ผลการค้นหา "	
		}
		document.getElementById("num-con").innerHTML = "- "+chk_display+" รายการ";
		if (chk_display == 0) {
			document.getElementById("condo-info").style.display = "none"
			document.getElementById("notfound").style.display = "flex"
		}
		else{
			document.getElementById("condo-info").style.display = "grid"
			document.getElementById("notfound").style.display = "none"
		}
		restartSort()
	}

	var recent_pop = -1;
	var blue900 = getComputedStyle(document.querySelector(':root')).getPropertyValue('--ci-blue-900')
	function filter_pop(num, ele){
		filter_type.style.display='none';
		filter_location.style.display='none';
		filter_project.style.display='none';
		filter_cost.style.display='none';
		filter_the.style.display='none';
		let arrw = document.getElementsByClassName("quick-filter-arrow");
		for(let i of arrw){
			i.style.transform = "rotate(0deg)";
		}
		let bgc = document.getElementsByClassName("quick-filter");
		for(let j of bgc){
			j.style.backgroundColor = "white";
		}
		if(num != recent_pop && num != 999){
			switch (num) {
				case 0:
				filter_type.style.display='block';
				break;
				case 1:
				filter_location.style.display='block';
				break;
				case 2:
				filter_project.style.display='block';
				break;
				case 3:
				filter_cost.style.display='block';
				break;
				case 4:
				filter_the.style.display='block';
				break;
			}
			ele.style.backgroundColor = blue900;
			ele.children[0].children[1].style.transform = "rotate(-180deg)"
			recent_pop = num;
		}
		else{
			recent_pop = -1;
		}
	}

	var ver400 = getComputedStyle(document.querySelector(':root')).getPropertyValue('--ci-veri-400')
	var ver900 = getComputedStyle(document.querySelector(':root')).getPropertyValue('--ci-veri-900')
	var blue800 = getComputedStyle(document.querySelector(':root')).getPropertyValue('--ci-blue-600')

	var pro_the = new Set(<?php echo json_encode($lis_the); ?>)
	var pro_type = new Set(<?php echo json_encode($lis_type); ?>)
	var pro_loca = new Set(<?php echo json_encode($lis_loca); ?>)
	var pro_pro = new Set(<?php echo json_encode($lis_brand); ?>)

	var filt_the = new Set(<?php echo json_encode($the_type); ?>)
	var filt_type = new Set(<?php echo json_encode($pro_type); ?>)
	var filt_loca = new Set(<?php echo json_encode($pro_loca); ?>)
	var filt_pro = new Set(<?php echo json_encode($pro_brand); ?>)

	var id_the = ""
	var id_type = ""
	var id_loca = ""
	var id_brand = ""
	var id_price = "<?=$pro_price?>";

	var txt_the = "ประเภทที่อยู่อาศัย"
	var txt_type = "สถานะโครงการ"
	var txt_loca = "ทำเล"
	var txt_brand = "แบรนด์"
	var txt_price = "ช่วงราคา"

	var txtt_the = []
	var txtt_type = []
	var txtt_loca = []
	var txtt_brand = []
	var txtt_price = []

	var num_the = 0
	var num_type = 0
	var num_loca = 0
	var num_brand = 0

	var numm_the = 0
	var numm_type = 0
	var numm_loca = 0
	var numm_brand = 0

	var clearAll = ""

	first_load()
	function first_load(){
		pro_the.delete(null)
		pro_type.delete(null)
		pro_loca.delete(null)
		pro_pro.delete(null)
		filt_the.delete(null)
		filt_type.delete(null)
		filt_loca.delete(null)
		filt_pro.delete(null)

		for(let i of document.getElementsByClassName("popup-filter")){
			// i.children[0].children[0].checked
			if (pro_type.has(i.children[0].getAttribute("name")) || pro_loca.has(i.children[0].getAttribute("name")) || pro_pro.has(i.children[0].getAttribute("name")) || pro_the.has(i.children[0].getAttribute("name"))) {
				// xconsolex.log(i.children[0].getAttribute("name"))
				i.children[0].children[0].checked = true;
				i.style.border = "1px solid "+ver400
				i.style.backgroundColor = ver900
			}
		}
		if (id_price != "") {
			txt_price = "ไม่เกิน " + id_price + " ล้านบาท"
			let rati = document.getElementsByClassName("ratio-box-inner");
			rati[parseInt(id_price)-1].style.opacity = "1"
		}

		check_chk('first', -1)
	}

	function check_chk(ele, num){
		if(ele == "clear"){
			pro_the.clear()
			pro_type.clear()
			pro_loca.clear()
			pro_pro.clear()

			txt_the = "ประเภทที่อยู่อาศัย"
			txt_type = "สถานะโครงการ"
			txt_loca = "ทำเล"
			txt_brand = "แบรนด์"
			txt_price = "ช่วงราคา"

			filt_the = new Set()
			filt_type = new Set()
			filt_loca = new Set()
			filt_pro = new Set()

			id_the = ""
			id_type = ""
			id_loca = ""
			id_brand = ""
			id_price = ""

			txtt_the = []
			txtt_type = []
			txtt_loca = []
			txtt_brand = []
			txtt_price = []

			clearAll = document.getElementsByClassName("popup-filter")
			for (var i of clearAll) {
				i.children[0].children[0].checked = false;
				check_chk(i, 999);
			}
			let rati = document.getElementsByClassName("ratio-box-inner");
			for(let z of rati){
				z.style.opacity = 0;
			}
			clearAll = ""
			sort_info();
		}
		else if(num == 3){
			txt_price = ele.children[0].getAttribute("name")
			txtt_price = txt_price
			id_price = ele.children[0].getAttribute("price")
		}
		else if(num == 33){
			txt_price = "ช่วงราคา"
			txtt_price = txt_price
			id_price = ""
		}
		else if(num == -1){

		}
		else if(ele.children[0].children[0].checked == true){
			ele.style.border = "1px solid "+ver400
			ele.style.backgroundColor = ver900
			switch (num) {
				case 0:
				pro_type.add(ele.children[0].getAttribute("name"))
				filt_type.add(ele.children[0].getAttribute("termID"))
				break;
				case 1:
				pro_loca.add(ele.children[0].getAttribute("name"))
				filt_loca.add(ele.children[0].getAttribute("termID"))
				break;
				case 2:
				pro_pro.add(ele.children[0].getAttribute("name"))
				filt_pro.add(ele.children[0].getAttribute("termID"))
				break;
				case 4:
				pro_the.add(ele.children[0].getAttribute("name"))
				filt_the.add(ele.children[0].getAttribute("termID"))
				break;
			}
		}
		else{
			ele.style.border = "1px solid "+blue800
			ele.style.backgroundColor = "white"
			switch (num) {
				case 0:
				pro_type.delete(ele.children[0].getAttribute("name"))
				filt_type.delete(ele.children[0].getAttribute("termID"))
				break;
				case 1:
				pro_loca.delete(ele.children[0].getAttribute("name"))
				filt_loca.delete(ele.children[0].getAttribute("termID"))
				break;
				case 2:
				pro_pro.delete(ele.children[0].getAttribute("name"))
				filt_pro.delete(ele.children[0].getAttribute("termID"))
				break;
				case 4:
				pro_the.delete(ele.children[0].getAttribute("name"))
				filt_the.delete(ele.children[0].getAttribute("termID"))
				break;
			}
		}
		if(ele != "clear"){
			txt_the = ""
			txt_type = ""
			txt_loca = ""
			txt_brand = ""

			id_the = ""
			id_type = ""
			id_loca = ""
			id_brand = ""

			txtt_the = []
			txtt_type = []
			txtt_loca = []
			txtt_brand = []
			txtt_price = []

			num_the = 0
			num_type = 0
			num_loca = 0
			num_brand = 0

			numm_the = 0
			numm_type = 0
			numm_loca = 0
			numm_brand = 0

			pro_the.forEach (function(value) {
				if(num_the == 0){
					txt_the += value;
				}
				else{
					txt_the += ", " + value;
				}
				txtt_the.push(value)
				num_the++;
			})
			pro_type.forEach (function(value) {
				if(num_type == 0){
					txt_type += value;
				}
				else{
					txt_type += ", " + value;
				}
				txtt_type.push(value)
				num_type++;
			})
			pro_loca.forEach (function(value) {
				if(num_loca == 0){
					txt_loca += value;
				}
				else{
					txt_loca += ", " + value;
				}
				txtt_loca.push(value)
				num_loca++;
			})
			pro_pro.forEach (function(value) {
				if(num_brand == 0){
					txt_brand += value;
				}
				else{
					txt_brand += ", " + value;
				}
				txtt_brand.push(value)
				num_brand++;
			})
			filt_the.forEach (function(value) {
				if(numm_the == 0){
					id_the += value;
				}
				else{
					id_the += "," + value;
				}
				numm_the++;
			})
			filt_type.forEach (function(value) {
				if(numm_type == 0){
					id_type += value;
				}
				else{
					id_type += "," + value;
				}
				numm_type++;
			})
			filt_loca.forEach (function(value) {
				if(numm_loca == 0){
					id_loca += value;
				}
				else{
					id_loca += "," + value;
				}
				numm_loca++;
			})
			filt_pro.forEach (function(value) {
				if(numm_brand == 0){
					id_brand += value;
				}
				else{
					id_brand += "," + value;
				}
				numm_brand++;
			})
			if (txt_the == "") {txt_the = "ประเภทที่อยู่อาศัย";}
			else{
				txt_the = `
				<div class="grid grid-rows-2">
				<div class="row-span-1" style="font-weight:700;font-size:18px;line-height:20px">
				ประเภทที่อยู่อาศัย
				</div>
				<div class="row-span-1" style="font-weight:400;font-size:26px;line-height:22px">
				เลือกแล้ว `+ pro_the.size +` ประเภท
				</div>
				</div>
				`
			}
			if (txt_type == "") {txt_type = "สถานะโครงการ";}
			else{
				txt_type = `
				<div class="grid grid-rows-2">
				<div class="row-span-1" style="font-weight:700;font-size:18px;line-height:20px">
				สถานะโครงการ
				</div>
				<div class="row-span-1" style="font-weight:400;font-size:26px;line-height:22px">
				เลือกแล้ว `+ pro_type.size +` ประเภท
				</div>
				</div>
				`
			}
			if (txt_loca == "") {txt_loca = "ทำเล";}
			else{
				txt_loca = `
				<div class="grid grid-rows-2">
				<div class="row-span-1" style="font-weight:700;font-size:18px;line-height:20px">
				ทำเล
				</div>
				<div class="row-span-1" style="font-weight:400;font-size:26px;line-height:22px">
				เลือกแล้ว `+ pro_loca.size +` ทำเล
				</div>
				</div>
				`
			}
			if (txt_brand == "") {txt_brand = "แบรนด์";}
			else{
				txt_brand = `
				<div class="grid grid-rows-2">
				<div class="row-span-1" style="font-weight:700;font-size:18px;line-height:20px">
				แบรนด์
				</div>
				<div class="row-span-1" style="font-weight:400;font-size:26px;line-height:22px">
				เลือกแล้ว `+ pro_pro.size +` แบรนด์
				</div>
				</div>
				`
			}
			if(num == 3){
				txt_price = ele.children[0].getAttribute("name")
				txtt_price = txt_price
				id_price = ele.children[0].getAttribute("price")
				let rati = document.getElementsByClassName("ratio-box-inner");
				for(let z of rati){
					z.style.opacity = 0;
				}
				ele.children[1].children[0].style.opacity = 1;
			}
			else if(num == 33){
				txt_price = "ช่วงราคา"
				txtt_price = txt_price
				id_price = ""
				let rati = document.getElementsByClassName("ratio-box-inner");
				for(let z of rati){
					z.style.opacity = 0;
				}
			}
		}
		document.getElementById("the_pro").innerHTML = txt_the;
		document.getElementById("type_pro").innerHTML = txt_type;
		document.getElementById("lo_pro").innerHTML = txt_loca;
		document.getElementById("brand_pro").innerHTML = txt_brand;
		document.getElementById("price_pro").innerHTML = txt_price;

		document.getElementById("the_pro_mini").innerHTML = txt_the;
		document.getElementById("stat_pro_mini").innerHTML = txt_type;
		document.getElementById("loca_pro_mini").innerHTML = txt_loca;
		document.getElementById("brand_pro_mini").innerHTML = txt_brand;
		document.getElementById("cost_pro_mini").innerHTML = txt_price;

		var text_the = ""
		var text_type = ""
		var text_loca = ""
		var text_price = ""
		var text_brand = ""


		if(txtt_the.length != 0) {
			for (var i = 0; i < txtt_the.length ; i++) {
				if (i == 0) {text_the += `<div class='txt-selected'>ประเภทที่อยู่อาศัย:</div>`}
					text_the += `
				<div class="flex inline-flex items-center popup-select" onclick="close_pop_select(this)">
				<label class="">`+txtt_the[i]+`
				</label>
				<img src="/wp-content/uploads/2023/01/x-1.png" class="pointer" style="margin-bottom:0;margin-left:0.5rem;width:16px;height:16px;" >
				</div>
				`
			}
			clearAll += text_the;
		}
		if(txtt_loca.length != 0) {
			if(txtt_the.length != 0){text_loca += `<div class="filter-bet-line"></div>`};
			for (var i = 0; i < txtt_loca.length ; i++) {
				if (i == 0) {text_loca += `<div class='txt-selected'>ทำเล:</div>`}
					text_loca += `
				<div class="flex inline-flex items-center popup-select" onclick="close_pop_select(this)">
				<label class="">`+txtt_loca[i]+`
				</label>
				<img src="/wp-content/uploads/2023/01/x-1.png" class="pointer" style="margin-bottom:0;margin-left:0.5rem;width:16px;height:16px;" >
				</div>
				`
			}
			clearAll += text_loca;
		}

		if(txtt_brand.length != 0) {
			if(txtt_loca.length != 0 || txtt_the.length != 0){text_brand += `<div class="filter-bet-line"></div>`};
			for (var i = 0; i < txtt_brand.length ; i++) {
				if (i == 0) {text_brand += `<div class='txt-selected'>แบรนด์:</div>`}
					text_brand += `
				<div class="flex inline-flex items-center popup-select" onclick="close_pop_select(this)">
				<label class="">`+txtt_brand[i]+`
				</label>
				<img src="/wp-content/uploads/2023/01/x-1.png" class="pointer" style="margin-bottom:0;margin-left:0.5rem;width:16px;height:16px;" >
				</div>
				`
			}
			clearAll += text_brand;
		}
		if(txt_price != "ช่วงราคา") {
			if(txtt_loca.length != 0 || txtt_brand.length != 0 || txtt_the.length != 0){text_price += `<div class="filter-bet-line"></div>`};
			text_price += `<div class='txt-selected'>ช่วงราคา:</div>`
			text_price += `
			<div class="flex inline-flex items-center popup-select" onclick="close_pop_select(this)">
			<label class="">`+txt_price+`
			</label>
			<img src="/wp-content/uploads/2023/01/x-1.png" class="pointer" style="margin-bottom:0;margin-left:0.5rem;width:16px;height:16px;" >
			</div>
			`

			clearAll += text_price;
		}
		if(txtt_type.length != 0) {
			if(txtt_loca.length != 0 || txtt_brand.length != 0 || txt_price != "ช่วงราคา" || txtt_the.length != 0){text_type += `<div class="filter-bet-line"></div>`};
			for (var i = 0; i < txtt_type.length ; i++) {
				if (i == 0) {text_type += `<div class='txt-selected'>สถานะโครงการ:</div>`}
					text_type += `
				<div class="flex inline-flex items-center popup-select" onclick="close_pop_select(this)">
				<label class="">`+txtt_type[i]+`
				</label>
				<img src="/wp-content/uploads/2023/01/x-1.png" class="pointer" style="margin-bottom:0;margin-left:0.5rem;width:16px;height:16px;" >
				</div>
				`
			}
			clearAll += text_type;
		}
		if (clearAll == "") {
			document.getElementById("filter-select").style.display = "none";
		}
		else{
			document.getElementById("filter-select").style.display = "block";
		}
		document.getElementById("filter-selected").innerHTML = clearAll;
		clearAll = "";

		let new_price_min = 2
		let new_price_max = 999

		var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + "?type=" +id_type + "&location=" + id_loca + "&brand=" +id_brand + "&price_min=" + new_price_min + "&price_max=" + new_price_max + "&status=" + id_the;
		window.history.pushState({ path: refresh }, '', refresh);
	}
	function close_pop_select(ele){
		let chk = document.getElementsByClassName("popup-filter")
		for (var i of chk) {
			if(i.children[0].children[0].name == ele.children[0].innerHTML.trim()){
				i.children[0].children[0].checked = false;
				check_chk(i, parseInt(i.getAttribute('num')))
				sort_info()
			}
		}
		let chk1 = document.getElementsByClassName("popup-filter-price")
		if (ele.children[0].innerHTML.trim().includes("ไม่เกิน")) {
			for (var i of chk1) {
				if(i.children[0].getAttribute('name') == ele.children[0].innerHTML.trim()){
					check_chk(i, 33)
					sort_info()
				}
			}
		}
	}
</script>

<!--=== The Section Boxes : header ===-->
<style type="text/css">
.site{
	min-height: unset;
}
/* NEW */
.card-project{
	will-change: transform, opacity;
	transition: transform .5s calc(var(--x) * .2s),opacity .5s calc(var(--x) * .2s);
	transform: translateY(100px);
	opacity: 0;
	box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
}
.card-project[data-x="-1"]{
	transition: none;
}
.card-project[data-show="1"]{
	opacity: 1;
	transform: translateY(0px);
}

.card-img .bg-cover{
	transform: scale(1);
	transition: all .8s;
}
.card-img:hover .bg-cover{
	transform: scale(1.15);
	transition: all .8s;
}
.project-card{
}
.project-card-image{
	overflow: hidden;
	transition: .5s;
}
.project-card-logo{
	width: auto;
	height:50px;
	margin-right: 10px;
}
.project-card:hover .project-card-image{
	background-size: 115% 115%;
}
.project-card-icon{
	filter: brightness(0) invert(1);
	height:1rem;
	margin:0;
	margin-right: 5px;
}
.project-card-info-2{
	text-align: right;
	font-weight: 400;
	font-size: 17px;
	line-height: 20px;
	color: white;
}
.project-card-info-2 .-mobile{
	display: none;
}
.txt-price{
	font-size: 32px;
}
.box-fil-date{
	border: 1px solid var(--ci-grey-800);
	border-radius: 8px;
	background-color: white;
	color: var(--ci-grey-100);
	padding: 10px 16px;
	display: flex;
	flex-direction: row;
	align-items: center;
}
.box-fil-date .-arrow{
	height: .5rem;
	margin-left: 40px;
	transition: .5s;
}
.box-fil-date .-choise{
	position: absolute;
	top: 52px;
	left: 0;
	z-index: 10;
	width: 100%;
	background-color: white;
	padding: 16px 0px;
	color: var(--ci-grey-100);
	border-radius: 8px;
	border: 1px solid var(--ci-grey-800);
	display: none;
}
.box-fil-date .-choise div{
	padding:8px 16px;
}
.-choise-1, .-choise-2, .-choise-3, .-choise-4{
	transition: .5s;
}
.-choise-1:hover, .-choise-2:hover, .-choise-3:hover, .-choise-4:hover{
	background-color: var(--ci-blue-900);
}
@media (max-width: 767px) {
	.project-card-logo{
		/*			height: 35px;*/
		margin: 0px;
		margin-left: 16px;
		margin-bottom: 8px;
	}
	.project-card-info-1{
		bottom: 31%;
		left: calc(50% + 16px);
		color: var(--ci-grey-200);
	}
	.project-card-info-1 div{
		margin-top: 0 !important;
	}
	.project-card-icon{
		filter: brightness(0) invert(0);
		margin-right: 12px;
	}
	.project-card-icon.-condo{
		filter: brightness(0.9) invert(0) !important;
	}
	.project-card-info-2{
		text-align: left;
		bottom: 4px;
		right: unset;
		left: calc(50% + 16px);
		font-size: 20px;
		line-height: 28px;
		color: var(--ci-grey-200);
	}
	.project-card-info-2 .-desktop{
		display: none;
	}
	.project-card-info-2 .-mobile{
		display: block;
	}
	.box-fil-date{
		width: 100%;
	}
	.box-fil-date .-arrow{
		margin-right: 0;
		margin-left: auto;
	}
}
@media (max-width: 640px) {
	.project-card-info-1{
		bottom: 36%;
	}
	.project-card-info-2{
		bottom: 12px;
	}
	.txt-price{
		line-height: 40px;
	}
	.project-card-logo{
		height: 55px;
		margin-bottom: 16px;
	}
}
@media (max-width: 490px) {
	.project-card-logo{
		height: 40px;
		margin: 0px;
		margin-left: 16px;
		margin-bottom: 8px;
	}
}
@media (max-width: 768px){
	#condo-info{
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}
}
@media (max-width: 640px){
	#condo-info{
		grid-template-columns: repeat(1, minmax(0, 1fr));
	}
}
html, body{
	overflow: visible;
}
.sortby-box{
	display: none;
}
#sortby-box-wrap[data-sorttype="date"][data-sortby="1"] .sortby-box[data-sorttype="date"][data-sortby="1"],
#sortby-box-wrap[data-sorttype="date"][data-sortby="-1"] .sortby-box[data-sorttype="date"][data-sortby="-1"],
#sortby-box-wrap[data-sorttype="price"][data-sortby="-1"] .sortby-box[data-sorttype="price"][data-sortby="-1"],
#sortby-box-wrap[data-sorttype="price"][data-sortby="1"] .sortby-box[data-sorttype="price"][data-sortby="1"]{
	display: block;
}
#condo-info{
	--sortby:-1;
}
#condo-info[data-sortby="1"]{
	--sortby:1;
}
</style>
<script type="text/javascript">
	var turn_tog = -1;
	function turnon_sorting(){
		let choise = document.querySelector('.-choise')
		let arr = document.querySelector('.-arrow')
		turn_tog *= -1
		if (turn_tog == 1) {
			choise.style.display = "block"
			arr.style.transform = "rotate(-180deg)"
		}
		else{
			choise.style.display = "none"
			arr.style.transform = "rotate(-0deg)"
		}
	}
	function sorting_project(num){
		let cards = document.querySelectorAll('.project-card')
		for(let i of cards){
			i.style.setProperty('--i',i.dataset.date)
		}
		document.querySelector('#sortby-box-wrap').dataset.sortby = num
		document.querySelector('#sortby-box-wrap').dataset.sorttype = 'date'
		document.querySelector('#condo-info').dataset.sortby = num
		restartSort();
	}
	function sorting_price(num){
		let cards = document.querySelectorAll('.project-card')
		for(let i of cards){
			i.style.setProperty('--i',i.dataset.price)
		}
		document.querySelector('#sortby-box-wrap').dataset.sortby = num
		document.querySelector('#sortby-box-wrap').dataset.sorttype = 'price'
		document.querySelector('#condo-info').dataset.sortby = num
		restartSort();
	}

	document.addEventListener("click", (evt) => {
		let sort_box = document.getElementById("sortby-box-wrap")
		let choise = document.querySelector('.-choise')
		let arr = document.querySelector('.-arrow')
		let targetEl = evt.target;  
		do {
			if(targetEl == sort_box) {
				return;
			}
			if(targetEl == filter_the ||targetEl == filter_type || targetEl == filter_location || targetEl == filter_project || targetEl == filter_cost || targetEl == filter_0 || targetEl == filter_1 || targetEl == filter_2 || targetEl == filter_3 || targetEl == filter_4){
				return;
			}
			targetEl = targetEl.parentNode;
		} while (targetEl);
		filter_pop(999, 'clear')
		turn_tog = -1
		choise.style.display = "none"
		arr.style.transform = "rotate(-0deg)"
	});

	window.addEventListener('scroll', () => {
		document.body.style.setProperty('--scroll',window.pageYOffset / (document.body.offsetHeight - 
			window.innerHeight));
	}, false);
	window.onscroll = function() {scrollFunction()};
	function scrollFunction(){
		let choise = document.querySelector('.-choise')
		let arr = document.querySelector('.-arrow')
		if(document.documentElement.scrollTop == 0){
			turn_tog = -1
			choise.style.display = "none"
			arr.style.transform = "rotate(-0deg)"
		}
		else if(window.innerWidth >= 1169 && document.documentElement.scrollTop > 800){
			turn_tog = -1
			choise.style.display = "none"
			arr.style.transform = "rotate(-0deg)"
		}
		else if(window.innerWidth > 769 && window.innerWidth < 1169 && document.documentElement.scrollTop > 750){
			turn_tog = -1
			choise.style.display = "none"
			arr.style.transform = "rotate(-0deg)"
		}
		else if(window.innerWidth > 468 && window.innerWidth <= 769 && document.documentElement.scrollTop > 710){
			turn_tog = -1
			choise.style.display = "none"
			arr.style.transform = "rotate(-0deg)"
		}
		else if(window.innerWidth <= 468 && document.documentElement.scrollTop > 800){
			turn_tog = -1
			choise.style.display = "none"
			arr.style.transform = "rotate(-0deg)"
		}
	}
</script>
<section id="header" class="padding-l-vtc" style="background: linear-gradient(180deg, #EDF2F7 -4.71%, #FFFFFF 164.99%);">
	<div class="cont-pd">
		<?php 
		$args = array(
			'post_type' => ['condominium','house'],
			'post_status' => 'publish',
			'posts_per_page' => 100, 
			'orderby' => 'date', 
			'order' => 'DESC',
			'post_parent' => 0,
		);
		$loop = new WP_Query( $args );

		$terms = get_terms( array(
			'taxonomy' => 'project-type',
			'hide_empty' => false,
		) );
		$count_num = 0;
		foreach ($terms as $key => $value) {
			if ($value->parent == 0) {
				$count_num += $value->count;
			}
		}

		?>
		<div class="grid grid-rows-2 md:grid-rows-1 md:grid-cols-2 flex items-center">
			<div class="row-span-1 md:col-span-1">
				<h5 class="f30-28 cl-ci-grey-100"><span id="tit-con">โครงการแนะนำจากแอสเซทไวส์ </span><span id="num-con" class="cl-ci-grey-400">- <?=$count_num?> รายการ</span></h5>
			</div>
			<div class="row-span-1 md:col-span-1 flex justify-end">
				<div  id="sortby-box-wrap" class="box-fil-date pointer relative" data-sortby="-1" data-sorttype="date" onclick="turnon_sorting()">
					<span class="sortby-box" data-sortby="-1" data-sorttype="date">
						เรียงตามโครงการใหม่ <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> เก่า
					</span>
					<span class="sortby-box" data-sortby="1" data-sorttype="date">
						เรียงตามโครงการเก่า <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> ใหม่
					</span>
					<span class="sortby-box" data-sortby="1" data-sorttype="price">
						เรียงตามราคาเริ่มต้นสูง <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> ต่ำ
					</span>
					<span class="sortby-box" data-sortby="-1" data-sorttype="price">
						เรียงตามราคาเริ่มต้นต่ำ <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> สูง
					</span>
					<img src="/wp-content/uploads/2022/10/Vector.png" class="-arrow">
					<div class="-choise">
						<!-- <div class="-choise-1" onclick="sorting_project(-1)">
							เรียงตามโครงการใหม่ <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> เก่า
						</div>

						<div class="-choise-2" onclick="sorting_project(1)">
							เรียงตามโครงการเก่า <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> ใหม่
						</div> -->

						<div class="-choise-3" onclick="sorting_price(1)">
							เรียงตามราคาเริ่มต้นสูง <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> ต่ำ
						</div>

						<div class="-choise-4" onclick="sorting_price(-1)">
							เรียงตามราคาเริ่มต้นต่ำ <img src="/wp-content/uploads/2022/10/Vector.png" style="height: .3rem;transform:rotate(-90deg);display: inline-block;"> สูง
						</div>
					</div>
				</div>
			</div>
		</div>
		<sp class="vl"></sp>
		<div id="condo-info" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8" data-sortby="-1">
			<?php
			$order = 0;
			while ( $loop->have_posts() ) : $loop->the_post(); {
				$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$cate_name = wp_get_object_terms( $post->ID, 'project-type');
				foreach ($cate_name as $pjt_k => $pjt_v) {
					if ($pjt_v->parent == 0) {
						$cate_parent = $pjt_v;
					}else{
						$cate_brand = $pjt_v;
					}
				}
				$loca_name = wp_get_object_terms( $post->ID, 'project_location');
				foreach ($loca_name as $pjt_k => $pjt_v) {
					if ($pjt_v->parent == 0) {
						$loca_parent = $pjt_v;
					}else{
						$loca_child = $pjt_v;
					}
				}
				
				$stat_name = wp_get_object_terms( $post->ID, 'project_status');
				$cate_icon = get_field('icon','project-type' . '_' . $cate_parent->term_id);
				$stat_color = get_field('color','project_status' . '_' . $stat_name[0]->term_id);
				$stat_label = get_field('label','project_status' . '_' . $stat_name[0]->term_id);
				$price = get_field('price');
				$order++;
				$pj_price = $price;
				if ($pj_price == '') {
					$pj_price = 0;
				}
				$pj_price = $pj_price*100;
				$logo = get_field('logo')['sizes']['large'];
				?>
				<div id="" the="<?=$cate_parent->name?>" cate="<?=$cate_brand->name?>" data-price="<?=$pj_price?>" data-date="<?=$order?>" loca="<?=$loca_child->name?>" type="<?=$stat_label?>" class="col-span-1 project-card card-img" style="--i:<?=$order?>;order:calc( var(--i) * var(--sortby) * -1);display: grid;">
					<a href="<?=get_the_permalink()?>" class="">
						<div class="card-project relative pointer grid grid-cols-2 md:block" data-show="0" data-x="null">
							<div class="py-4 col-start-2 col-span-1" style="padding-right: 12px;background-color: white;">
								<div class="grid grid-rows-2 md:grid-rows-1 md:grid-cols-2">
									<div class="row-span-1 md:col-span-1 pl-4 flex items-center" style="color: <?= $stat_color ?>;border-left: 4px solid <?= $stat_color ?>;">
										<span class="" style="font-weight: 700;font-size: 18px;line-height: 20px;"><?=$stat_name[0]->name?></span>
									</div>
									<div class="row-start-1 row-span-1 md:col-start-2 md:col-span-1">
										<img src="<?= $logo?>" class="project-card-logo">
									</div>
								</div>
							</div>
							<div class="overflow-hidden row-start-1 col-span-1">
								<div class="bg-cover blank project-card-image" ratio="2:3" style="background-image:linear-gradient(0deg, #000c,#0008,#0001, transparent,transparent,transparent),url('<?php echo get_the_post_thumbnail_url($post->ID, '2048x2048') ?>');">
								</div>
							</div>
							<div class="bottom-left project-card-info-1">
								<div class="flex flex-row items-center" class="f22-20">
									<img src="<?=$cate_icon['url']?>" class="project-card-icon -condo"><?=$cate_parent->name?>
								</div>
								<div class="flex flex-row items-center" class="f22-20" style="margin-top: 6px;">
									<img src="/wp-content/uploads/2022/10/Icon-in-input-1.png" class="project-card-icon -loca"><?=$loca_child->name?>
								</div>
							</div>
							<div class="bottom-right project-card-info-2">
								<div class="-desktop">
									เริ่มต้น
									<div class="txt-price"><?=$price?></div>
									ล้านบาท
								</div>
								<div class="-mobile">
									<div>เริ่มต้น</div>
									<span class="txt-price" style="margin-right: 9px;"><?=$price?></span>ล้านบาท
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php
			}
		endwhile;

		wp_reset_postdata();
		?>
	</div>
	<div id="notfound" class="flex flex-col justify-center items-center hidden">
		<sp class="rem-5"></sp>
		<img src="/wp-content/uploads/2022/12/Group-937.png" style="margin-bottom: 30px;">
		<h5 class="f30-28" style="font-weight: 500;margin-bottom: 12px;text-align: center;">ไม่พบโครงการที่คุณต้องการ?</h5>
		<p style="margin-bottom: 26px;text-align: center;">ลองปรับรายละเอียดการค้นหา หรือลบตัวกรองและลองใหม่อีกครั้ง</p>
		<button style="border-radius: 8px;color: white;background-color: var(--ci-blue-300);padding:8px 24px;" onclick="filter_pop(999, this);check_chk('clear', 999)">
			<h6>ล้างทั้งหมด</h6>
		</button>
		<sp class="rem-6"></sp>
	</div>
	<sp style="height: 52px;" ></sp>
</div>
</section>

<script>
	function conscroll(num) {
		const left = document.querySelector(".scroll-condo");
		left.scrollBy(num, 0);
	}

	function onMouseOver(event) {
		this.style.outlineWidth = "2px"
		this.children[0].style.filter = "grayscale(0%)"
	}
	function onMouseOut(event) {
		this.style.outlineWidth = "1px"
		this.children[0].style.filter = "grayscale(100%)"
	}
	for (let e of document.getElementsByClassName('graylogo')) {
		e.addEventListener('mouseover',onMouseOver,true);
		e.addEventListener('mouseout',onMouseOut,true);
	}

	let card_arr_x = []
	function scrollCard(){
		card_arr_x = []
		let h = window.innerHeight
		let cards = document.querySelectorAll('.card-project')
		let offset = 200
		let delay = 0
		let chktop = 0
		
		for(let i of cards){
			let react = i.getBoundingClientRect()
			if (card_arr_x.indexOf(react.x) == -1) {
				card_arr_x.push(react.x)
			}
		}
		// xconsolex.log(card_arr_x)
		card_arr_x = card_arr_x.sort(function (a, b) {  return a - b;  })
		let index = card_arr_x.indexOf(0);
		if (index !== -1) {
			card_arr_x.splice(index, 1);
		}
		for(let i of cards){
			let react = i.getBoundingClientRect()
			let point = react.y-h+offset
			i.dataset.x = card_arr_x.indexOf(react.x)
			i.style.setProperty('--x',i.dataset.x)
			if (point<0) {
				i.dataset.show = 1
			}
		}
	}
	function restartSort(){
		let cards = document.querySelectorAll('.card-project')
		for(let i of cards){
			i.dataset.show = 0
			i.dataset.x = -1
		}
		scrollCard()
	}

	sort_info()
	window.onscroll = ()=>{
		scrollCard()
	}
	scrollCard()
</script>


<script type="text/javascript">
	function filter_pop_price(el){
		el.dataset.open *= -1
		filter_cost.dataset.open = el.dataset.open
	}
	function filter_price_select(el){
		let min = el.dataset.priceMin
		let max = el.dataset.priceMax
		if (max == '') {
			max = 999
		}
		if (min == '') {
			min = 0
		}
		document.querySelector('#filter_3').dataset.priceMin = min
		document.querySelector('#filter_3').dataset.priceMax = max
		document.querySelector('#filter_3').click()
		document.querySelector('#price_pro').innerHTML = el.innerText
		sort_info()
	}
</script>
<?php get_footer();?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="en-US" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="vi"/>
    <meta name="description" content="<?php echo $__env->yieldContent('site_description'); ?>"/>
    <meta name="keywords" content="<?php echo $__env->yieldContent('site_keywords'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <meta name="google-site-verification" content="" />
    <meta name="wot-verification" content="b5ae556432dab929c4bb"/>
    <meta property="article:author" content="https://www.facebook.com/"/>
    <link rel="shortcut icon" href="<?php echo $__env->yieldContent('favicon'); ?>" type="image/x-icon"/>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:site_name" content="" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>" /> 
    <meta name="norton-safeweb-site-verification" content="-1t675c2tm6yc1iiisvmazxhwlu4chr547-91-psjr5jge1rf9ph4c2cwzyh5h0ua5w0ev8pbkf" />       
    <meta name="wot-verification" content="bcbd535ff2ff0c0067e0"/>
    <meta name="twitter:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
	<link rel="icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>" type="image/x-icon">
	<!-- ===== Style CSS Common ===== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/style.css')); ?>">
	<!-- ===== Responsive CSS ===== -->
    <link href="<?php echo e(URL::asset('assets/css/responsive.css')); ?>" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo e(URL::asset('backend/dist/css/sweetalert2.min.css')); ?>">  
    
    <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='<?php echo e(URL::asset('assets/css/animations-ie-fix.css')); ?>' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.<?php echo e(URL::asset('assets/js/1.4.2/respond.min.js')); ?>"></script>
	<![endif]-->	
	<header id="header" class="header">
	
		<div class="header-logo">
	        <div class="container">
	            <div class="logo">
	                <a href="<?php echo e(route('home')); ?>" title="Logo">
	                	<img src="<?php echo e(Helper::showImage($settingArr['logo'])); ?>" alt="Logo">	                   
	                </a>
	            </div>
	            <?php 
				$bannerArr = DB::table('banner')->where(['object_id' => 4, 'object_type' => 3])->orderBy('display_order', 'asc')->get();
				?>	           
	            <div class="banner_adv" id="Banner_tet" style="display: block;">	
	            <?php $i = 0; ?>
				<?php foreach($bannerArr as $banner): ?>
					<?php $i++; ?>
	                <?php if($banner->ads_url !=''): ?>
					<a href="<?php echo e($banner->ads_url); ?>">
					<?php endif; ?>
	                    <img src="<?php echo e(Helper::showImage($banner->image_url)); ?>" alt="Banner top <?php echo e($i); ?>"></a>

	                 <?php if($banner->ads_url !=''): ?>
					</a>
					<?php endif; ?>

	            <?php endforeach; ?>
	            </div>
	        </div>
	    </div>
	</header><!-- /header -->

	<nav id="mainNav" class="navbar navbar-default navbar-custom fix-header">
        <div class="container" id="main-menu">
        	<!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	              <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
	            </button>
			</div>

			<?php echo $__env->make('frontend.partials.home-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
	</nav><!-- /navigation -->
	<section class="main" id="site-main">
		<section class="container">
			
			<section class="row">
				<?php if( \Request::route()->getName() == 'home'): ?>
				<section style="margin-bottom: 10px !important;">
					<article class="block block-inews block-news-new">
						<div class="block-advisory">
							<div class="col-sm-6 col-xs-12">
								<div class="block-title block-title-common">
									<h3><span class="icon-tile"><i class="fa fa-star"></i></span> GIỚI THIỆU</h3>
								</div>
								<div class="block-content">
									
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									
								</div>
							</div>
						</div>
						<div class="block-architectural">
							<div class="col-sm-6 col-xs-12">
								<div class="block-title block-title-common">
									<h3><span class="icon-tile2"><img src="<?php echo e(URL::asset('assets/images/icon-tkkt.png')); ?>" alt="VIDEO CLIP"></span> Hình ảnh</h3>
								</div>
								<div class="block-contents">
									<?php 
										if(!isset($project_id)){
											$bannerArr = DB::table('banner')->where(['object_id' => 1, 'object_type' => 3])->orderBy('display_order', 'asc')->get();
										}else{
											if($tab_id == 1){
												$bannerArr =  DB::table('banner')->where(['object_id' => $project_id, 'object_type' => 4])->orderBy('display_order', 'asc')->get();
											}else{
												$bannerArr = (object)[];
											}
											
										}

										?>										
										<?php if($bannerArr): ?>
										<div class="block-slider-home">
														<div class="owl-carousel dotsData owl-style2" data-nav="false" data-margin="0" data-items='1' data-autoplayTimeout="500" data-autoplay="true" data-loop="true">
															<?php $i = 0; ?>
															<?php foreach($bannerArr as $banner): ?>
															 <?php $i++; ?>
															<div class="item-slide" data-dot="<?php echo e($i); ?>">
																<?php if($banner->ads_url !=''): ?>
																<a href="<?php echo e($banner->ads_url); ?>">
																<?php endif; ?>
																	<img src="<?php echo e(Helper::showImage($banner->image_url)); ?>" alt="slide <?php echo e($i); ?>">
																<?php if($banner->ads_url !=''): ?>
																</a>
																<?php endif; ?>
															</div><!-- item-slide1 -->
															<?php endforeach; ?>							
														</div>
													</div>
										<?php endif; ?>
								</div>
							</div>
						</div>
					</article><!-- /block-inews -->
				</section>
				<div class="clearfix"></div>
				<section style="padding: 0 10px;margin: 10px 0" >
					<a href="">
						<img src="<?php echo e(URL::asset('assets/images/banner-1.jpg')); ?>" class="img-responsive" alt="banner" width="100%">
					</a>
				</section>
				<section style="margin-bottom: 10px !important;">
					<article class="block block-inews block-news-new">
						<div class="block-advisory">
							<div class="col-sm-9 col-xs-12">
								<article class="block block-news-new clearfix">
								    <div class="col-sm-12 col-xs-12">      
								        <div class="row">
								          <ul class="nav nav-tabs" role="tablist">
								            <li role="presentation" class="active">
								              <a href="#trmn1" aria-controls="trmn1" role="tab" data-toggle="tab">Tất cả</a>
								            </li>
								            <li role="presentation">
								              <a href="#trmn2" aria-controls="trmn2" role="tab" data-toggle="tab">Căn hộ</a>
								            </li>
								            <li role="presentation">
								              <a href="#trmn3" aria-controls="trmn2" role="tab" data-toggle="tab">Đất nền</a>
								            </li>
								          </ul>
								          
								          <div class="block-contents">
								            <div class="tab-content">
								              <div role="tabpanel" class="tab-pane active" id="trmn1">
								               <div  class="owl-carousel dotsData owl-style2" data-nav="false" data-margin="0" data-items='3' data-autoplayTimeout="500" data-autoplay="true" data-loop="true">
												<?php if($landingList): ?>
													<?php foreach($landingList as $value): ?>
													<div class="large-item" style="padding:10px">
						                                <a href="<?php echo e(route('detail-project', [$value->slug])); ?>" title="<?php echo $value->name; ?>"><img src="<?php echo e($value->image_url ? Helper::showImageThumb($value->image_url, 3, '306x194') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="" /></a>
						                                <h4><a href="<?php echo e(route('detail-project', [$value->slug])); ?>" title="<?php echo $value->name; ?>"><?php echo $value->name; ?></a></h4>
						                                <p><?php echo e($value->address); ?></p>
						                            </div>
						                            <?php endforeach; ?>
						                        <?php endif; ?>
												</div>                      
								              </div><!-- /home -->
								              <div role="tabpanel" class="tab-pane" id="trmn2">
									                <div  class="owl-carousel dotsData owl-style2" data-nav="false" data-margin="0" data-items='3' data-autoplayTimeout="500" data-autoplay="true" data-loop="true">
													<?php if($landingList): ?>
														<?php foreach($landingList as $value): ?>
														<div class="large-item" style="padding:10px">
							                                <a href="<?php echo e(route('detail-project', [$value->slug])); ?>" title="<?php echo $value->name; ?>"><img src="<?php echo e($value->image_url ? Helper::showImageThumb($value->image_url, 3, '306x194') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="" /></a>
							                                <h4><a href="<?php echo e(route('detail-project', [$value->slug])); ?>" title="<?php echo $value->name; ?>"><?php echo $value->name; ?></a></h4>
							                                <p><?php echo e($value->address); ?></p>
							                            </div>
							                            <?php endforeach; ?>
							                        <?php endif; ?>
													</div>         
								              </div><!-- /profile -->
								              <div role="tabpanel" class="tab-pane" id="trmn3">
									                <div  class="owl-carousel dotsData owl-style2" data-nav="false" data-margin="0" data-items='3' data-autoplayTimeout="500" data-autoplay="true" data-loop="true">
													<?php if($landingList): ?>
														<?php foreach($landingList as $value): ?>
														<div class="large-item" style="padding:10px">
							                                <a href="<?php echo e(route('detail-project', [$value->slug])); ?>" title="<?php echo $value->name; ?>"><img src="<?php echo e($value->image_url ? Helper::showImageThumb($value->image_url, 3, '306x194') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="" /></a>
							                                <h4><a href="<?php echo e(route('detail-project', [$value->slug])); ?>" title="<?php echo $value->name; ?>"><?php echo $value->name; ?></a></h4>
							                                <p><?php echo e($value->address); ?></p>
							                            </div>
							                            <?php endforeach; ?>
							                        <?php endif; ?>
													</div>         
								              </div><!-- /profile -->
								            </div>
								          </div>
								        </div>
								    </div>
								  </article><!-- /block-news-new -->
							</div>
						</div>
						<div class="block-architectural">
							<div class="col-sm-3 col-xs-12">								
								<div class="block-contents">
									<div style="margin-bottom: 5px;">
									<a href="">
										<img src="<?php echo e(URL::asset('assets/images/da-ban.jpg')); ?>" class="img-responsive" alt="banner" width="100%">
									</a>
									</div>
									<div>
									<a href="">
										<img src="<?php echo e(URL::asset('assets/images/chua-ban.jpg')); ?>" class="img-responsive" alt="banner" width="100%">
									</a>
									</div>
								</div>
							</div>
						</div>
					</article><!-- /block-inews -->
				</section>
				<?php endif; ?>

				<?php echo $__env->yieldContent('content'); ?>

				<?php if(\Request::route()->getName() != "home" && (!isset($detailPage))): ?>
				<?php echo $__env->make('frontend.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endif; ?>

				
			</section>
		</section>
	</section><!-- /main -->

	

	<?php echo $__env->make('frontend.home.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php if(\Request::route()->getName() != "du-an" && !isset($detailPage)): ?>
	<?php echo $__env->make('frontend.partials.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<?php endif; ?>
       
 	<!-- /.block-call -->
	<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
  		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
	<!-- RETURN TO TOP -->

	<!-- ===== JS ===== -->
	<script src="<?php echo e(URL::asset('assets/js/jquery.min.js')); ?>"></script>
	<!-- JS Bootstrap -->
	<script src="<?php echo e(URL::asset('assets/vendor/bootstrap/bootstrap.min.js')); ?>"></script>
	<!-- ===== JS Bxslider ===== -->
	<script src="<?php echo e(URL::asset('assets/vendor/bxslider/jquery.bxslider.min.js')); ?>"></script>
	<!-- ===== JS Bxslider ===== -->
	<script src="<?php echo e(URL::asset('assets/vendor/owl-carousel/owl.carousel.min.js')); ?>"></script>
	<!-- JS Sticky -->
	<script src="<?php echo e(URL::asset('assets/vendor/sticky/jquery.sticky.js')); ?>"></script>
	<!-- ===== JS Bootstrap Select ===== -->
	<script src="<?php echo e(URL::asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js')); ?>"></script>
	<!-- Js Common -->
	<script src="<?php echo e(URL::asset('backend/dist/js/sweetalert2.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('assets/js/common.js')); ?>"></script>		
	<?php echo $__env->yieldContent('javascript_page'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
		        headers: {
		          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });		    
		    
		    $('.bxslider').bxSlider({
				pagerCustom: '#bx-pager',
				pager: true,
				auto: true,
				pause: 4000
			});
		});
	</script>
</body>
</html>

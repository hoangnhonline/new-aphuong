<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="col-sm-12 col-xs-12 block-sitemain">
    <article class="block block-news-new clearfix">
    <div class="col-sm-12 col-xs-12">      
        <div class="row">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#trmn1" aria-controls="trmn1" role="tab" data-toggle="tab">BĐS BÁN</a>
            </li>
            <li role="presentation">
              <a href="#trmn2" aria-controls="trmn2" role="tab" data-toggle="tab">BĐS CHO THUÊ</a>
            </li>
          </ul>
          
          <div class="block-contents">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="trmn1">
                <ul>                  
                  <?php foreach($hotProduct as $product): ?>
                    <li class="news-new-item">                      
                      <div class="news-new-item-head">
                        <a  href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><img  title="<?php echo e($product->title); ?>" src="<?php echo e($product->image_urls ? Helper::showImageThumb($product->image_urls) : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $product->title; ?>" > 
                        
                        
                      </div>
                      <div class="news-new-item-description">
                        <h4>
                        <a class="description-title vip1" href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><?php if( $product->is_hot == 1 ): ?>
                        <img class="img-hot" src="<?php echo e(URL::asset('backend/dist/img/star.png')); ?>" alt="Nổi bật" title="Nổi bật" />
                        <?php endif; ?> <?php echo $product->title; ?></a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i><label>Mã tin<span>:</span></label><?php echo e($product->id); ?></div>
                              <div class="price"><label>Giá<span>:</span></label><?php echo $product->price; ?> <?php echo e(Helper::getName($product->price_unit_id, 'price_unit')); ?>                                
                                <?php if($product->type == 1): ?>
                                    <?php if($product->cart_status == 1): ?>
                                      <span class="label label-primary">Chưa bán</span>
                                    <?php else: ?>
                                      <span class="label label-danger">Đã bán</span>
                                    <?php endif; ?>              
                                <?php else: ?>
                                    <?php if($product->cart_status == 1): ?>
                                      <span class="label label-primary">Còn trống</span>
                                    <?php else: ?>
                                      <span class="label label-danger">Đã thuê</span>
                                    <?php endif; ?>
                                <?php endif; ?>

                              </div>
                                <div class="area"><label>Diện tích<span>:</span></label><?php echo $product->area; ?> m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label><?php echo Helper::getName($product->district_id, 'district'); ?> - <?php echo Helper::getName($product->city_id, 'city'); ?></div>
                            </div>
                            <span class="date"><?php echo e(date('d/m/Y', strtotime($product->updated_at))); ?></span>
                      </div>
                    </li> 
                    <?php endforeach; ?>   
                 
                </ul>                      
              </div><!-- /home -->
              <div role="tabpanel" class="tab-pane" id="trmn2">
                  <ul>
                  <?php foreach($hotProduct2 as $product): ?>
                    <li class="news-new-item">                      
                      <div class="news-new-item-head">
                        <a  href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><img  title="<?php echo e($product->title); ?>" src="<?php echo e($product->image_urls ? Helper::showImageThumb($product->image_urls) : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $product->title; ?>" >
                        </a>
                        
                      </div>
                      <div class="news-new-item-description">
                        <h4><a class="description-title vip1" href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><?php if( $product->is_hot == 1 ): ?>
                        <img class="img-hot" src="<?php echo e(URL::asset('backend/dist/img/star.png')); ?>" alt="Nổi bật" title="Nổi bật" />
                        <?php endif; ?> <?php echo $product->title; ?></a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i><label>Mã tin<span>:</span></label><?php echo e($product->id); ?></div>
                              <div class="price"><label>Giá<span>:</span></label><?php echo $product->price; ?> <?php echo Helper::getName($product->price_unit_id, 'price_unit'); ?></div>
                                <div class="area"><label>Diện tích<span>:</span></label><?php echo $product->area; ?> m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label><?php echo Helper::getName($product->district_id, 'district'); ?> - <?php echo Helper::getName($product->city_id, 'city'); ?></div>
                            </div>
                            <span class="date"><?php echo e(date('d/m/Y', strtotime($product->updated_at))); ?></span>
                      </div>
                    </li> 
                    <?php endforeach; ?>   
                 
                </ul>        
              </div><!-- /profile -->
            </div>
          </div>
        </div>
    </div>
  </article><!-- /block-news-new -->
</section>
<section style="margin-bottom: 10px !important;">
          <article class="block block-fengshui block-news-new">
           
              <div class="col-sm-6 col-xs-12" style="padding: 5px">
               
                  
                    <div class="block-title block-title-common">
                      <h3><span class="icon-tile2"><img src="<?php echo e(URL::asset('assets/images/icon-living.png')); ?>" alt="Phân Tích Dự Án"> Phân Tích Dự Án</h3>
                    </div>
                    <div class="block-contents">

                      <div class="news-fengshui clearfix">
                       <?php if(isset($khonggiansong[0])): ?>
                        <div class="fengshui-news-hot">
                                <a href="<?php echo e(route('news-detail', ['slug' => $khonggiansong[0]['slug'], 'id' => $khonggiansong[0]['id']])); ?>" title="">
                            <img src="<?php echo e($khonggiansong[0]['image_url'] ? Helper::showImageThumb($khonggiansong[0]['image_url'], 2, '325x200') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $khonggiansong[0]['title']; ?>">
                          </a>    
                                
                                <h4><a href="<?php echo e(route('news-detail', ['slug' => $khonggiansong[0]['slug'], 'id' => $khonggiansong[0]['id']])); ?>" title="<?php echo $khonggiansong[0]['title']; ?>" ><?php echo $khonggiansong[0]['title']; ?></a></h4>
                            </div>
                            <?php endif; ?>
                            <div class="fengshui-news-list">
                              <ul>
                                 <?php $i =0; ?>
                                  <?php foreach($khonggiansong as $tin): ?>
                                  <?php $i++; 
                                  ?>
                                  <?php if($i > 1): ?>
                                  <li><a href="<?php echo e(route('news-detail', ['slug' => $tin['slug'], 'id' => $tin['id']])); ?>" title="<?php echo $tin['title']; ?>"><?php echo $tin['title']; ?></a></li>
                                  <?php endif; ?>
                                  <?php endforeach; ?>
                              </ul>
                            </div>
                      </div>
                    </div>
             
      
              </div>
            
            
              <div class="col-sm-6 col-xs-12" style="padding: 5px">
                
                <div class="block-title block-title-common">
                  <h3><span class="icon-tile2"><img src="<?php echo e(URL::asset('assets/images/icon-tkkt.png')); ?>" alt="Tư vấn thiết kế"> Văn bản</h3>
                </div>
                <div class="block-contents">

                  <div class="news-fengshui clearfix">
                   <?php if(isset($tuvan[0])): ?>
                    <div class="fengshui-news-hot">
                            <a href="<?php echo e(route('news-detail', ['slug' => $tuvan[0]['slug'], 'id' => $tuvan[0]['id']])); ?>" title="<?php echo $tuvan[0]['title']; ?>">
                        <img src="<?php echo e($tuvan[0]['image_url'] ? Helper::showImageThumb($tuvan[0]['image_url'], 2, '325x200') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $tuvan[0]['title']; ?>">
                      </a>    
                            
                            <h4><a href="<?php echo e(route('news-detail', ['slug' => $tuvan[0]['slug'], 'id' => $tuvan[0]['id']])); ?>" title="<?php echo $tuvan[0]['title']; ?>"><?php echo $tuvan[0]['title']; ?></a></h4>
                        </div>
                        <?php endif; ?>
                        <div class="fengshui-news-list">
                          <ul>
                             <?php $i =0; ?>
                              <?php foreach($tuvan as $tin): ?>
                              <?php $i++; 
                              ?>
                              <?php if($i > 1): ?>
                              <li><a href="<?php echo e(route('news-detail', ['slug' => $tin['slug'], 'id' => $tin['id']])); ?>" title="<?php echo $tin['title']; ?>"><?php echo $tin['title']; ?></a></li>
                              <?php endif; ?>
                              <?php endforeach; ?>
                          </ul>
                        </div>
                  </div>
                </div>
           
              </div>
        
          </article><!-- /block-inews -->
          <?php 
$bannerArr = DB::table('banner')->where(['object_id' => 5, 'object_type' => 3])->orderBy('display_order', 'asc')->get();
?>             
<article class="block block-adv-full">
<?php $i = 0; ?>
<?php foreach($bannerArr as $banner): ?>
<?php $i++; ?>
    <?php if($banner->ads_url !=''): ?>
<a href="<?php echo e($banner->ads_url); ?>">
<?php endif; ?>
        <img src="<?php echo e(URL::asset('assets/images/tuyen-dung.jpg')); ?>" alt="Banner qc <?php echo e($i); ?>"></a>

     <?php if($banner->ads_url !=''): ?>
</a>
<?php endif; ?>

<?php endforeach; ?>
  </article>
        </section>
<?php $__env->stopSection(); ?>
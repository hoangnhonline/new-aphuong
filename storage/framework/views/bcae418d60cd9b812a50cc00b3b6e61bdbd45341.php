<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo e(URL::asset('backend/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo e(Auth::user()->full_name); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>     
      <li class="treeview <?php echo e(in_array(\Request::route()->getName(), ['product.index', 'product.create', 'product.edit', 'estate-type.index', 'estate-type.edit', 'estate-type.create', 'cate.index', 'cate.edit', 'cate.create']) ? 'active' : ''); ?>">
        <a href="#">
          <i class="fa fa-opencart"></i> 
          <span>Sản phẩm lẻ</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo e(in_array(\Request::route()->getName(), ['product.index', 'product.edit']) ? "class=active" : ""); ?>><a href="<?php echo e(route('product.index')); ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li <?php echo e(\Request::route()->getName() == "product.create" ? "class=active" : ""); ?>><a href="<?php echo e(route('product.create')); ?>"><i class="fa fa-circle-o"></i> Thêm BĐS</a></li>         
          <?php if(Auth::user()->role > 1): ?>
          <li <?php echo e(in_array(\Request::route()->getName(), ['estate-type.index', 'estate-type.edit', 'estate-type.create']) ? "class=active" : ""); ?>><a href="<?php echo e(route('estate-type.index')); ?>"><i class="fa fa-circle-o"></i> Danh mục</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li <?php echo e(in_array(\Request::route()->getName(), ['pro-content.index', 'pro-content.create', 'pro-content.edit', 'landing-projects.index', 'landing-projects.create', 'landing-projects.edit']) ? "class=active" : ""); ?>>
        <a href="<?php echo e(route('landing-projects.index')); ?>">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Dự án</span>         
        </a>       
      </li>
     
      <?php if(Auth::user()->role > 1): ?>      
      <li <?php echo e((in_array(\Request::route()->getName(), ['custom-link.edit', 'custom-link.index', 'custom-link.create']) && isset($block_id) && $block_id == 1 )? "class=active" : ""); ?>>
        <a href="<?php echo e(route('custom-link.index', ['block_id' => 1 ])); ?>">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Liên kết nổi bật</span>         
        </a>       
      </li>
      <?php endif; ?>
      
      <li class="treeview <?php echo e(in_array(\Request::route()->getName(), ['pages.index', 'pages.create']) ? 'active' : ''); ?>">
        <a href="#">
          <i class="fa fa-twitch"></i> 
          <span>Trang</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo e(in_array(\Request::route()->getName(), ['pages.index', 'pages.edit']) ? "class=active" : ""); ?>><a href="<?php echo e(route('pages.index')); ?>"><i class="fa fa-circle-o"></i> Trang</a></li>
          <li <?php echo e(in_array(\Request::route()->getName(), ['pages.create']) ? "class=active" : ""); ?>><a href="<?php echo e(route('pages.create')); ?>"><i class="fa fa-circle-o"></i> Thêm trang</a></li>          
        </ul>
      </li>
      
      <li class="treeview <?php echo e(in_array(\Request::route()->getName(), ['articles.index', 'articles.create', 'articles.edit','articles-cate.create', 'articles-cate.index', 'articles-cate.edit']) ? 'active' : ''); ?>">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Bài viết</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo e(in_array(\Request::route()->getName(), ['articles.edit', 'articles.index']) ? "class=active" : ""); ?>><a href="<?php echo e(route('articles.index')); ?>"><i class="fa fa-circle-o"></i> Bài viết</a></li>
          <li <?php echo e(in_array(\Request::route()->getName(), ['articles.create']) ? "class=active" : ""); ?> ><a href="<?php echo e(route('articles.create', ['cate_id' => 1])); ?>"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
          <?php if(Auth::user()->role == 3): ?>
        <li <?php echo e(in_array(\Request::route()->getName(), ['articles-cate.create', 'articles-cate.index', 'articles-cate.edit']) ? "class=active" : ""); ?> ><a href="<?php echo e(route('articles-cate.index')); ?>"><i class="fa fa-circle-o"></i> Danh mục bài viết</a></li>      
        <?php endif; ?>    
        </ul>
       
      </li>      
        <li <?php echo e(in_array(\Request::route()->getName(), ['tag.edit', 'tag.index']) ? "class=active" : ""); ?>>
          <a href="<?php echo e(route('tag.index')); ?>">
            <i class="fa fa-pencil-square-o"></i> 
            <span>Tags / Tiện ích</span>          
          </a>       
        </li>      
      <?php if(Auth::user()->role == 3): ?>
      <li <?php echo e(in_array(\Request::route()->getName(), ['banner.list', 'banner.edit', 'banner.create']) ? "class=active" : ""); ?>>
        <a href="<?php echo e(route('banner.list')); ?>">
          <i class="fa fa-file-image-o"></i> 
          <span>Banner</span>          
        </a>       
      </li>      
      <?php endif; ?>
      <?php if(Auth::user()->role > 1): ?>
      <li class="treeview <?php echo e(in_array(\Request::route()->getName(), ['account.index', 'info-seo.index', 'settings.index', 'settings.noti', 'menu.index', 'video.index', 'video.edit', 'video.create']) || (in_array(\Request::route()->getName(), ['custom-link.edit', 'custom-link.index', 'custom-link.create']) && isset($block_id) && $block_id == 2 ) ? 'active' : ''); ?>">
        <a href="#">
          <i class="fa  fa-gears"></i>
          <span>Cài đặt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <?php if(Auth::user()->role == 3): ?>
        
          <li <?php echo e(\Request::route()->getName() == "settings.index" ? "class=active" : ""); ?>><a href="<?php echo e(route('settings.index')); ?>"><i class="fa fa-circle-o"></i> Thông tin CTY</a></li>
          <li <?php echo e((in_array(\Request::route()->getName(), ['custom-link.edit', 'custom-link.index', 'custom-link.create']) && isset($block_id) && $block_id == 2 )? "class=active" : ""); ?>>
            <a href="<?php echo e(route('custom-link.index', ['block_id' => 2 ])); ?>">
              <i class="fa fa-circle-o"></i>
              <span>Link Footer</span>         
            </a>       
          </li>
          <li <?php echo e(in_array(\Request::route()->getName(), ['support.list', 'support.edit', 'support.create']) ? "class=active" : ""); ?>><a href="<?php echo e(route('support.index')); ?>"><i class="fa fa-circle-o"></i> Hỗ trợ khách hàng</a></li>  
          
          <li <?php echo e(\Request::route()->getName() == "info-seo.index" ? "class=active" : ""); ?>><a href="<?php echo e(route('info-seo.index')); ?>"><i class="fa fa-circle-o"></i> Cài đặt SEO</a></li>
          <?php endif; ?>
          <li <?php echo e(\Request::route()->getName() == "account.index" ? "class=active" : ""); ?>><a href="<?php echo e(route('account.index')); ?>"><i class="fa fa-circle-o"></i> Users</a></li>          
        </ul>
      </li>
      <?php endif; ?>
      <!--<li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<style type="text/css">
  .skin-blue .sidebar-menu>li>.treeview-menu{
    padding-left: 15px !important;
  }
</style>
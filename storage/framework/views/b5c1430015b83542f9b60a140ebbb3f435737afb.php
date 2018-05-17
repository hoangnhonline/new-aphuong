<footer class="footer">	
    <div class="container">
    	<div class="block-footer row">
    		<div class="block-logo-footer col-sm-3">
                <a href="<?php echo e(route('home')); ?>" title="logo thanhphuthinhland">
                	<img src="<?php echo e(Helper::showImage($settingArr['logo'])); ?>" alt="logo">
                </a>

            </div>
            <div class="block-footer-address col-sm-5">
                <address>
					<?php echo $settingArr['cty_info']; ?>

				</address>
            </div>
            <div class="block-menu-bottom-bottom col-sm-4">
				<label>Thông Tin Mua Bán</label>
                <ul>
                	<?php if($footerLink): ?>
                	<?php foreach($footerLink as $link): ?>
					<li><a href="<?php echo e($link->link_url); ?>" title="<?php echo $link->link_text; ?>"><?php echo $link->link_text; ?></a></li>
					<?php endforeach; ?>
					<?php endif; ?>
                </ul>
            </div>
    	</div>
    </div> 
</footer><!-- /footer -->
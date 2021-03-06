<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

         <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
            <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', ['liber-v'])); ?>"><?php echo app('translator')->getFromJson('site.productnav_overview_liber_v'); ?></a></li>
            <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', ['liber-v-amd'])); ?>"><?php echo app('translator')->getFromJson('site.productnav_overview_liber_v_amd'); ?></a></li>
            <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.spec', ['liber-v'])); ?>"><?php echo app('translator')->getFromJson('site.productnav_spec'); ?></a></li>
            
            <li class="nav-item"><a class="nav-link py-1" href="/where-to-buy"><?php echo app('translator')->getFromJson('site.productnav_wheretobuy'); ?></a></li>
           </ul>
        </div>
    </div>
</div>

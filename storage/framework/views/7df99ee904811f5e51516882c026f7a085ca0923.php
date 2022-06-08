<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.contact_us'); ?>
<?php $__env->stopSection(); ?>

<?php 
$page = 'contactus';
 ?>

<?php $__env->startSection('content'); ?>
    <main>
        <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">
                <div class="container">
                    <h3 class="text-left mt-4 mb-3 font-weight-light"><?php echo app('translator')->getFromJson('site.contactus_contactus'); ?></h3>
                    
                    
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="contact_us_title">General Sales Enquiry – Middle East :</h2>

                            <div class="mb-2">17534441</div>
                            <div class="mb-2">ASHRAFS Shopping Centre HOORA</div>
                            <div class="mb-2">SHOP 0 BUILDING 63 ROAD 339 BLOCK 318 ALHOORA</div>

                            <br>
                            <h2 class="contact_us_title">Repair Service and Technical support – Middle East :</h2>

                            <div class="mb-2">17534441</div>
                            <div class="mb-2">ASHRAFS Shopping Centre HOORA</div>
                            <div class="mb-2">SHOP 0 BUILDING 63 ROAD 339 BLOCK 318 ALHOORA</div>

                            

                        </div>
                        
                    </div>


                </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
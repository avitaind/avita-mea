<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Pura_spec'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="top-nav-padding">

        <?php echo $__env->make('partials.pura-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        

        <!-------------------Submenu------------
                        <div class="nav-product-panel">
                            <div class="container">
                                <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                                    <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                        
                                <div class="product-nav-collapse">
                                    <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                        
                        
                                        <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'pura')); ?>"><?php echo app('translator')->getFromJson('pura.name'); ?></a></li>
                        
                        
                                        <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.spec', 'pura')); ?>"><?php echo app('translator')->getFromJson('site.productnav_spec'); ?></a></li>
                                        <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.support', 'liber')); ?>"><?php echo app('translator')->getFromJson('site.productnav_support'); ?></a></li>
                                        <li class="nav-item">
                                            <a class="nav-link py-1" href="/where-to-buy"><?php echo app('translator')->getFromJson('site.productnav_wheretobuy'); ?></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                       ----------->

        <section>

            <!--------------PRODUCT IMAGES-------------->
            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

                        <!-------------- PURA 14-inch-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4">
                                <div class="d-sm-block">AVITA PURA</div>
                                <div class="d-sm-block">(35.56 cm)</div>
                            </div>
                            <!--<img class="hidden-sm-down" src="/images/liber/u13/lightpurple.png"> -->
                            <img class="hidden-sm-down" src="/images/pura/silver.png">
                            <ul
                                class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li class="active" style="background-color: silver"
                                    data-image="/images/pura/silver.png"></li>
                                
                                
                                
                                
                                
                                
                                
                                
                            </ul>
                        </a>

                    </nav>
                </div>
            </div>
            <!--------------END PRODUCT IMAGES-------------->


            <!-- Tab panes PRODUCT SPEC-->
            <div class="tab-content">

                <!------------------ PURA 14-inch ------------------------------------->
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="<?php echo e(asset('images/win10_logo.png')); ?>"
                                    alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating System</div>
                                <div>Windows 10 Home in S mode</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>Intel?? Core??? i3-8145U Processor / Intel?? Core??? i5-8265U Processor / Intel?? Core???
                                    i5-10210U Processor
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>14 TFT (1920 x 1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB / 8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>Intel?? UHD Graphics 620</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>128GB / 256GB / 512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>1M</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>0.8W x 2 Speaker, Dual Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.1</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>1 x 3.5mm Headphone Jack, 2 x Full Size USB 3.0, 1 x USB 3.0 Type-C (PD 2.0 Charging,
                                    Display out), 1 x MicroSD card slot (Max support 256GB), Micro HDMI x 1</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>332(W) x 221(H) x 15(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.344kg</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 10 hours</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Space Grey</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                <div>AC Adapter and Power cord</div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!------------------ End PURA 14-inch------------------------------------->
            </div>

        </section>

        <!-- DISCLAIMER-->
        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Windows 10 Home in S mode works exclusively with apps from the Microsoft Store within Windows and
                        accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is
                        available. Learn more at <a href="https://Windows.com/SmodeFAQ"
                            target="_blank"><u>Windows.com/SmodeFAQ</u></a>.</li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel
                        Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon,
                        and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or
                        retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display
                        setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the
                        rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States
                        and/or other countries.</li>
                    <li>*Under Test Conditions</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
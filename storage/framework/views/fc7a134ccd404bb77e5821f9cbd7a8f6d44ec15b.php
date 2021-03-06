<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Pura_spec'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="top-nav-padding">
        <?php echo $__env->make('partials.pura-amd-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section>
            <!--------------PRODUCT IMAGES-------------->
            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

                        <!-------------- PURA 14-inch-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4">
                                <div class="d-sm-block">AVITA PURA - AMD</div>
                                <div class="d-sm-block">(14-inch)</div>
                            </div>
                            <img class="hidden-sm-down" src="/images/pura/Pura_grey.png">
                            <ul
                                class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li class="active" style="background-color: #7d7e82"
                                    data-image="/images/pura/Pura_grey.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/pura/Pura_black.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/pura/Pura_white.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/pura/Pura_blue.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/pura/Pura_purple.png"></li>
                                <li style="background-color: #9e0b0f" data-image="/images/pura/Pura_red.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/pura/Pura_yellow.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/pura/Pura_sparklingPink.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/pura/Pura_pink.png"></li>
                            </ul>
                        </a>


                        <!-------------- PURA 14-inch Ryzen -------------->
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-5" role="tab">
                            <div class="spec-item-name mb-4">
                                <div class="d-sm-block">AVITA PURA - AMD Ryzen???</div>
                                <div class="d-sm-block">(14-inch)</div>
                            </div>
                            <img class="hidden-sm-down" src="/images/pura/01-757575.png">
                            <ul
                                class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li class="active" style="background-color: #757575"
                                    data-image="/images/pura/01-757575.png"></li>
                                <li style="background-color: #c7c7c7" data-image="/images/pura/02-c7c7c7.png"></li>
                                <li style="background-color: #bc1031" data-image="/images/pura/03-bc1031.png"></li>
                                <li style="background-color: #277a9e" data-image="/images/pura/04-277a9e.png"></li>
                                <li style="background-color: #2c2c2c" data-image="/images/pura/05-2c2c2c.png"></li>
                                <li style="background-color: #e1be21" data-image="/images/pura/06-e1be21.png"></li>
                                <li style="background-color: #b36175" data-image="/images/pura/07-b36175.png"></li>
                                <li style="background-color: #7c68a7" data-image="/images/pura/08-7c68a7.png"></li>
                                <li style="background-color: #be1b5f" data-image="/images/pura/09-be1b5f.png"></li>
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
                                <img style="width: 200px;" src="https://avita.com/images/win10_logo.png"
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
                                <div>
                                    AMD A9-9420E
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>16:9 Full HD (1920 x 1080) IPS with 178 degree wide viewing angle</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB / 8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>AMD Radeon R5 Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>128GB / 256GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>VGA</div>
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
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>1 x 3.5mm Headphone Jack, 1 x Full Size USB 2.0, 1 x Full Size USB 3.0, 1 x USB 3.0
                                    Type-C, 1 x MicroSD card slot (Max support 256GB), Mini HDMI x 1</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>332(W) x 221(H) x 17(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.34kg</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 8 hours</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Space Grey / Metallic Black / Silky White / Crystal Blue / Glossy Purple / Sugar Red /
                                    Shiny Yellow / Pink Diamond / Sparkling Pink</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                <div>AC Adapter and Power cord</div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!------------------ End PURA 14-inch------------------------------------->


                <!------------------  PURA 14-inch Ryzen------------------------------------->
                <div class="tab-pane" id="spec-5" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="https://avita.com/images/win10_logo.png"
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
                                <div>
                                    AMD Ryzen??? 5 3200U / AMD Ryzen??? 5 3500U
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>16:9 Full HD (1920 x 1080) IPS Anti-Glare Panel with 178 degree wide viewing angle
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>AMD Radeon Vega 3 Graphics / AMD Radeon Vega 8 Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>VGA</div>
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
                                <div>Qualcomm?? QCA9377 IEEE 802.11a/b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>1 x 3.5mm Headphone Jack, 2 x Full Size USB 3.0, 1 x USB 3.0 Type-C, 1 x MicroSD card
                                    slot (Max support 256GB), Full Size HDMI x 1</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>333(W) x 222(H) x 20(D) mm</div>
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
                                <div>Up to 7 hours</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>
                                    Space Grey / Silky White / Sugar Red / Crystal Blue / Metallic Black / Shiny Yellow /
                                    Pink Diamond / Glossy Purple / Glossy Purple / Sparkling Pink
                                </div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                <div>AC Adapter and Power cord</div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!------------------ ENd PURA 14-inch Ryzen------------------------------------->

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

                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
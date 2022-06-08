@extends('layouts.app')

@section('title')
    @lang('title.Pura_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.essential-premier-product-navbar')


        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">

                            <div class="spec-item-name mb-12">
                                <div class="d-sm-block">AVITA ESSENTIAL Premier</div>
                                <div class="d-sm-block">Intel® Core™</div>
                                <div class="d-sm-block">(14-inch)</div>
                            </div>


                            <img class="hidden-sm-down" src="/images/essential/essential-premier-full-000.png">
                            <ul
                                class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li class="active" style="background-color: #000000"
                                    data-image="/images/essential/essential-premier-full-000.png"></li>
                                <li style="background-color: #000000"
                                    data-image="/images/essential/essential-premier-000000.png"></li>
                                <li style="background-color: #eeeeee"
                                    data-image="/images/essential/essential-premier-eeeeee.png"></li>
                                <li style="background-color: #878787"
                                    data-image="/images/essential/essential-premier-878787.png"></li>
                                <li style="background-color: #9c82b9"
                                    data-image="/images/essential/essential-premier-9c82b9.png"></li>
                                <li style="background-color: #d698c4"
                                    data-image="/images/essential/essential-premier-d698c4.png"></li>
                                <li style="background-color: #44a1cf"
                                    data-image="/images/essential/essential-premier-44a1cf.png"></li>

                            </ul>
                        </a>


                        <a class="col text-center nav-link " data-toggle="tab" href="#spec-5" role="tab">

                            <div class="spec-item-name mb-12">
                                <div class="d-sm-block">AVITA ESSENTIAL Premier</div>
                                <div class="d-sm-block">AMD Ryzen™</div>
                                <div class="d-sm-block">(14-inch)</div>
                            </div>


                            <img class="hidden-sm-down" src="/images/essential/essential-premier-full-000.png">
                            <ul
                                class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li class="active" style="background-color: #000000"
                                    data-image="/images/essential/essential-premier-full-000.png"></li>
                                <li style="background-color: #000000"
                                    data-image="/images/essential/essential-premier-000000.png"></li>
                                <li style="background-color: #eeeeee"
                                    data-image="/images/essential/essential-premier-eeeeee.png"></li>
                                <li style="background-color: #878787"
                                    data-image="/images/essential/essential-premier-878787.png"></li>
                                <li style="background-color: #9c82b9"
                                    data-image="/images/essential/essential-premier-9c82b9.png"></li>
                                <li style="background-color: #d698c4"
                                    data-image="/images/essential/essential-premier-d698c4.png"></li>
                                <li style="background-color: #44a1cf"
                                    data-image="/images/essential/essential-premier-44a1cf.png"></li>

                            </ul>
                        </a>

                    </nav>
                </div>
            </div>
            <!--------------END PRODUCT IMAGES-------------->


            <!-- Tab panes PRODUCT SPEC-->
            <div class="tab-content">

                <!------------------ intel ------------------------------------->
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
                                    Intel® Core™ i3-10110U / Intel® Core™ i5-10210U
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>14" 16:9 Full HD (1920 x 1080) IPS viewing angle</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB / 8GB DDR4</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>Intel® UHD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>256GB / 512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>720HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>0.8W x 2 Speaker, Microphone</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
                            <!-- <li class="spec-item d-flex">
                                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                                <div>IEEE 802.11 b/g/n/ac</div>
                                            </li>
                                            <li class="spec-item d-flex">
                                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                                <div>Bluetooth v4.1</div>
                                            </li>-->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 Type-A x 2, USB 3.0 Type C x 1, Micro HDMI x 1, Micro SD card (Max support
                                    256GB), Headphone Jack, Power Jack</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>321(W) x 226(H) x 20(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.46kg</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Shadow Black, Mystic Black, Cloud White, Light Grey, Sky Blue, Twilight Purple, Coral
                                    Pink</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                <div>AC Adapter and Power cord</div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!------------------ End intel------------------------------------->



                <!------------------ amd ------------------------------------->
                <div class="tab-pane " id="spec-5" role="tabpanel">
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
                                    AMD Ryzen™ 5 4500U
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>14" 16:9 Full HD (1920 x 1080) IPS viewing angle</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>8GB DDR4</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>AMD Radeon™ Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>720HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>0.8W x 2 Speaker, Microphone</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
                            <!-- <li class="spec-item d-flex">
                                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                                <div>IEEE 802.11 b/g/n/ac</div>
                                            </li>
                                            <li class="spec-item d-flex">
                                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                                <div>Bluetooth v4.1</div>
                                            </li>-->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 Type-A x 2, USB 3.0 Type C x 1, Micro HDMI x 1, Micro SD card (Max support
                                    256GB), Headphone Jack, Power Jack</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>321(W) x 226(H) x 20(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.46kg</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Shadow Black, Mystic Black, Cloud White, Light Grey, Sky Blue, Twilight Purple, Coral
                                    Pink</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                <div>AC Adapter and Power cord</div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!------------------ End amd------------------------------------->



            </div>

        </section>

        <!-- DISCLAIMER-->
        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">

                    <li>Actual battery life may vary depending on product configuration, usage, operational conditions and
                        power management settings. Battery life will decrease over the lifetime of the battery.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or
                        retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display
                        setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the
                        rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States
                        and/or other countries.
                    </li>
                    <li>The availability of colors may vary by retailers.</li>
                    <li>Product appearance design, color, matching, may vary according to different models and
                        configurations.</li>
                    <li>In the event of any disputes, Nexstgo Company Limited reserves the right of the final decision.</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

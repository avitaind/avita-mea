@extends('layouts.app')

@section('title')
    @lang('title.Pura_spec')
@stop

@section('content')

    <main class="top-nav-padding">
    
	@include('partials.product-navbar')
    
        <!-------------------Submenu-------------
        <div class="nav-product-panel">
            <div class="container">
                <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                    <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
                </div>
        
                <div class="product-nav-collapse">
                    <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
        
        
                       <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'pura') }}">@lang('pura.name')</a></li>
        
        
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', 'pura') }}">@lang('site.productnav_spec')</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
                         <li class="nav-item">
                            <a class="nav-link py-1" href="{{ route('product.map', 'liber') }}">@lang('site.productnav_wheretobuy')</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--------------->


        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
                    
                    	<!-------------- PURA 14-inch-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA PURA</div><div class="d-sm-block">(14-inch)</div></div>
                             <img class="hidden-sm-down" src="/images/pura/Pura_grey.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li class="active" style="background-color: #7d7e82" data-image="/images/pura/Pura_grey.png"></li>
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

                    </nav>
                </div>
            </div>
  
           
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="{{ asset('images/win10_logo.png') }}" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">????????????<br>(Operating System)</div>
                                <div>Windows 10 Home in S mode</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">????????? <br>(CPU)</div>
                                <div>                               
Intel?? Core??? i3-8145U Processor / Intel?? Core??? i5-8265U Processor
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Display)</div>
                                <div>14" TFT (1920 x 1080) </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">????????? <br>(Memory)</div>
                                <div>4GB / 8GB</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">????????? <br>(Graphics)</div>
                                <div>Intel?? UHD Graphics 620</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">???????????? <br>(Storage)</div>
                                <div>128GB / 256GB / 512GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">????????? <br>(Integrated Camera)</div>
                                <div>1M</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Audio)</div>
                                <div>0.8W x 2 Speaker, Dual Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Keyboard)</div>
                                <div>Island style non-backlit keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">???????????? <br>(Wireless)</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Bluetooth)</div>
                                <div>Bluetooth v4.1</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">??????/????????? <br>(I/O Ports)</div>
                                <div>1 x 3.5mm Headphone Jack, 2 x Full Size USB 3.0, 1 x USB 3.0 Type-C (PD 2.0 Charging, Display out), 1 x MicroSD card slot (Max support 256GB), Micro HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Dimension)</div>
                                <div>332(W) x 221(H) x 15(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Weight)</div>
                                <div>1.344 kg ???</div>
                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">??????????????? <br>(Adapter)</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">???????????? <br>(Battery)</div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????????????????? <br>(Battery Life)</div>
                                <div>Up to 10 hours</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Colour)</div>
                                <div>????????? / ????????? / ????????? / ????????? / ????????? / ????????? / ????????? / ????????? / ?????????</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">?????? <br>(Accessories)</div>
                                <div>AC Adapter and Power cord 
                                	 
                                </div> 
                            </li>

                        </ul>
                    </div> 
                
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>??????: S ????????? Windows 10 ?????????????????? Windows ??? Microsoft Store ?????????????????????????????????????????????????????? S ????????? Windows 10 ??????????????????????????? ?????????????????? S ????????????????????? ?????????????????????????????? <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>???</li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside ??? trademarks ??????????????????????????????Intel ???????????????</li>
                    <li>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</li>
                    <li>???????????????????????????????????????????????????</li>
                    <li>??????????????????????????????????????????????????????????????????????????????????????????</li>
                    <li>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

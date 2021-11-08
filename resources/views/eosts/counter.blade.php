<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>

            <!-- Counter Start -->
            <section class="wide-tb-100 bg-scroll counter-bg pos-rel">
                <div class="bg-overlay blue opacity-50"></div>
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
@if('ru'==$lang)
                        <span class="text-white">Компания в цифрах</span> Факты о компании
@elseif('en'==$lang)
<span class = "text-white"> Company in numbers </span> Company facts
@else      
          <span class = "text-white"> Rakamlarla şirket </span> Şirket gerçekleri       
@endif
                 </h1>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Counter Col Start -->
                        <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0"
                            data-wow-delay="0s">
                            <p><i class="icofont-google-map"></i></p>
                            <span class="counter">50</span>
                            <span>+</span>
                            <div>
                            {{('ru'==$lang)?'Партнеры':''}} {{('en'==$lang)?'Partners':''}}{{('tu'==$lang)?'Ortaklar':''}}
                            </div>
                        </div>
                        <!-- Counter Col End -->

                        <!-- Counter Col Start -->
                        <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0"
                            data-wow-delay="0s">
                            <p><i class="icofont-globe"></i></p>
                            <span class="counter">100</span>
                            <span>+</span>
                            <div>
                       {{('ru'==$lang)?'клиенты по всему миру':''}} {{('en'==$lang)?'clients all over the world':''}}{{('tu'==$lang)?'tüm dünyada müşteriler':''}}         
                            </div>
                        </div>
                        <!-- Counter Col End -->

                        <!-- Spacer For Medium -->
                        <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                        <!-- Spacer For Medium -->

                        <!-- Counter Col Start -->
                        <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0"
                            data-wow-delay="0">
                            <p><i class="icofont-vehicle-delivery-van"></i></p>
                            <span class="counter">20</span>
                            <span>+</span>
                            <div>
                       {{('ru'==$lang)?'Собственные траки':''}} {{('en'==$lang)?'Own tracks':''}}{{('tu'==$lang)?'Kendi parçaları':''}}          
                            </div>
                        </div>
                        <!-- Counter Col End -->

                        <!-- Counter Col Start -->
                        <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0"
                            data-wow-delay="0s">
                            <p><i class="icofont-umbrella-alt"></i></p>
                            <span class="counter">2340</span>
                            <div>
                        {{('ru'==$lang)?'тонн перевезено':''}} {{('en'==$lang)?'tons transported':''}}{{('tu'==$lang)?'taşınan ton':''}}        
                            </div>
                        </div>
                        <!-- Counter Col End -->
                    </div>
                </div>
            </section>
            <!-- Counter End -->
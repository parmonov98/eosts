<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>
         <!-- Our Features Start -->
            <section class="bg-light-gray wide-tb-100">
                <div class="container pos-rel">
                    <div class="row">
                        <!-- Heading Main -->
                        <div class="col-sm-12">
                            <h1 class="heading-main wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                                {!!('ru'==$lang)?'<span>Наши особенности</span> Почему выбирают нас?':''!!} {!!('en'==$lang)?'<span> Our features </span> Why choose us?':''!!} {!!('tu'==$lang)?'<span> Özelliklerimiz </span> Neden bizi seçmelisiniz?':''!!}
                                
                            </h1>
                        </div>
                        <!-- Heading Main -->


                        <div class="col-12 col-lg-4">
                            <!-- Icon Box 2 -->
                            <div class="icon-box-2 mb-4">
                                <div class="media">
                                    <div class="service-icon">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                    <div class="service-inner-content media-body">
                                         @if('ru'==$lang)
                                        <h4 class="h4-md">Доверия</h4>
                                        <p>
Наша компания служит вам более чем 10 лет и выполняет обязанности, надежно и успешно.

                                        </p>
                                        
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> Trust </h4>
                                         <p>
                                             Our company has been serving you for more than 10 years and fulfills its duties reliably and successfully.
                                         </p>
                                         @else
                                         <h4 class = "h4-md"> Güven </h4>
                                         <p>
                                             Firmamız 10 yılı aşkın süredir sizlere hizmet vermekte olup üzerine düşen görevleri güvenilir ve başarılı bir şekilde yerine getirmektedir.
                                         </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->
                            <!-- Icon Box 2 -->
                            <div class="icon-box-2">
                                <div class="media">
                                    <div class="service-icon">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                    <div class="service-inner-content media-body">
                                        @if('ru'==$lang)
                                        <h4 class="h4-md">Страхование</h4>
                                        <p>
                                            Страхование грузов состоит из двух разделов<br>
                                            - CMR Convention-до $40000 <br />
                                            - TIR-до $100000
                                        </p>
                                        
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> Insurance </h4>
                                         <p>
                                             Cargo insurance consists of two sections <br>
                                             - CMR Convention-up to $ 40,000 <br />
                                             - TIR-up to $ 100000
                                         </p>
                                        @else

                                        <h4 class = "h4-md"> Sigorta </h4>
                                         <p>
                                             Kargo sigortası iki bölümden oluşmaktadır <br>
                                             - CMR Sözleşmesi-40.000 $'a kadar <br />
                                             - 100000$'a kadar TIR
                                         </p>

                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->
                        </div>
                        <div class="col-12 col-lg-4">
                            <img class="w-100" src="{{ asset(env('THEME').'/images/eosts-label.jpg')}}" alt="Наши особенности">
                        </div>

                        <div class="col-12 col-lg-4">
                            <!-- Icon Box 2 -->
                            <div class="icon-box-2 mb-4">
                                <div class="media">
                                    <div class="service-icon">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                    <div class="service-inner-content media-body">
                                         @if('ru'==$lang)
                                        <h4 class="h4-md">Круглосуточная служба поддержки</h4>
                                        <p> В нашей компании есть круглосуточный Колл - Центр с которым вы можете связаться в любое время.</p>
                                          
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> 24-hour support service. </h4>
                                         <p> Our company has a 24/7 Call Center with which you can contact at any time. </p>

                                        @else
                                        <h4 class = "h4-md"> 7/24 Müşteri Desteği </h4>
                                         <p> Firmamızda her an iletişim kurabileceğiniz 7/24 Çağrı Merkezi bulunmaktadır. </p>
                                          @endif

                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->


                            <!-- Icon Box 2 -->
                            <div class="icon-box-2">
                                <div class="media">
                                    <div class="service-icon">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                    <div class="service-inner-content media-body">
                                        @if('ru'==$lang)
                                        <h4 class="h4-md">Безопасность на все 100%</h4>
                                        <p>
                                           Так как мы в этой сфере довольно долго, мы понимаем какая ответственность на нас лежит и мы выполняем свои обязанности с уверенностью на все 100%
                                        </p>

                                         
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> 100% safety </h4>
                                         <p>
                                            Since we have been in this area for quite a long time, we understand what responsibility lies with us and we carry out our duties with 100% confidence.
                                         </p>

                                        @else
                                        <h4 class = "h4-md"> %100 güvenlik</h4>
                                         <p>
                                            Oldukça uzun bir süredir bu alanda bulunduğumuz için, üzerimize düşen sorumluluğun ne olduğunu anlıyor ve görevlerimizi %100 güvenle yerine getiriyoruz.
                                         </p>
                                        
                                          @endif

                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- Our Features End -->
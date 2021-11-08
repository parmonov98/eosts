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
                                            Мы в сфере услуги логистика уже более 10 лет обслуживаем оперативно и
                                            надёжно. Мы относимся к грузу бережно и внимательно.
                                        </p>
                                        
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> Trust </h4>
                                         <p>
                                             In the field of logistics services, we have been serving promptly and
                                             reliably. We treat the cargo with care and attention.
                                         </p>
                                         @else
                                         <h4 class = "h4-md"> Güven </h4>
                                         <p>
                                             Lojistik hizmetler alanında hızlı ve hızlı hizmet vermekteyiz.
                                             güvenilir bir şekilde. Kargoya özen ve dikkatle yaklaşıyoruz.
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
                            <img class="w-100" src="{{ asset(env('THEME').'/images/eosts-label.png')}}" alt="Наши особенности">
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
                                        <h4 class="h4-md">24/7 Служба поддержки клиентов</h4>
                                        <p> У нас есть Call center для обслуживания клиентов из всех стран 24/7
                                            круглосуточно.</p>
                                          
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> 24/7 Customer Support </h4>
                                         <p> We have a Call center to serve customers from all countries 24/7
                                             around the clock. </p>

                                        @else
                                        <h4 class = "h4-md"> 7/24 Müşteri Desteği </h4>
                                         <p> Tüm ülkelerden müşterilerimize 7/24 hizmet verecek bir Çağrı merkezimiz var
                                             günün her saati. </p>
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
                                        <h4 class="h4-md">100% безопасная перевозка</h4>
                                        <p>
                                            Мы знаем и понимаем за долгий срок своей работы что важно для клиента больше
                                            всего и это доставка груза в назначенный срок в целости и в сохранности
                                        </p>

                                         
                                        @elseif('en'==$lang)
                                        <h4 class = "h4-md"> 100% safe transportation </h4>
                                         <p>
                                             We know and understand for a long period of our work what is more important for the client
                                             all and this is the delivery of the goods at the appointed time safe and sound
                                         </p>

                                        @else
                                        <h4 class = "h4-md"> %100 güvenli ulaşım </h4>
                                         <p>
                                             Müşterilerimiz için neyin daha önemli olduğunu uzun bir çalışma dönemi boyunca biliyor ve anlıyoruz.
                                             hepsi ve bu, malların belirlenen zamanda güvenli ve sağlam bir şekilde teslim edilmesidir.
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
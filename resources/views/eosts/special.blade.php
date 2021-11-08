<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>
<!-- What Makes Us Special Start -->
            <section class="bg-light-gray wide-tb-100">
                <div class="container pos-rel">
                    <div class="row" itemscope itemtype="https://schema.org/Organization">
                        <div class="img-business-man">
                            <img itemprop="photo" src="{{ asset(env('THEME').'/images/courier-man.png')}}" alt="our company">
                        </div>
                        <div class="col-md-6 ml-auto">
                            <!-- Heading Main -->
                            <div class=" wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                                <h1 class="heading-main text-left mb-5">
@if('ru'==$lang)
                        <span>Кто мы?</span> О компании
@elseif('en'==$lang)
<span> Who are we? </span> About the company
@else      
   <span> Biz kimiz? </span> Şirket hakkında 
@endif

                                    
                                </h1>
                            </div>
                            <!-- Heading Main -->

    
@if('ru'==$lang)
<p class="lead fw-5 txt-blue" itemprop="description">Компания<span itemprop="name"> EOSTS(EvroOsiyo Sarbon Trans Servis)</span>
занимается комплексной доставкой грузов из Узбекистана, Турции, России, Украины, Польши, Литвы,
Латвии и стран Европы.Мы работаем с более чем 200 партнерами и сотрудничаем более 10 лет.</p>
<p>Мы имеем огромный опыт по логистики, и наша работа просто классно!</p>
@elseif('en'==$lang)
<p class = "lead fw-5 txt-blue" itemprop = "description"> Company <span itemprop = "name"> EOSTS (EvroOsiyo Sarbon Trans Servis) </span>is engaged in complex delivery of goods from Uzbekistan, Turkey, Russia, Ukraine, Poland, Lithuania, Latvia and European countries. We work with more than 200 partners and have been cooperating for more than 10 years. </p>
<p> We have a lot of experience in logistics, and our work is just great! </p>
@else      
 <p class = "lead fw-5 txt-blue" itemprop = "description"> Şirket <span itemprop = "name"> EOSTS (EvroOsiyo Sarbon Trans Servis) </span> Özbekistan, Türkiye, Rusya, Ukrayna, Polonya, Litvanya'dan karmaşık mal teslimatı yapmaktadır. Letonya ve Avrupa ülkeleri. 200'den fazla ortakla çalışıyoruz ve 10 yılı aşkın süredir işbirliği yapıyoruz. </p>
<p> Lojistik alanında çok deneyime sahibiz ve işimiz harika! </p>
@endif


                            <div class="mt-5">
                                <ul class="nav nav-pills theme-tabbing mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                            href="#pills-home" role="tab" aria-controls="pills-home"
                                            aria-selected="true">{{('ru'==$lang)?'О нас':''}} {{('en'==$lang)?'About Us':''}}{{('tu'==$lang)?'Hakkımızda':''}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">{{('ru'==$lang)?'Миссия компании':''}} {{('en'==$lang)?'Company\'s mission':''}}{{('tu'==$lang)?'Şirketin misyonu':''}} </a>
                                    </li>
                                </ul>
                                <div class="tab-content theme-tabbing" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <p>
@if('ru'==$lang)
   Компания EOSTS(EvroOsiyo Sarbon Trans Servis) - логистическая компания базирующийся в Узбекистане.

@elseif('en'==$lang)
EOSTS (EvroOsiyo Sarbon Trans Servis) is a logistics company based in Uzbekistan.
@else      
EOSTS (EvroOsiyo Sarbon Trans Servis), Özbekistan merkezli bir lojistik şirketidir.
@endif                                          
                                            
                                        </p>
                                        <p></p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <p>
@if('ru'==$lang)
Миссия EOSTS(EvroOsiyo Sarbon Trans Servis): Обеспечить лучшее на рынке качество транспортных и логистических услуг. Быть лидером. Сделать авто перевозки грузов доступными и привлекательными для клиента.

@elseif('en'==$lang)
Mission of EOSTS (EvroOsiyo Sarbon Trans Servis): To provide the best quality transport and logistics services on the market. Be a leader. To make auto transportation of goods affordable and attractive for the client.
@else      
EOSTS (EvroOsiyo Sarbon Trans Servis) Misyonu: Piyasadaki en kaliteli nakliye ve lojistik hizmetlerini sunmak. Lider olmak. Malların otomatik nakliyesini müşteri için uygun fiyatlı ve çekici hale getirmek.
@endif                                               
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- What Makes Us Special End -->
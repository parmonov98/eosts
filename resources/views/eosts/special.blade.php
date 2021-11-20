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
<p class="lead fw-5 txt-blue" itemprop="description">Компания<span itemprop="name"> Логистическая компания "EOSTS", основанная в 2014, Джамоловом Баходыром в Узбекистане.</span> Наша компания сотрудничает с более чем 200 партнерами и
сотрудниками более 10 лет, также не забываем что наша компания занимается комплексной доставкой между странами как :
Узбекистан, Турция, Россия, Украина, Польша и другие страны Европы. </p> <p>
Мы имеем огромный опыт по логистики, и наша работа просто классно! </p>
@elseif('en'==$lang)
<p class = "lead fw-5 txt-blue" itemprop = "description"> <span itemprop = "name"> Logistics company "EOSTS", founded in 2014 by Jamolov Bakhodyr in Uzbekistan. </span> Our company cooperates with over 200 partners and
employees for more than 10 years, we also do not forget that our company is engaged in complex delivery between countries as:
Uzbekistan, Turkey, Russia, Ukraine, Poland and other European countries. </p> <p>
We have a lot of experience in logistics, and our work is just awesome! </p>
@else
<p class = "lead fw-5 txt-blue" itemprop = "description"> <span itemprop = "name"> Özbekistan'da Jamolov Bakhodyr tarafından 2014 yılında kurulan lojistik şirketi "EOSTS". 200'den fazla ortak ve
10 yılı aşkın bir süredir çalışanlarımız arasında, şirketimizin ülkeler arasında karmaşık teslimatla uğraştığını da unutmayız:
Özbekistan, Türkiye, Rusya, Ukrayna, Polonya ve diğer Avrupa ülkeleri. </p> <p>
Lojistik konusunda çok tecrübemiz var ve işimiz harika! </p>
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
Данная услуга была запущена Джамоловом Баходыром, так как
он работал в сотрудничестве с другими логистическими
компаниями начиная с 2006 года, позже он основал свою
компанию "EOSTS".
@elseif('en'==$lang)
This service was launched by Jamolov Bakhodyr, since
he worked in collaboration with other logistics
companies since 2006, later he founded his
company "EOSTS".
@else      
Bu hizmet, o zamandan beri Jamolov Bakhodyr tarafından başlatıldı.
diğer lojistik ile işbirliği içinde çalıştı
2006'dan beri şirketlerini kurdu, daha sonra
şirket "EOSTS".
@endif                                          
                                            
                                        </p>
                                        <p></p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <p>
@if('ru'==$lang)
Наша миссия обеспечить высокое качество на рынке по логистическим компаниям. Наша логистическая компания "EOSTS" - это самый верный выбор для помощи с грузоперевозками.                   

@elseif('en'==$lang)
Our mission is to provide high quality in the market for logistics companies. Our logistics company "EOSTS" is the right choice for assistance with cargo transportation.
@else      
Misyonumuz, lojistik firmaları için pazarda yüksek kalite sağlamaktır. Lojistik şirketimiz "EOSTS", kargo taşımacılığı konusunda yardım için doğru seçimdir.
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
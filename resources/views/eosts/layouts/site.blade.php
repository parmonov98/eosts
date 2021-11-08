<?php
$url = $_SERVER['HTTP_HOST'];
if(!session()->has('lang')){
		session()->put('lang', 'ru');
	}
$lang = session('lang');
	?>


<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
  <title>{{ isset($title)?$title:'' }}</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compitable" content="IE=egde">
 <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  <meta name="author" content="{{ (isset($author)) ? $author : ''}}">

        <!-- <link rel="canonical" href="http://example.com/" /> -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME').'/images/favicon.ico')}}">
<meta name="robots" content="index, follow">


  <meta name="viewport" content="width=480">
  <link rel="alternate" type="application/atom+xml" title="News" href="/feed">
  <meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : ''}}">
  <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : ''}}">
  <meta name="votdel" content="{{ (isset($votdel)) ? $votdel : ''}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    {!!Html::style(env('THEME').'/css/base.css')!!}
	{!!Html::style(env('THEME').'/css/icofont.min.css')!!}
	{!!Html::style(env('THEME').'/css/font-awesome.min.css')!!}

	{!!Html::style(env('THEME').'/css/tiny-slider.css')!!}

		{!!Html::script(env('THEME').'/js/jquery-3.5.1.min.js')!!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/settings.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/layers.css"> -->
  
        
</head>



<body itemscope itemtype="https://schema.org/WebPage">





        <header class="top-border top-transparent header-logo-top">
            <div class="top-bar-right d-flex align-items-center text-md-left">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-12 pr-sm-0 " itemscope itemtype="https://schema.org/Person">

                            <div class="d-flex justify-content-between py-2 ">
                                <div class="top-text" itemprop="location" itemscope itemtype="https://schema.org/Place">
        <small class="txt-ligt-gray">{{('ru'==$lang)?'Адрес':''}}{{('en'==$lang)?'Address':''}}{{('tu'==$lang)?'Address':''}}</small>
                         @if(isset($getsetting) && $getsetting['address']['addres'][$lang]!=null)
                          <span class="fw-7 txt-blue" itemprop="address">{!!$getsetting['address']['addres'][$lang]!!}</span>
                          @endif                                    





                           


                                </div>
                                <div class="top-text">
                                    <small class="txt-ligt-gray">{{('ru'==$lang)?'Эл.почта':''}}{{('en'==$lang)?'E-mail':''}}{{('tu'==$lang)?'E-mail':''}}</small>
                                    <span class="fw-6 txt-blue">
                                    @if(isset($getsetting) && $getsetting['address']['email'][0]!=null)
                                        <a href="mailto:{{$getsetting['address']['email'][0]}}" itemprop="email"
                                            class="txt-blue">{{$getsetting['address']['email'][0]}}</a>
                                    @endif
                                        
                                        <br />
                                    @if(isset($getsetting) && $getsetting['address']['email'][1]!=null)
                                        <a href="mailto:{{$getsetting['address']['email'][1]}}" itemprop="email"
                                            class="txt-blue">{{$getsetting['address']['email'][1]}}</a>
                                    @endif
                                    </span>
                                </div>
                                <div class="top-text">
                                    <small class="txt-ligt-gray">{{('ru'==$lang)?'Телефон':''}}
                        {{('en'==$lang)?'Telephone':''}}  {{('tu'==$lang)?'Telefon':''}}</small>
                             @if(isset($getsetting) && $getsetting['address']['phone'][0]!=null)
                                    <span class="fw-7 txt-blue" itemprop="telephone">{{$getsetting['address']['phone'][0]}}</span>
                              @endif


                                    <br />
                             @if(isset($getsetting) && $getsetting['address']['phone'][1]!=null)
                                    <span class="fw-7 txt-blue" itemprop="telephone">{{$getsetting['address']['phone'][1]}}</span>
                              @endif
                                </div>

                                <!-- Topbar Language Dropdown Start -->
                                <div class="dropdown d-inline-flex lang-toggle shadow-sm order-lg-last justify-center align-items-center">


@if('ru'==$lang)
<a href="/ru" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
<img src="{{ asset(env('THEME').'/images/ru.svg')}}" alt="" class="dropdown-item-icon"><span class="d-inline-block d-lg-none">Ru</span> <span class="d-none d-lg-inline-block">Русский</span> <i class="icofont-rounded-down"></i></a>
@elseif('en'==$lang)
<a href="/en" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
<img src="{{ asset(env('THEME').'/images/us.svg')}}" alt="" class="dropdown-item-icon"><span class="d-inline-block d-lg-none">Ru</span> <span class="d-none d-lg-inline-block">English</span> <i class="icofont-rounded-down"></i></a>

@else
<a href="/tu" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
<img src="{{ asset(env('THEME').'/images/tr.svg')}}" alt="" class="dropdown-item-icon"><span class="d-inline-block d-lg-none">Tu</span> <span class="d-none d-lg-inline-block">Türkçe</span> <i class="icofont-rounded-down"></i></a>
@endif



                                    <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                                @if('ru'!=$lang)
                                        <a class="dropdown-item" href="/ru" itemprop="availableLanguage" itemscope
                                            itemtype="https://schema.org/Language">
                                            <img src="{{ asset(env('THEME').'/images/ru.svg')}}" alt="" class="dropdown-item-icon">
                                            <span itemprop="name">
                                                Русский
                                            </span>
                                        </a>
                                    @endif
                                 @if('en'!=$lang)
                                        <a class="dropdown-item" href="/en" itemprop="availableLanguage" itemscope
                                            itemtype="https://schema.org/Language">
                                            <img src="{{ asset(env('THEME').'/images/us.svg')}}" alt="" class="dropdown-item-icon">
                                            <span itemprop="name">
                                                English
                                            </span>
                                        </a>
                                @endif
                                 @if('tu'!=$lang)

                                        <a class="dropdown-item" href="/tu" itemprop="availableLanguage" itemscope
                                            itemtype="https://schema.org/Language">
                                            <img src="{{ asset(env('THEME').'/images/tr.svg')}}" alt="" class="dropdown-item-icon">
                                            <span itemprop="name">
                                                Türkçe
                                            </span>
                                        </a>
                                @endif

                                    </div>
                                </div>
                                <!-- Topbar Language Dropdown End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-transparent header-fullpage">
                <div class="container text-nowrap bdr-nav px-0">

                    <a class="navbar-brand" href="/" itemscope itemtype="https://schema.org/LocalBusiness">
                        <img src="{{ asset(env('THEME').'/images/logo.png')}}" alt="Компания EOSTS(EvroOsiyo Sarbon Trans Servis)" itemprop="logo">
                    </a>

                    <span class="order-lg-last d-inline-flex request-btn d-lg-none">
                        <!-- <a id="search_home" class="nav-link mr-2 ml-auto" href="#"><i class="icofont-search"></i></a> -->
                        <a class="navbar-brand-mobile" href="index.html">
                            <img src="{{ asset(env('THEME').'/images/logo.png')}}" alt="Компания EOSTS(EvroOsiyo Sarbon Trans Servis)"
                                itemprop="logo">
                        </a>
                    </span>


                    <div class="d-inline-flex request-btn ml-2 order-lg-last">
                        <a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center"
                            href="#" role="button" data-toggle="modal" data-target="#request_popup"><i
                                class="icofont-page"></i>
                            Получить расчёт
                        </a>
                    </div>
                    <!-- Topbar Request Quote Start -->

                    <!-- Toggle Button Start -->
                    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Button End -->

                    <!-- Topbar Request Quote End -->

                    <div class="collapse navbar-collapse mr-5" id="navbarCollapse" data-hover="dropdown"
                        data-animations="slideInUp slideInUp slideInUp slideInUp" itemscope=""
                        itemtype="http://schema.org/SiteNavigationElement">

@yield('navigation')                 

                        <!-- Main Navigation End -->
                        <div class="dropdown d-inline-flex mobile-lang-toggle shadow-sm d-lg-none">





@if('ru'==$lang)
    <a href="#" class="dropdown-toggle btn ml-auto" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" data-hover="dropdown" data-animations="slideInUp"
        itemprop="availableLanguage" itemscope itemtype="https://schema.org/Language">
        <img src="{{ asset(env('THEME').'/images/ru.svg')}}" alt="" class="dropdown-item-icon">
        <span class="d-inline-block d-lg-none">Ru</span>
        <span class="d-none d-lg-inline-block" itemprop="name">Русский</span>
    </a>
@elseif('en'==$lang)
    <a href="#" class="dropdown-toggle btn ml-auto" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" data-hover="dropdown" data-animations="slideInUp"
        itemprop="availableLanguage" itemscope itemtype="https://schema.org/Language">
        <img src="{{ asset(env('THEME').'/images/us.svg')}}" alt="" class="dropdown-item-icon">
        <span class="d-inline-block d-lg-none">En</span>
        <span class="d-none d-lg-inline-block" itemprop="name">English</span>
    </a>
@else
    <a href="#" class="dropdown-toggle btn ml-auto" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" data-hover="dropdown" data-animations="slideInUp"
        itemprop="availableLanguage" itemscope itemtype="https://schema.org/Language">
        <img src="{{ asset(env('THEME').'/images/tr.svg')}}" alt="" class="dropdown-item-icon">
        <span class="d-inline-block d-lg-none">Tu</span>
        <span class="d-none d-lg-inline-block" itemprop="name">Türkçe</span>
    </a>

@endif





                            <div class="dropdown-menu dropdownhover-bottom dropdown-menu-left" role="menu">


@if('ru'!=$lang)                 
<a class="dropdown-item active" href="/ru" itemprop="availableLanguage" itemscope
    itemtype="https://schema.org/Language">
    <img src="{{ asset(env('THEME').'/images/ru.svg')}}" alt="" class="dropdown-item-icon">
    <span itemprop="name">
        Русский
    </span>
</a>
@endif
@if('en'!=$lang)
<a class="dropdown-item " href="/en" itemprop="availableLanguage" itemscope
    itemtype="https://schema.org/Language">
    <img src="{{ asset(env('THEME').'/images/us.svg')}}" alt="" class="dropdown-item-icon">
    <span itemprop="name">
        English
    </span>
</a>
@endif
 @if('tu'!=$lang)
<a class="dropdown-item " href="/tu" itemprop="availableLanguage" itemscope
    itemtype="https://schema.org/Language">
    <img src="{{ asset(env('THEME').'/images/tr.svg')}}" alt="" class="dropdown-item-icon">
    <span itemprop="name">
        Türkçe
    </span>
</a>
@endif









                            </div>
                        </div>


                    </div>


                </div>
            </nav>


        </header>


@yield('slider')

@yield('content')  


        <!-- Main Body Content Start -->
        <main id="body-content" style="overflow-y: inherit;">

@yield('ind')            
@yield('special') 

@yield('features') 
@yield('quote') 
@yield('counter') 
@yield('reviews') 
@yield('clients') 
            

   
@yield('gallery') 
 



 
            <!-- Google Map Start -->
            <!-- <section class="map-bg">
            <div class="contact-details row d-flex">
                <div class="col">
                    <h4>Бухара</h4>
                    <p><i class="icofont-phone"></i> +99899 311 49 00</p>
                    <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">info@sarbontrans.com</a></div>
                </div>
                <div class="col">
                    <h4>Ташкент</h4>
                    <p><i class="icofont-phone"></i> +998 99 0999559</p>
                    <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">info@sarbontrans.com</a></div>
                </div>
            </div>
            <div id="map-holder" class="pos-rel">
                <div id="map_extended">
                    <p>This will be replaced with the Google Map.</p>
                </div>
            </div>
            Google Map Start 
            </section>-->

        </main>


        <!-- Main Footer Start -->
        <footer class="wide-tb-70 bg-light-gray pb-0">
            <div class="container ">
                <div class="row">

                    <!-- Column First -->
                    <div class="col-lg-4 col-md-6">
                        <div class="logo-footer">
                            <img src="{{ asset(env('THEME').'/images/logo_footer.png')}}" alt="" />
                        </div>
                        <p>
                            {!!('ru'==$lang)?'Компания EOSTS(EvroOsiyo Sarbon Trans Servis) занимается доставкой грузов из Узбекистана, Турции, России, Украины, Польши, Литвы, Латвии и стран Европы. Мы работаем с более чем 200 партнерами и сотрудничаем более 10 лет. <br />Наша работа просто классная!':''!!}

                             {!!('en'==$lang)?'EOSTS (Evro Osiyo Sarbon Trans Servis) delivers goods from Uzbekistan, Turkey, Russia, Ukraine, Poland, Lithuania, Latvia and European countries. We work with more than 200 partners and have been cooperating for over 10 years. <br /> Our work is just awesome!':''!!}

                            {!!('tu'==$lang)?'EOSTS (Evro Osiyo Sarbon Trans Servis) Özbekistan, Türkiye, Rusya, Ukrayna, Polonya, Litvanya, Letonya ve Avrupa ülkelerinden mal sevkiyatı yapmaktadır. 200\'den fazla ortakla çalışıyoruz ve 10 yılı aşkın bir süredir işbirliği yapıyoruz. <br /> İşimiz harika!':''!!}

                            
                        </p>

                        <h3 class="footer-heading">{{('ru'==$lang)?'Наши соц.сети':''}}
                        {{('en'==$lang)?'Our social networks':''}}
                    {{('tu'==$lang)?'Sosyal ağlarımız':''}}</h3>
                        <div class="social-icons">



















@if(isset($getsetting) && $getsetting['sot_network']['sotnet']['facebook'])
<a href="{{$getsetting['sot_network']['sotnet']['facebook']}}" target="_blank"><i class="icofont-facebook"></i></a>
@endif

@if(isset($getsetting) && $getsetting['sot_network']['sotnet']['telegram'])
<a href="{{$getsetting['sot_network']['sotnet']['telegram']}}" target="_blank"><i class="icofont-telegram"></i></a>
@endif


 @if(isset($getsetting) && $getsetting['sot_network']['sotnet']['whatsapp'])
<a href="{{$getsetting['sot_network']['sotnet']['whatsapp']}}" target="_blank"><i class="icofont-whatsapp"></i></a>
 @endif

 
@if(isset($getsetting) && $getsetting['sot_network']['sotnet']['instagram'])
<a href="{{$getsetting['sot_network']['sotnet']['instagram']}}" target="_blank"><i class="icofont-instagram"></i></a>
@endif

@if(isset($getsetting) && $getsetting['sot_network']['sotnet']['twitter'])
<a href="{{$getsetting['sot_network']['sotnet']['twitter']}}" target="_blank"><i class="icofont-twitter"></i></a>
@endif

@if(isset($getsetting) && $getsetting['sot_network']['sotnet']['youtube'])
<a href="{{$getsetting['sot_network']['sotnet']['youtube']}}" target="_blank"><i class="icofont-youtube"></i></a>
@endif

                        </div>
                    </div>
                    <!-- Column First -->

                    <!-- Column Second -->
                    <div class="col-lg-4 col-md-6">
                        <h3 class="footer-heading"> {{('ru'==$lang)?'Карта сайта':''}} {{('en'==$lang)?'Map of site':''}} {{('tu'==$lang)?'Site haritası':''}}  </h3>
                        <div class="footer-widget-menu">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/"><i class="icofont-simple-right"></i> <span>{{('ru'==$lang)?'ГЛАВНАЯ':''}} {{('en'==$lang)?'HOME':''}} {{('tu'==$lang)?'EV':''}}</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-simple-right"></i>
                                        <span>О НАС</span></a>
                                </li>

                                <li>
                                    <a href="/services.html"><i class="icofont-simple-right"></i>
                                        <span>УСЛУГИ</span></a>
                                </li>
                                <li>
                                    <a href="/contact-us.html"><i class="icofont-simple-right"></i>
                                        <span>КОНТАКТЫ</span></a>
                                </li>

                                <li>
                                    <a href="/about.html#faqs"><i class="icofont-simple-right"></i>
                                        <span>Вопросы</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Column Second -->

                    <!-- Column Third -->
                    <div class="col-lg-4 col-md-6">
                        <h3 class="footer-heading"> {{('ru'==$lang)?'Наши контакты':''}}{{('en'==$lang)?'Our contacts':''}}{{('tu'==$lang)?'Our contacts':''}}</h3>
                        <div class="footer-widget-contact">
                            <div class="media mb-3">
                                <i class="icofont-google-map mr-3"></i>
                                <div class="media-body" itemprop="location" itemscope=""
                                    itemtype="https://schema.org/Place">

                         @if(isset($getsetting) && $getsetting['address']['addres'][$lang]!=null)
                          <span itemprop="address">{!!$getsetting['address']['addres'][$lang]!!}</span>
                          @endif  
                                    <span itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                                </div>
                            </div>
                            <div class="media mb-2">
                                <i class="icofont-smart-phone mr-3"></i>
                                <div class="media-body">

                             @if(isset($getsetting) && $getsetting['address']['phone'][0]!=null)
                                    <div itemprop="telephone">
                                        <a href="tel:{{$getsetting['address']['phone'][0]}}">{{$getsetting['address']['phone'][0]}}</a>
                                    </div>
                              @endif

                             @if(isset($getsetting) && $getsetting['address']['phone'][1]!=null)
                                    <div itemprop="telephone">
                                        <a href="tel:{{$getsetting['address']['phone'][1]}}">{{$getsetting['address']['phone'][1]}}</a>
                                    </div>
                              @endif

                                </div>
                            </div>
                            <div class="media mb-3">
                                <i class="icofont-ui-email mr-3"></i>
                                <div class="media-body">

                                    @if(isset($getsetting) && $getsetting['address']['email'][0]!=null)
                                    <div class="pt-1"><a href="mailto:{{$getsetting['address']['email'][0]}}">{{$getsetting['address']['email'][0]}}</a></div>
                                    @endif
                                        
                                    @if(isset($getsetting) && $getsetting['address']['email'][1]!=null)
                                     <div class="pt-1"><a href="mailto:{{$getsetting['address']['email'][1]}}">{{$getsetting['address']['email'][1]}}</a></div>
                                    @endif


                                </div>
                            </div>
                            <div class="media mb-3">
                                <i class="icofont-clock-time mr-3"></i>
                                <div class="media-body">
                                    <!-- <div><strong>Пон - Вос</strong></div> -->
                                    <div class="pt-1">
                                        {{('ru'==$lang)?'24/7 Служба поддержки клиентов':''}}{{('en'==$lang)?'24/7 Product support serviceses client':''}}{{('tu'==$lang)?'24/7 Product support serviceses client':''}}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="copyright-wrap bg-navy-blue wide-tb-30">
                <div class="container">
                    <div class="row text-md-left text-center">
                        <div class="col-sm-12 col-md-6 copyright-links">
                            <strong>&copy; EOSTS - {{date("Y")}}. </strong>{{('ru'==$lang)?'Все права защищены.':''}} {{('en'==$lang)?'All right are protected.':''}} {{('tu'==$lang)?'All right are protected.':''}}
                        </div>
                        <div class="col-sm-12 col-md-6 text-md-right text-center">
                          {{('ru'==$lang)?'Разработчик:':''}} {{('en'==$lang)?'The Developer:':''}} {{('tu'==$lang)?'The Developer:':''}}  
                            <a href="https://parmonov98.uz" target="_blank" rel="nofollow">@parmonov98</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Main Footer End -->

        <!-- Search Popup Start -->
        <div class="overlay overlay-hugeinc">
            <form class="form-inline mt-2 mt-md-0">
                <div class="form-inner">
                    <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                        <div class="col-md-1">
                            <i class="icofont-search"></i>
                        </div>
                        <div class="col-10">
                            <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col-md-1">
                            <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Search Popup End -->

        <!-- Request Modal -->
        <div class="modal fade" id=request_popup tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered request_popup" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <!-- Contact Details Start -->
                        <section class="pos-rel bg-light-gray">
                            <div class="container-fluid p-0">
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icofont-close-line"></i>
                                </a>
                                <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md"
                                    style="box-shadow: 0px 18px 76px 0px rgba(0, 0, 0, 0.06);">
                                    <div class="col bg-fixed bg-img-7 request_pag_img">
                                        &nbsp;
                                    </div>


                                    <div class="col-md-7 col-12">
                                        <div class="px-3 m-5">
                                            <h2 class="h2-xl mb-4 fw-6">Получить расчет </h2>
                                            <form action="#" method="post" novalidate="novalidate"
                                                class="rounded-field">

                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                        <select title="Please choose a package" required=""
                                                            name="package" class="custom-select" aria-required="true"
                                                            aria-invalid="false">
                                                            <option value="">Аргумент1</option>
                                                            <option value="">Аргумент1</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select title="Please choose a package" required=""
                                                            name="package" class="custom-select" aria-required="true"
                                                            aria-invalid="false">
                                                            <option value="">Аргумент1</option>
                                                            <option value="">Аргумент1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="City of departure">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Delivery city">
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Total gross weight (KG)">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Dimension">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="center-head"><span
                                                                class="bg-light-gray txt-orange">Your Personal
                                                                Details</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                        <input type="text" name="name" class="form-control mb-3"
                                                            placeholder="Your Name">
                                                        <input type="text" name="name" class="form-control mb-3"
                                                            placeholder="Email">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Phone Number">
                                                    </div>
                                                    <div class="col">
                                                        <textarea rows="7" placeholder="Message"
                                                            class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col pt-3">
                                                        <button type="submit" class="form-btn btn-theme bg-orange">Send
                                                            Message <i class="icofont-rounded-right"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Contact Details End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Modal -->

        <!-- Back To Top Start -->
        <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
        <!-- Back To Top End -->

        <!-- Main JavaScript -->
        <!-- <script src="js/jquery.min.js"></script> -->
        {!!Html::script(env('THEME').'/js/jquery.min.js')!!}
        {!!Html::script(env('THEME').'/js/popper.min.js')!!}
        {!!Html::script(env('THEME').'/js/bootstrap.min.js')!!}
        {!!Html::script(env('THEME').'/js/bootstrap-dropdownhover.min.js')!!}
        {!!Html::script(env('THEME').'/js/fontawesome-all.js')!!}
        {!!Html::script(env('THEME').'/js/owl.carousel.min.js')!!}
        {!!Html::script(env('THEME').'/js/jquery.waypoints.min.js')!!}
        {!!Html::script(env('THEME').'/js/jquery.counterup.min.js')!!}

        <!-- JQuery Map Plugin -->
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        {!!Html::script(env('THEME').'/js/jquery.gmap.min.js')!!}
        {!!Html::script(env('THEME').'/js/jquery.cubeportfolio.min.js')!!}
        {!!Html::script(env('THEME').'/js/tiny-slider.js')!!}
        {!!Html::script(env('THEME').'/js/site-custom.js')!!}
 


        <script>
            var slider = tns({
                container: '.home-slider',
                items: 1,
                // controlsContainer: "#customize-controls",
                slideBy: 'page',
                // autoWidth: true,
                autoplay: true,
                mouseDrag: true,
                controls: false,
                navPosition: "bottom",
                // lazyload: true,
                // nav: false,
                speed: 1000,
                onInit: 'customizedFunction',
                responsive: {
                    640: {
                        items: 1,
                    },

                    768: {
                        items: 1,
                    }
                }
            });


            var customizedFunction = function (info, eventName) {

                if (info.navItems[info.displayIndex - 1]) {

                    const src = info.navItems[info.displayIndex - 1].dataset.image;
                    document.querySelector('.header').style.backgroundImage = `url("${src}")`;

                    // console.log(info.navItems[info.displayIndex - 1].dataset.src);
                    if (info.navItems[info.displayIndex - 1].dataset.loaded == "true") {
                        info.navItems[info.displayIndex - 1].dataset.image = info.navItems[info.displayIndex - 1].dataset.src;
                    } else {
                        var imgs = [];
                        imgs[info.displayIndex - 1] = new Image();
                        imgs[info.displayIndex - 1].src = info.navItems[info.displayIndex - 1].dataset.src;

                        imgs[info.displayIndex - 1].onload = function () {
                            if (imgs[info.displayIndex - 1].complete) {
                                info.navItems[info.displayIndex - 1].dataset.image = info.navItems[info.displayIndex - 1].dataset.src;
                                document.querySelector('.header').dataset.src = info.navItems[info.displayIndex - 1].dataset.src;

                            }
                        };
                    }
                    // // Assign an onLoad handler to the dummy image *before* assigning the src

                    // document.querySelector('.header').dataset.src = '';


                }

            }

            // slider.onInit()
        </script>





</body>
</html>
  <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">{{('ru'==$cat)?'Услуги':''}} {{('en'==$cat)?'Services':''}} {{('tu'==$cat)?'Hizmetler':''}}</li>
          </ol>
        </nav>

        <h1>{{('ru'==$cat)?'Наши сервисы':''}} {{('en'==$cat)?'Our services':''}} {{('tu'==$cat)?'Hizmetlerimiz':''}}</h1>
        <div class="breadcrumbs-description">{{('ru'==$cat)?'Товары достигают места назначения быстрее и надёжнее,также можете осуществлять денежные переводы в любом варианте.':''}} {{('en'==$cat)?'Goods reach their destination faster and more reliably, you can also make money transfers in any way.':''}} {{('tu'==$cat)?'Eşyalarınız gideceği yere daha hızlı ve güvenilir bir şekilde ulaşır, dilediğiniz şekilde para transferi de yapabilirsiniz.':''}}
          <br>
          <br>

        </div>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

      <!-- What We Offer Start -->
      <section class="wide-tb-80 bg-fixed what-we-offer">
        <div class="container pos-rel">
          <div class="row align-items-center">

            <div class="col-md-6">
              @if('ru'==$cat)
              <h2 class="mb-4 fw-7 txt-white wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                Качество <span class="fw-6 txt-orange">и</span> эффективность <br><span class="fw-6 txt-orange">по
                  достойной цены.</span>
              </h2>
              <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
                Наши услуги в основном делятся на 4 типа, и мы предоставляем эти услуги вам.<br>На нашем счету более 20 грузовиков
                из 20 траков 6 траки имеют холодильники а также быстро и безопасно доставляють скоропортящихся продукты.
              </p>
              <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.4s"> Помимо наших основных составляющих,
                в которых основное внимание уделяется качеству наших услуг.<br> Мы стараемся круглосуточно поддерживать связь с клиентами и помогаем застраховать груз для каждого клиента индувидиально.</p>
                @elseif('en'==$cat)

                <h2 class = "mb-4 fw-7 txt-white wow fadeInLeft" data-wow-duration = "0" data-wow-delay = "0s">
                Quality <span class = "fw-6 txt-orange"> and </span> efficiency <br> <span class = "fw-6 txt-orange"> by
                  worthy of the price. </span>
              </h2>
              <p class = "wow fadeInLeft" data-wow-duration = "0" data-wow-delay = "0.2s">
                Our services are mainly divided into 4 types, and we provide these services to you. <br> We have more than 20 trucks on our account
                out of 20 trucks, 6 trucks have refrigerators and quickly and safely deliver perishable goods.
              </p>
              <p class = "wow fadeInLeft" data-wow-duration = "0" data-wow-delay = "0.4s"> In addition to our main components,
                where the main focus is on the quality of our services. <br> We try to keep in touch with clients around the clock and help to insure the cargo for each client on an individual basis. </p>

                @else
                <h2 class = "mb-4 fw-7 txt-white wow fadeInLeft" data-wow-duration = "0" data-wow-delay = "0s">
                Kalite <span class = "fw-6 txt-orange"> ve </span> verimlilik <br> <span class = "fw-6 txt-orange"> tarafından
                  uygun fiyat. </span>
              </h2>
              <p class = "wow fadeInLeft" data-wow-duration = "0" data-wow-delay = "0,2s">
                Hizmetlerimiz ağırlıklı olarak 4 tipe ayrılmaktadır ve bu hizmetleri sizlere sağlamaktayız <br> Hesabımızda 20'den fazla tır bulunmaktadır.
                20 tırdan 6'sında buzdolabı var ve bozulabilir malları hızlı ve güvenli bir şekilde teslim ediyor.
              </p>
              <p class = "wow fadeInLeft" data-wow-duration = "0" data-wow-delay = "0.4s"> Ana bileşenlerimize ek olarak,
                ana odak noktamız hizmetlerimizin kalitesidir. <br> Müşterilerimizle günün her saati iletişim halinde olmaya ve her müşteri için kargonun bireysel olarak sigortalanmasına yardımcı olmaya çalışıyoruz. </p>
                @endif

            </div>


            <div class="col-md-6">

            </div>

          </div>

        </div>
      </section>
      <!-- What We Offer End -->


      <!-- Welcome To Cargo Start -->
      <section class="bg-light-gray wide-tb-100">
        <div class="container">
          <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">

              <h1 class="heading-main">
                @if('ru'==$cat) <span>что мы предлагаем?</span>Наша основние услуги
                @elseif('en'==$cat) <span> what do we offer? </span> Our main services
                @else <span> ne sunuyoruz? </span> Başlıca hizmetlerimiz @endif
              </h1>
            </div>
            <!-- Heading Main -->
          @foreach ($articles as $key => $value)

            <!-- Icon Box 1 -->
            <div class="col-md-3 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.{{$key}}s">
              <a href="{{route('ushow',['id'=>$value->id])}}">
                <div class="icon-box-1">
                  <img src="{{ asset('/uslugi/'.$value->img['min']) }}" alt="{{$value->title[$cat]}}">
                  <div class="text">
                    @if($key==0)<i class="icofont-vehicle-delivery-van"></i>@elseif($key==1)<i class="icofont-airplane-alt"></i>
                    @else<i class="icofont-ship"></i> @endif

                    {{$value->title[$cat]}}
                  </div>
                </div>
              </a>
            </div>
            <!-- Icon Box 1 -->
          @endforeach



          </div>
        </div>
      </section>
      <!-- Welcome To Cargo End -->

      <!-- What Makes Us Special Start -->
      <section class="bg-sky-blue wide-tb-100">
        <div class="container pos-rel">
          <div class="row">
            <div class="img-business-man">
              <img src="{{ asset(env('THEME').'/images/pros.png') }}" alt="What makes use unique">
            </div>
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">

                @if('ru'==$cat) <span>Наша плюсы</span>Что делает нас особенными?
                @elseif('en'==$cat) <span> Our pros </span> What makes us special?
                @else <span> Profesyonellerimiz </span> Bizi özel yapan nedir? @endif
                
              </h1>
            </div>
            <!-- Heading Main -->
            <div class="col-md-6 ml-auto">
              <div class="row">
                <!-- Icon Box 2 -->
                <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                  <div class="icon-box-3 mb-5 bg-sky-blue">
                    <div class="media">
                      <div class="service-icon mr-5">
                        <i class="icofont-box"></i>
                      </div>
                      <div class="service-inner-content media-body">
                        
@if('ru'==$cat) <h4 class="h4-md">Доверия</h4><p>Точно так же как вы доверяете компании,<br>компания доверяет вам оплачивание для услуг после получения груза.</p>
@elseif('en'==$cat) <h4 class = "h4-md"> Trust </h4> <p> Just like you trust a company, <br> a company trusts you to pay for services after receiving the shipment. </p>
@else <h4 class = "h4-md"> Güven </h4> <p> Tıpkı bir şirkete güvendiğiniz gibi, bir şirket de teslimat sonrası hizmetler için ödeme yapacağınız konusunda size güvenir. </p> @endif


                      </div>
                    </div>
                  </div>
                </div>
                <!-- Icon Box -->

                <!-- Icon Box 2 -->
                <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                  <div class="icon-box-3 mb-5 bg-sky-blue">
                    <div class="media">
                      <div class="service-icon mr-5">
                        <i class="icofont-shield"></i>
                      </div>
                      <div class="service-inner-content media-body">
  @if('ru'==$cat) <h4 class="h4-md">Безопасно & Качественно</h4><p>Страхование грузов состоит из двух разделов CMR Convention-до 40тыс$ TIR-до 100тыс$.</p>
  @elseif('en'==$cat) <h4 class = "h4-md"> Safe & Quality </h4> <p> Cargo insurance consists of two sections of the CMR Convention-up to 40 thousand $ TIR-up to 100 thousand $. </p>
  @else <h4 class = "h4-md"> Güvenli ve Kaliteli </h4> <p> Kargo sigortası, CMR Sözleşmesinin iki bölümünden oluşur - 40 bin $'a kadar TIR - 100 bin $'a kadar. </p> @endif

                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Icon Box -->

                <!-- Icon Box 2 -->
                <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                  <div class="icon-box-3 bg-sky-blue">
                    <div class="media">
                      <div class="service-icon mr-5">
                        <i class="icofont-tree-alt"></i>
                      </div>
                      <div class="service-inner-content media-body">
@if('ru'==$cat) <h4 class="h4-md">Забота о клиенте</h4><p>Общение с клиентами и учытовать их мнение и смотреть точку зрение.</p>
@elseif('en'==$cat) <h4 class = "h4-md"> Customer Care </h4> <p> Communicate with customers and take into account their opinion and watch the point of view. </p>
@else <h4 class = "h4-md"> Müşteri hizmetleri </h4> <p> Müşterilerle iletişim kurun ve onların görüşlerini dikkate alın ve bakış açısını izleyin. </p> @endif

                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Icon Box -->
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- What Makes Us Special End -->

      <!-- How It Works Start -->
      <section class="bg-light-gray">
        <div class="container p-0">
          <div class="row align-items-center no-gutters">
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center">
              <div class="px-5 wide-tb-100">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                  <i class="icofont-glass"></i>
                </div>
                <h4 class="h4-md fw-7 txt-blue">
              {{('ru'==$cat)?'НАДЕЖНОСТЬ & БЕЗОПАСНОСТЬ':''}} {{('en'==$cat)?'RELIABILITY & SAFETY':''}} {{('tu'==$cat)?'GÜVENİLİRLİK & GÜVENLİK':''}}

                </h4>
              </div>
            </div>
            <!-- Icon Boxes -->

            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center bg-fixed clients-bg pos-rel txt-white">
              <div class="bg-overlay black opacity-40"></div>
              <div class="px-5 wide-tb-100" style="position: relative; z-index: 999;">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                  <i class="icofont-delivery-time"></i>
                </div>
                <h4 class="h4-md fw-7">{{('ru'==$cat)?'БЫСТРАЯ ДОСТАВКА':''}} {{('en'==$cat)?'FAST DELIVERY':''}} {{('tu'==$cat)?'HIZLI TESLİMAT':''}}</h4>
              </div>
            </div>
            <!-- Icon Boxes -->

            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center">
              <div class="px-5 wide-tb-100">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                  <i class="icofont-live-support"></i>
                </div>
                <h4 class="h4-md fw-7 txt-blue">{{('ru'==$cat)?'24/7 ОБСЛУЖИВАНИЕ':''}} {{('en'==$cat)?'24/7 SERVICE':''}} {{('tu'==$cat)?'7/24 HİZMET':''}}</h4>
              </div>
            </div>
            <!-- Icon Boxes -->
          </div>
        </div>
      </section>
      <!-- How It Works End -->


<!-- Client Reviews Start -->
            <section class="wide-tb-100 mb-spacer-md">
                <div class="container">
                    <div class="row">
                        <!-- Heading Main -->
                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <h1 class="heading-main">

                                {!!('ru'==$cat)?'<span>Комментарии</span> Отзывы от клиентов':''!!} {!!('en'==$cat)?'<span>Comments</span> Reviews from client':''!!} {!!('tu'==$cat)?'<span>Yorumlar</span> Reviews from client':''!!}

                                
                            </h1>
                        </div>
                        <!-- Heading Main -->

                        <div class="col-sm-12">
                            <div class="owl-carousel owl-theme" id="home-client-testimonials">

                                <!-- Client Testimonials Slider Item -->
                                <div class="item" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <div class="client-testimonial bg-wave">
                                        <div class="media">
                                            <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                <img src="{{ asset(env('THEME').'/images/team_1.jpg')}}" alt="">
                                            </div>
                                            <div class="client-inner-content media-body">
                                                @if('ru'==$cat)
                                                <p itemprop="reviewBody">1. EOSTS (ЕвроОсиё Сарбон Транс Сервис) за
                                                    рекомендовали себя как очень надежные, поработав с ними, вы убедитесь. </p>
                                                <footer class="blockquote-footer"><cite title="Source Title">
                                                        <span itemprop="author"> John Gerry </span> Design Hunt</cite>
                                                </footer> 
                                                @elseif('en'==$cat)
                                                <p itemprop = "reviewBody"> 1. EOSTS (EuroOsiyo Sarbon Trans Service) for
                                                     recommended themselves as very reliable, after working with them, you will see. </p>
                                                 <footer class = "blockquote-footer"> <cite title = "Source Title">
                                                         <span itemprop = "author"> John Gerry </span> Design Hunt </cite>
                                                 </footer>
                                                @else
                                                 <p itemprop = "reviewBody"> 1. EOSTS (EuroOsiyo Sarbon Trans Servisi) için
                                                     Kendilerini çok güvenilir olarak tavsiye ettiklerini, onlarla çalıştıktan sonra göreceksiniz. </p>
                                                 <footer class = "blockquote-footer"> <cite title = "Kaynak Başlığı">
                                                         <span itemprop = "yazar"> John Gerry </span> Tasarım Avı </cite>
                                                 </footer>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Testimonials Slider Item -->

                                <!-- Client Testimonials Slider Item -->
                                <div class="item" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <div class="client-testimonial bg-wave">
                                        <div class="media">
                                            <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                <img src="{{ asset(env('THEME').'/images/team_2.jpg')}}" alt="">
                                            </div>
                                            <div class="client-inner-content media-body">
                                                @if('ru'==$cat)
                                                <p itemprop="reviewBody">Базирующаяся в Узбекистане компания EOSTS
                                                    («ЕвроОсиё Сарбон Транс
                                                    Сервис») настолько доступна и надежна. Они быстро ответили на звонки
                                                    и быстро предоставили обновленную информацию о грузе. </p>
                                                <footer class="blockquote-footer">
                                                    <cite title="Source Title" itemprop="author">
                                                        John Gerry
                                                        Design Hunt
                                                    </cite>
                                                </footer>
                                                 
                                                @elseif('en'==$cat)
                                                <p itemprop = "reviewBody"> Uzbekistan-based company EOSTS
                                                     ("EuroOsiyo Sarbon Trans
                                                     Service ") is so accessible and reliable. They quickly answered calls
                                                     and promptly provided updated cargo information. </p>
                                                 <footer class = "blockquote-footer">
                                                     <cite title = "Source Title" itemprop = "author">
                                                         John gerry
                                                         Design hunt
                                                     </cite>
                                                 </footer>
                                                @else
                                                <p itemprop = "reviewBody"> Özbekistan merkezli şirket EOSTS
                                                     ("EuroOsiyo Sarbon Trans
                                                     Hizmet ") çok erişilebilir ve güvenilirdir. Çağrılara hızlı cevap verdiler
                                                     ve hızlı bir şekilde güncellenmiş kargo bilgileri sağladı. </p>
                                                 <footer class = "blockquote-footer">
                                                     <cite title = "Kaynak Başlığı" itemprop = "yazar">
                                                         john gerry
                                                         Tasarım avı
                                                     </cite>
                                                 </footer>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Testimonials Slider Item -->

                                <!-- Client Testimonials Slider Item -->
                                <div class="item" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <div class="client-testimonial bg-wave">
                                        <div class="media">
                                            <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                <img src="{{ asset(env('THEME').'/images/team_3.jpg')}}" alt="">
                                            </div>
                                            <div class="client-inner-content media-body">


                                            @if('ru'==$cat)
                                                <p itemprop="reviewBody">Каждый раз нам предоставляли услуги высочайшего
                                                    качества с
                                                    профессионализмом, оперативностью и частыми обновлениями. Так что
                                                    нам не пришлось беспокоиться о грузе. Быть спокойным.</p>
                                                <footer class="blockquote-footer">
                                                    <cite title="Source Title" itemprop="author">
                                                        John Gerry
                                                        Design Hunt
                                                    </cite>
                                                </footer>
                                                 
                                                @elseif('en'==$cat)
                                                <p itemprop = "reviewBody"> Each time we have been provided with the highest
                                                     quality with
                                                     professionalism, efficiency and frequent updates. So
                                                     we didn't have to worry about the cargo. Be calm. </p>
                                                 <footer class = "blockquote-footer">
                                                     <cite title = "Source Title" itemprop = "author">
                                                         John gerry
                                                         Design hunt
                                                     </cite>
                                                 </footer>

                                                @else

                                                 <p itemprop = "reviewBody"> Bize en yüksek
                                                     ile kalite
                                                     profesyonellik, verimlilik ve sık güncellemeler. Yani
                                                     kargo hakkında endişelenmemize gerek yoktu. Sakin olun. </p>
                                                 <footer class = "blockquote-footer">
                                                     <cite title = "Kaynak Başlığı" itemprop = "yazar">
                                                         john gerry
                                                         Tasarım avı
                                                     </cite>
                                                 </footer>
                                                @endif

                                                



                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Testimonials Slider Item -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Client Reviews End -->







      <!-- Clients Start -->
      <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
        <div class="bg-overlay blue opacity-80"></div>
        <div class="container">
          <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">{{('ru'==$cat)?'Наши клиенты':''}} {{('en'==$cat)?'Our clients':''}} {{('tu'==$cat)?'Müşterilerimiz':''}}
              </h1>
            </div>
            <!-- Heading Main -->

            <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
              <div class="owl-carousel owl-theme" id="home-clients">
                                <!-- Client Logo -->
                                <div class="item">
                                    <img src="{{ asset(env('THEME').'/images/clients/client1.png')}}" alt="" />
                                </div>
                                <!-- Client Logo -->

                                <!-- Client Logo -->
                                <div class="item">
                                    <img src="{{ asset(env('THEME').'/images/clients/client2.png')}}" alt="" />
                                </div>
                                <!-- Client Logo -->

                                <!-- Client Logo -->
                                <div class="item">
                                    <img src="{{ asset(env('THEME').'/images/clients/client3.png')}}" alt="" />
                                </div>
                                <!-- Client Logo -->

                                <!-- Client Logo -->
                                <div class="item">
                                    <img src="{{ asset(env('THEME').'/images/clients/client4.png')}}" alt="" />
                                </div>
                                <!-- Client Logo -->

                                <!-- Client Logo -->
                                <div class="item">
                                    <img src="{{ asset(env('THEME').'/images/clients/client5.png')}}" alt="" />
                                </div>
                                <!-- Client Logo -->

                                <!-- Client Logo -->
                                <div class="item">
                                    <img src="{{ asset(env('THEME').'/images/clients/client6.png')}}" alt="" />
                                </div>
                                <!-- Client Logo -->
                            </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Clients End -->






















<script type="text/javascript">
  
$('ul.list-unstyled.icons-listing.theme-orange.mb-0 li').append('<i class="icofont-check"></i>');
$('div.toggle').append('<i class="icofont-rounded-down"></i>');

</script>
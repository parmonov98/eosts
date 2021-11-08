<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>

            <!-- Client Reviews Start -->
            <section class="wide-tb-100 mb-spacer-md">
                <div class="container">
                    <div class="row">
                        <!-- Heading Main -->
                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <h1 class="heading-main">

                                {!!('ru'==$lang)?'<span>Клиенты говорят</span> Отзывы от клиентов':''!!} {!!('en'==$lang)?'<span>Clients govoryat</span> Reviews from client':''!!} {!!('tu'==$lang)?'<span>Clients govoryat</span> Reviews from client':''!!}

                                
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
                                                @if('ru'==$lang)
                                                <p itemprop="reviewBody">1. EOSTS (ЕвроОсиё Сарбон Транс Сервис) за
                                                    рекомендовали себя как очень надежные, поработав с ними, вы убедитесь. </p>
                                                <footer class="blockquote-footer"><cite title="Source Title">
                                                        <span itemprop="author"> John Gerry </span> Design Hunt</cite>
                                                </footer> 
                                                @elseif('en'==$lang)
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
                                                @if('ru'==$lang)
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
                                                 
                                                @elseif('en'==$lang)
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


                                            @if('ru'==$lang)
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
                                                 
                                                @elseif('en'==$lang)
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
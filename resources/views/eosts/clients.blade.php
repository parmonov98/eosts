<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>

            <!-- Clients Start -->
            <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
                <div class="bg-overlay blue opacity-80"></div>
                <div class="container">
                    <div class="row">
                        <!-- Heading Main -->
                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <h1 class="heading-main">{{('ru'==$lang)?'Наши клиенты':''}} {{('en'==$lang)?'Our clients':''}} {{('tu'==$lang)?'Müşterilerimiz':''}} 
                                
                            </h1>
                        </div>
                        <!-- Heading Main -->

                        <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                            <div class="owl-carousel owl-theme" id="home-clients">

                                @foreach($naskli as $nas)
                                <div class="item">
                                    <img src="{{ asset('/nakil/'.$nas->img)}}" alt="{{$nas->name}}" />
                                </div>
                                @endforeach
                                <!-- Client Logo -->
                                

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clients End -->
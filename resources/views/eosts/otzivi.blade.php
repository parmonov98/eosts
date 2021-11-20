 <?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang'); ?>
            


<!-- Client Reviews Start -->
            <section class="wide-tb-100 mb-spacer-md">
                <div class="container">
                    <div class="row">
                        <!-- Heading Main -->
                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <h1 class="heading-main">

                                {!!('ru'==$lang)?'<span>Комментарии</span> Отзывы от клиентов':''!!} {!!('en'==$lang)?'<span>Comments</span> Reviews from client':''!!} {!!('tu'==$lang)?'<span>Yorumlar</span> Reviews from client':''!!}

                                
                            </h1>
                        </div>
                        <!-- Heading Main -->

                        <div class="col-sm-12">
                            <div class="owl-carousel owl-theme" id="home-client-testimonials">


@foreach ($otzivi as $key => $value)

                                <!-- Client Testimonials Slider Item -->
                                <div class="item" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <div class="client-testimonial bg-wave">
                                        <div class="media">
                                            <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                <img src="{{ asset('/users/'.$value->img)}}" alt="">
                                            </div>
                                            <div class="client-inner-content media-body">
                                                {!! $value->text !!}
                                                
                                                <footer class="blockquote-footer"><cite title="Source Title">
                                                        <span itemprop="author"> {{ $value->name }} </span> </cite>
                                                </footer> 
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Testimonials Slider Item -->
@endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
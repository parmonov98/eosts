<?php
if(!session()->has('lang')){session()->put('lang', 'ru');}
$lang = session('lang');
    ?>









        <!-- Page Breadcrumbs Start -->
        <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{('ru'==$lang)?'О нас':''}}{{('en'==$lang)?'About Us':''}}{{('tu'==$lang)?'Hakkımızda':''}}</li>
                    </ol>
                </nav>

                <h1>{{('ru'==$lang)?'О нас':''}}{{('en'==$lang)?'About Us':''}}{{('tu'==$lang)?'Hakkımızda':''}}</h1>
                <div class="breadcrumbs-description">
{{('ru'==$lang)?'Познакомьтесь с замечательной командой, стоящей за этим проектом, и узнайте больше о том, как мы работаем.':''}}{{('en'==$lang)?'Meet the amazing team behind this project and learn more about how we work.':''}}{{('tu'==$lang)?'Bu projenin arkasındaki harika ekiple tanışın ve nasıl çalıştığımız hakkında daha fazla bilgi edinin.':''}}

                </div>
            </div>
        </div>
        <!-- Page Breadcrumbs End -->

        <!-- Main Body Content Start -->
        <main id="body-content">
            <!-- What Makes Us Special Start -->
            <section class="wide-tb-80" itemscope itemtype="https://schema.org/Organization">
                <div class="container pos-rel">
                    <div class="row align-items-center">
                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">

                            <h2 class="mb-4 fw-7 txt-blue">
                {{('ru'==$lang)?'Про':''}}{{('en'==$lang)?'About':''}}{{('tu'==$lang)?'EOSTS':''}}
                 <span class="fw-6 txt-orange" itemprop="name">{{('ru'==$lang)?'EOSTS':''}}{{('en'==$lang)?'EOSTS':''}}{{('tu'==$lang)?'hakkında':''}}</span>

                       
                          </h2>

                           {!!isset($pronas->prcomp[$lang])?$pronas->prcomp[$lang]:''!!}

                        </div>

                        <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.181670454643!2d64.55307821561682!3d40.160508679105995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f5065879e9fb55b%3A0xb446833c83e8d518!2sEvroOsiyo%20Sarbon%20Trans%20Servis!5e0!3m2!1sen!2s!4v1621694617736!5m2!1sen!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- What Makes Us Special End -->







<section class="bg-light-gray wide-tb-100 pb-5 why-choose">
        <div class="container pos-rel">
          <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">


{!!('ru'==$lang)?'<span>НАШИ ОСОБЕННОСТИ </span> Почему именно нас выбирают?':''!!}
{!!('en'==$lang)?'<span> OUR FEATURES </span> Why choose us?':''!!}
{!!('tu'==$lang)?'<span> ÖZELLİKLERİMİZ </span> Neden bizi seçmelisiniz?':''!!}

                
              </h1>
            </div>
            <!-- Heading Main -->




 {!!isset($pronas->question[$lang])?$pronas->question[$lang]:''!!}
          


          </div>
        </div>
      </section>













<section class="wide-tb-100 mb-spacer-md">
        <div class="container wide-tb-100 pb-0">
          <div class="row d-flex align-items-center">
            
{!!isset($pronas->select[$lang])?$pronas->select[$lang]:''!!}              

              
          </div>
        </div>
      </section>







            <!-- Tracking Your Freight Start -->
            <section class="pos-rel bg-light-gray">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-12 p-0">
                            <img src="{{ asset(env('THEME').'/images/why-choose-us.png')}}" class="w-100" alt="" />
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="p-5 about-whoose">
                                {!!isset($pronas->vebor[$lang])?$pronas->vebor[$lang]:''!!}    
                                  

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tracking Your Freight End -->


@if($employee->count()>0)
            <!-- Our Team Start -->
            <section class="wide-tb-100 pb-0 team-section-bottom pos-rel">
                <div class="container">
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <h1 class="heading-main">
                            @if('ru'==$lang) <span>Кто стоит за EOSTS</span> Наша команда @elseif('en'==$lang) <span> Who is behind EOSTS </span> Our team @else <span> EOSTS'un arkasında kim var </span> @endif

                            
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <div class="row pb-4">
                        <!-- Team Column One -->
                         @foreach($employee as $r=>$emp)   
                        <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.{{$r}}s">


                            <div class="team-section-two">
                                <img src="{{ asset('/uploads/'.$emp->img)}}" alt="" class="rounded" />
                                <h4 class="h4-md txt-orange">{{$emp->name[$lang]}}</h4>
                                <h5 class="h5-md txt-white">{{$emp->prof[$lang]}}</h5>
                            </div>
                        </div>
                        @endforeach
                        <!-- Team Column One -->
     
                    </div>
                </div>
            </section>
            <!-- Our Team End -->
@endif

        </main>


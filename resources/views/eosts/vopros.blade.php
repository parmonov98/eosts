<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>

           
            <!-- Frequently Asked Questions Start -->
            <section class="wide-tb-100 faqs" id="faqs">
                <div class="container">
                    <div class="row">
                       
                    <div class="col-sm-12">   
                           <h1 class="heading-main">   
@if('ru'==$lang) <span>Часто задаваемые </span> вопросы @elseif('en'==$lang) <span> Frequently Asked </span> Questions @else <span> Sık Sorulan </span> Sorular @endif

                            </h1>
                        </div>
                        <!-- Heading Main -->

                    @foreach($vopros as $vop)
                        <!-- Questions -->
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                            <h4 class="h4-md mb-3">
                                {{$vop->vopros[$lang]}} 
                            </h4>
                            {!!$vop->otvet[$lang]!!}
                        </div>
                        <!-- Questions -->
                    @endforeach




                    </div>
                </div>
            </section>
            <!-- Frequently Asked Questions End -->
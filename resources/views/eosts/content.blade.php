<?php
if(!session()->has('lang')){session()->put('lang', 'ru');}
$lang = session('lang');
    ?>
@if($articless)
<!-- Welcome To Cargo Start -->
            <section class="wide-tb-100 home-welcome">
                <div class="container">
                    <div class="row flex-wrap" itemscope itemtype="ItemList">
                       

		@foreach($articless as $k=>$article)


                        <div class="col-xl-3 col-sm-6 col-xs-12" itemprop="itemListElement" itemscope
                            itemtype="#">
                            <div class="icon-box-7">
                                <img src="{{ asset('/uslugi/'.$article->img['min'])}}" itemprop="image" alt="Перевозка драгоценных грузов">
                                <h3 class="h3-xs txt-blue">
                                    <a class="text-white" href="{{ route('ushow',['cat'=>$lang,'uslug'=>$article->alias]) }}" itemprop="item">
                                        <span itemprop="name">
                                            {!!$article->title[$lang]!!}
                                        </span>
                                    </a>
                                </h3>
                            </div>
                            <div style="height: 108px; overflow: hidden;">
                            
                                {!!$article->desc[$lang]!!}
                            
                            </div>
                        </div>


		@endforeach

@endif

                    </div>
                </div>
            </section>
            <!-- Welcome To Cargo End -->

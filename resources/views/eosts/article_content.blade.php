<?php
$url = $_SERVER['HTTP_HOST'];
if(!session()->has('lang')){
    session()->put('lang', 'ru');
  }
$lang = session('lang');
  ?>


    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Новости о компании</li>
          </ol>
        </nav>

        <h1>Последнии новости</h1>
        <div class="breadcrumbs-description">Мы стараемся быть прозрачными и держать вас в курсе новостей о компании.</div>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->





<main id="body-content">

      <!-- What We Offer Start -->
      <section class="wide-tb-80 ">
        <div class="container pos-rel">
          <div class="row align-items-start">

            <div class="col-md-12 col-lg-8 blog-list">
              <div class="row">




@if(count($articles)>0)







@foreach($articles as $k=>$article)


@if($article->img!=null && $article->img['sr']!=null)


@if($article['text']!=NULL && $article['description']!=NULL)
                <!-- Blog Items -->
                <div class="col-md-6">
                  <div class="blog-warp">
                    <img src="{{ asset('/articles/') }}{{'/'.$article->img['sr']}}" alt="" class="rounded">
                    <div class="meta-box"><a href="{{ route('blCat',['cat'=>$lang,'blog'=>$article->menu->path]) }}">{{$article->menu->title[$lang]}}</a> <span>/</span> {{ is_object($article->created_at) ? $article->created_at->format('F d, Y') : ''}}</div>
                    <h4 class="h4-md mb-3"><a href="{{ route('bCatf',['cat'=>$lang,'blog'=>$article->menu->path,'id'=>$article->id]) }}">{!!$article->title[$lang]!!}"</a></h4>
                    <div>{!! $article['description'.$lang]!!}</div>
                  </div>
                </div>
                <!-- Blog Items -->
@else
                
                <!-- Blog Items -->
                <div class="col-md-6">
                  <div class="blog-warp">
                    <img src="{{ asset('/articles/'.$article->img['sr']) }}" alt="" class="rounded">
                    <div class="meta-box"><a href="{{ route('blCat',['cat'=>$lang,'blog'=>$article->menu->path]) }}">{!!$article->menu->title[$lang]!!}</a> <span>/</span> {{ is_object($article->created_at) ? $article->created_at->format('F d, Y') : ''}}</div>
                    <h4 class="h4-md mb-3" style="height: 46px;overflow: hidden;"><a href="{{ route('bCatf',['cat'=>$lang,'blog'=>$article->menu->path,'id'=>$article->id]) }}">{!!$article->title[$lang]!!}</a></h4>
                    <div style="height: 73px;overflow: hidden;">{!! $article['description'.$lang]!!}</div>
                  </div>
                </div>
                <!-- Blog Items -->

@endif




@else



@if($article['text']!=NULL && $article['description']!=NULL)
                <!-- Blog Items -->
                <div class="col-md-6">
                  <div class="blog-warp">                    
                    <div class="meta-box"><a href="{{ route('blCat',['cat'=>$lang,'blog'=>$article->menu->path]) }}">{{$article->menu->title[$lang]}}</a> <span>/</span> {{ is_object($article->created_at) ? $article->created_at->format('F d, Y') : ''}}</div>
                    <h4 class="h4-md mb-3"><a href="{{ route('bCatf',['cat'=>$lang,'blog'=>$article->menu->path,'id'=>$article->id]) }}">{!!$article->title[$lang]!!}</a></h4>
                    <div>{!! $article['description'.$lang]!!}</div>
                  </div>
                </div>
                <!-- Blog Items -->
@else
                <!-- Blog Items -->
                <div class="col-md-12">
                  <div class="blog-warp">                    
                    <div class="meta-box"><a href="{{ route('blCat',['cat'=>$lang,'blog'=>$article->menu->path]) }}">{{$article->menu->title[$lang]}}</a> <span>/</span> {{ is_object($article->created_at) ? $article->created_at->format('F d, Y') : ''}}</div>
                    <h4 class="h4-md mb-3">{!!$article->title[$lang]!!}</h4>
                    <div>{!! $article['description'.$lang]!!}</div>
                  </div>
                </div>
                <!-- Blog Items -->

@endif





@endif






@endforeach



              </div>




              <div class="text-center">
                <a href="/all/{{$lang}}" class="btn-theme bg-navy-blue">{{('ru'==$lang)?'Более старый Пост':''}}{{('en'==$lang)?'Older Post':''}}{{('tu'==$lang)?'Older Post':''}} <i class="icofont-rounded-right"></i></a>
              </div>


@else



<div class="main-title contentnull"><span>{{('ru'==$lang)?'Нет информации':''}}{{('en'==$lang)?'No information':''}}{{('tu'==$lang)?'No information':''}} </span></div>

@endif

            </div>


            <div class="col-md-12 col-lg-4">
              <!-- Add Some Left Space -->
              <aside class="sidebar-spacer row">

                <!-- Sidebar Primary Start -->
                <div class="sidebar-primary col-lg-12 col-md-6">
                  <!-- Search Widget Start -->
                  <div class="widget-wrap">
                    <h3 class="h3-md fw-7 mb-4"> {{('ru'==$lang)?'Найти':''}}{{('en'==$lang)?'Search':''}}{{('tu'==$lang)?'Search':''}}</h3>
                    <form action="{{route('obSearch')}}" class="flex-nowrap col ml-auto footer-subscribe p-0">@csrf
                      <input type="text" name="query" class="form-control" placeholder=" Поиск">
                      <button type="submit" class="btn btn-theme bg-orange"><i class="icofont-search p-0"></i></button>
                    </form>
                  </div>


                  <!-- Search Widget End -->

                  <!-- Recent Post Widget Start -->
                  <div class="widget-wrap">
                    <h3 class="h3-md fw-7 mb-4">{{('ru'==$lang)?'Последние новости':''}}{{('en'==$lang)?'Last news':''}}{{('tu'==$lang)?'Last news':''}}</h3>
                    <div class="blog-list-footer">

                        @foreach($pub as $k => $pubs)
                      <ul class="list-unstyled">
                        <li>
                          <div class="media">
                            <div class="post-thumb">
                              <img src="{{ asset('/articles/'.$pubs->img['min'])}}" alt="" class="rounded-circle">
                            </div>
                            <div class="media-body post-text">
                              <h5 class="mb-3 h5-md" style="height: 21px;overflow: hidden;">
                                <a href="{{ route('bCatf',['cat'=>$lang, 'blog'=>$pubs->menu->path, 'id'=>$pubs->id]) }}" title="{!!$pubs->title[$lang]!!}">
                                  {!!$pubs->title[$lang]!!}</a></h5>
                               <div style="height: 37px;overflow: hidden;"> {!!$pubs['description'.$lang]!!}</div>
                            </div>
                          </div>
                        </li>
                  @endforeach

                      </ul>

                    </div>
                  </div>
                  <!-- Recent Post Widget End -->

                  <!-- Sidebar Support Widget Start -->
                  <div class="widget-wrap text-center bg-light-gray rounded py-5">
                    <div class="mb-2"><i class="icofont-headphone-alt icofont-4x"></i></div>
                    <h3 class="h3-md fw-5 txt-white mb-4">Нужно помощ?</h3>
                    <p>У нас имееться Call-center <br>24/7</p>
                    <a href="#" class="btn-theme bg-orange mt-3"> Связаться <i class="icofont-rounded-right"></i></a>
                  </div>
                  <!-- Sidebar Support Widget End -->
                </div>
                <!-- Sidebar Primary End -->


              </aside>
              <!-- Add Some Left Space -->
            </div>

          </div>

        </div>
      </section>
      <!-- What We Offer End -->
    </main>

















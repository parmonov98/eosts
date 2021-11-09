<?php
	if(!session()->has('lang')){
			session()->put('lang', 'oz');
		}
	$lan = session('lang');
?>






    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
    

        <h2>{{ ('tu'==$lan)?'Arama Sonuçları':'' }}{{ ('en'==$lan)?'Search results':'' }}{{ ('ru'==$lan)?'Поиск по сайту':'' }}:
          @if(isset($products))

		    {{ ('tu'==$lan)?'bulunan veri miktarı':'' }}{{ ('en'==$lan)?'the amount of data found':'' }}{{ ('ru'==$lan)?'найденный':'' }}

          {!!' - (<strong> '.count($products).' </strong>) '!!}
          @endif
          <strong>
          {!! isset($search)?$search:''!!}
          </strong></h2>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->




    <!-- Main Body Content Start -->
    <main id="body-content">

      <!-- What We Offer Start -->
      <section class="wide-tb-80">
        <div class="container pos-rel">
          <div class="row align-items-start">

            <div class="col-md-12 col-lg-8">
              <div class="row">





@if(isset($message))

	<h2>

	@if(isset($search))
	<u>{{$search}}</u>
	@endif
	{!!$message!!} </h2>

@endif

@if(isset($articles))
{{$articles}}
@endif

@if(isset($products))



			@foreach($products as $product)

<?php
$phrase  = $product['description'.$lan];
$healthy = array($search);
$yummy   = array("<strong id='foncolor'>$search</strong>");
$text = str_replace($healthy, $yummy, $phrase);

$ph  = $product->title[$lan];
$heas = array($search);
$title = str_replace($heas, $yummy, $ph);
?>




 
  <!-- Single Comment -->
          <div class=" mb-4">
		@if(isset($product->img['min']))

	@if($product['text'.$lan] !=NULL)
		  <a href="{{ route('bCatf',['cat'=>$lan,'blog'=>$product->menu->path,'id'=>$product->id]) }}">
	@endif

      <img align="left" style="width: 18%;margin: 7px;" src="{{ asset('/articles/'.$product->img['min']) }}" alt="{{ $product->title[$lan]}}">
	@if($product['text'.$lan] !=NULL)
	  </a>
	@endif

		@endif






			<div class="media-body" id="search_text">
              <p style="padding: 0px;margin: 0px;">
			  @if($product['text'.$lan] !=NULL)
			  <a href="{{ route('bCatf',['cat'=>$lan,'blog'=>$product->menu->path,'id'=>$product->id]) }}" style="font-size: 17px;padding-bottom: 2px;display: block;font-weight: 600;">
			  @endif
			  {{ $product->title[$lan]}}
			  @if($product['text'.$lan] !=NULL)
			  </a>
			  @endif
			  </p>
           {!! $text !!}
            </div>
          </div>



			@endforeach

			<hr>
				      	<div class="row" style="padding-top: 30px;">
		<div class="col-lg-6 text-center theme-pagination">{{ $products->appends(request()->except('page'))->links() }}</div>

		</div>
			@endif













                <!-- Blog Items -->
                <div class="col-md-12">
                  <div class="text-left">
                   




                    

                  </div>

                  




                 

                </div>
                <!-- Blog Items -->


              </div>

            </div>











            <div class="col-md-12 col-lg-4">
              <!-- Add Some Left Space -->
              <aside class="sidebar-spacer row">

                <!-- Sidebar Primary Start -->
                <div class="sidebar-primary col-lg-12 col-md-6">


              <!-- Search Widget Start -->
              <div class="widget-wrap">
                <h3 class="h3-md fw-7 mb-4">{{('ru'==$lan)?'Найти':''}}{{('en'==$lan)?'Search':''}}{{('tu'==$lan)?'Arama':''}}</h3>
                <form action="{{route('obSearch')}}" class="flex-nowrap col ml-auto footer-subscribe p-0" method ="post">
                	@csrf
                  <input type="text" name="query" class="form-control" placeholder="Search …">
                  <button type="submit" class="btn btn-theme bg-orange"><i class="icofont-search p-0"></i></button>
                </form>
              </div>
              <!-- Search Widget End -->






                  <!-- Recent Post Widget Start -->
                  <div class="widget-wrap">
                    <h3 class="h3-md fw-7 mb-4">{{('ru'==$lan)?'Последние новости':''}}{{('en'==$lan)?'Last news':''}}{{('tu'==$lan)?'Son haberler':''}}</h3>
                    <div class="blog-list-footer">
                      <ul class="list-unstyled">
                        
                        @foreach($pub as $k => $pubs)

                        <li>
                          <div class="media">
                            <div class="post-thumb">
                              <img src="{{ asset('/articles/'.$pubs->img['min'])}}" alt="" class="rounded-circle">
                            </div>
                            <div class="media-body post-text">
                              <h5 class="mb-3 h5-md" style="height: 21px;overflow: hidden;"><a href="{{ route('bCatf',['cat'=>$lan, 'blog'=>$pubs->menu->path, 'id'=>$pubs->id]) }}" title="{!!$pubs->title[$lan]!!}">{!!$pubs->title[$lan]!!}</a></h5>
                               <div style="height: 37px;overflow: hidden;"> {!!$pubs['description'.$lan]!!}</div>
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
  
                    <h3 class="h3-md fw-5 txt-white mb-4">{{('ru'==$lan)?'Нужно помощ?':''}} {{('en'==$lan)?'Need help?':''}} {{('tu'==$lan)?'Yardıma mı ihtiyacınız var?':''}}</h3>
                    <p>{{('ru'==$lan)?'У нас имееться Call-center':''}} {{('en'==$lan)?'We have a Call-center':''}} {{('tu'==$lan)?'Çağrı merkezimiz var':''}} <br>24/7</p>
                    <a href="#" class="btn-theme bg-orange mt-3"> {{('ru'==$lan)?'Связаться':''}} {{('en'==$lan)?'Contact':''}} {{('tu'==$lan)?'Temas':''}} <i class="icofont-rounded-right"></i></a>


                  </div>
                  <!-- Sidebar Support Widget End -->

                </div>
                <!-- Sidebar Secondary Start -->

              </aside>
              <!-- Add Some Left Space -->
            </div>

          </div>

        </div>
      </section>
      <!-- What We Offer End -->
    </main>






<?php
	if(!session()->has('lang')){
			session()->put('lang', 'oz');
		}
	$lan = session('lang');
?>





<div class="col-md-12 col-sm-12 col-xs-12" id="blog" >
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: #fbfbfb;padding: 30px;    margin-top: 10px;">



<h2 style="font-size: 20px;">{{ ('oz'==$lan)?'Қидириш натежалари':'' }}{{ ('uz'==$lan)?'Qidirish natejalari':'' }}{{ ('ru'==$lan)?'Поиск по сайту':'' }}:
          @if(isset($products))

		    {{ ('oz'==$lan)?'топилган маълумотлар сони':'' }}{{ ('uz'==$lan)?'topilgan ma`lumotlar soni':'' }}{{ ('ru'==$lan)?'найденный':'' }}

          {!!' - (<strong> '.count($products).' </strong>) '!!}
          @endif
          <strong>
          {!! isset($search)?$search:''!!}
          </strong></h2>



<!-- START CONTENT -->
				        <div id="content-single" class="content group">
				            <div class="hentry hentry-post blog-big group ">



				                <!-- post content -->
				                <div class="the-content single group">


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




 <hr />
  <!-- Single Comment -->
          <div class=" mb-4">
		@if(isset($product->img['min']))

	@if($product['text'.$lan] !=NULL)
		  <a href="{{ route('bCatf',['cat'=>$lan,'blog'=>$product->menu->path,'id'=>$product->id]) }}">
	@endif

      <img align="left" style="width: 12%;margin-bottom: 5px;margin-right: 5px;" src="{{ asset('/articles/'.$product->img['min']) }}" alt="{{ $product->title[$lan]}}">
	@if($product['text'.$lan] !=NULL)
	  </a>
	@endif

		@endif






			<div class="media-body" id="search_text">
              <p style="padding: 0px;margin: 0px;">
			  @if($product['text'.$lan] !=NULL)
			  <a href="{{ route('bCatf',['cat'=>$lan,'blog'=>$product->menu->path,'id'=>$product->id]) }}" style="color: #444;font-size: 17px;padding-bottom: 2px;display: block;font-weight: 600;">
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
		<div class="col-lg-6">{{ $products->appends(request()->except('page'))->links() }}</div>

		</div>
			@endif

			

				                </div>

				                <div class="clear"></div>
				            </div>


				            <!-- START COMMENTS -->

				            <!-- END COMMENTS -->
				        </div>
				        <!-- END CONTENT -->



            </div>
          </div>
        </div>




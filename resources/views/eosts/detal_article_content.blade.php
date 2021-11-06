

    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('blCat',['cat'=>$cat,'blog'=>$articles->menu->path]) }}">{!!$articles->menu->title[$cat]!!}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$articles->title[$cat]}}</li>
          </ol>
        </nav>

        <h1>{!!$articles->menu->title[$cat]!!}</h1>
        <div class="breadcrumbs-description">{{$articles->title[$cat]}}</div>
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
                <!-- Blog Items -->
                <div class="col-md-12">
                  <div class="text-left">
                    <img src="{{ asset('/articles/') }}{{'/'.$articles->img['max']}}" alt="" class="rounded mb-4">
                    <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                    <h4 class="h4-md mb-3 fw-7 txt-blue">Logistics Should Brace for Changes in Cargo</h4>

                    {!!$articles['text'.$cat]!!}
                    

                  </div>

                  






                  <!-- Tags & Share Box -->
                  <div class="row align-items-center mt-5">
                    <div class="col-md-auto">
                      <div class="tags">
                        <a href="#">Outstanding</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Travel</a>
                      </div>
                    </div>
                    <div class="col-md-auto ml-auto">
                      <div class="share-this">
                        <div class="d-inline-flex align-items-center">
                          Share it:
                          <a href="#" class="rounded-circle tw" data-toggle="tooltip" title=""
                            data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                          <a href="#" class="rounded-circle ff" data-toggle="tooltip" title=""
                            data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                          <a href="#" class="rounded-circle ln" data-toggle="tooltip" title=""
                            data-original-title="Linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Tags & Share Box -->

@if( $articles->izox == 1 )
<hr>



                  <!-- Comments List -->
                  <div class="commnets-reply">
                    <div class="heading-left-border">
                      {{count($articles->comments)}} КОММЕНТАРИИ
                    </div>
                    
 @if(count($articles->comments)!==0 and $articles->izox == 1)




@if(count($articles->comments) > 0)

	@foreach($articles->comments->groupBy('article_id') as $k => $comments)
		@include(config('settings.theme').'.comment',['items' => $comments])
	@endforeach

	       
@endif



       @endif



                  </div>
                  <!-- Comments List -->

@endif
									@if ($status = Session::get('status'))
									<div class="alert alert-success">
									<button class="close" data-dismiss="alert">×</button>
									<strong>{{ $status }}</strong>
									</div>
									@endif
									@if ($error = Session::get('error'))
									<div class="alert alert-warning alert-dismissible fade show">
									<button class="close" data-dismiss="alert">×</button>
									<strong>{{ $error }}</strong>
									</div>
									@endif


                  <!-- Reply Comment Form -->
                  <div class="heading-left-border">
                   {{('ru'==$cat)?'Оставьте ответ':''}}{{('en'==$cat)?'Leave a reply':''}}{{('tu'==$cat)?'Leave a reply':''}}  
                  </div>
                  <form action="{{ route('comments') }}" method="post" novalidate="novalidate" class="rounded-field">
                  	@csrf
                  	@if(!Auth::check()) 
                    <div class="form-row mb-4">
                      <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    @endif
					<input id="comment_post_ID" type="hidden" name="comment_post_ID" value="{{ $articles->id }}" />
					<input id="cats" type="hidden" name="cats" value="{{ $cat }}" />
					<input id="comment_parent" type="hidden" name="comment_parent" value="0" />
					<input id="comment_parent_ur" type="hidden" name="comment_parent_ur" value="{{ $articles->menu->path }}" />
                    <div class="form-row mb-4">
                      <div class="col">
                        <textarea rows="7" name="text" placeholder="Message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <button type="submit" class="form-btn btn-theme bg-orange">Post Comment <i
                          class="icofont-rounded-right"></i></button>
                    </div>
                  </form>
                  <!-- Reply Comment Form -->

                  <!-- Spacer For Medium -->
                  <div class="w-100 d-none d-sm-block spacer-70"></div>
                  <!-- Spacer For Medium -->

                  <!-- Related Post -->
                  <div class="heading-left-border">
            	{{('ru'==$cat)?'Вы Можете Также Подобно':''}}{{('en'==$cat)?'You May Also Like':''}}{{('tu'==$cat)?'You May Also Like':''}}  
                    
                  </div>
                  <div class="row">


@foreach($pub as $k => $pubs)
                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4">
                      <div class="blog-warp">
                        <img src="{{ asset('/articles/'.$pubs->img['min'])}}" alt="{!!$pubs->title[$cat]!!}" title="{!!$pubs->title[$cat]!!} class="rounded">
                      
                        <div class="meta-box" ><a href="{{ route('blCat',['cat'=>$cat,'blog'=>$pubs->menu->path]) }}">
                        	
                        	{!! $pubs->menu->title[$cat]!!}</a> <span>/
                        	</span>{{ is_object($pubs->created_at) ? $pubs->created_at->format('F d, Y') : ''}}</div>
                        <h4 class="h4-md mb-3" style="height: 24px;overflow: hidden;"><a href="{{ route('bCatf',['cat'=>$cat, 'blog'=>$pubs->menu->path, 'id'=>$pubs->id]) }}" title="{!!$pubs->title[$cat]!!}">{!!$pubs->title[$cat]!!}</a></h4>
                        <div style="height: 135px;overflow: hidden;"> {!!$pubs['description'.$cat]!!}</div>
                      </div>
                    </div>
                    <!-- Blog Items -->
	@endforeach



                    <!-- Blog Items -->
                  </div>
                  <!-- Related Post -->
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
                <h3 class="h3-md fw-7 mb-4">Search</h3>
                <form action="{{route('obSearch')}}" class="flex-nowrap col ml-auto footer-subscribe p-0" method ="post">
                	@csrf
                  <input type="text" name="query" class="form-control" placeholder="Search …">
                  <button type="submit" class="btn btn-theme bg-orange"><i class="icofont-search p-0"></i></button>
                </form>
              </div>
              <!-- Search Widget End -->






                  <!-- Recent Post Widget Start -->
                  <div class="widget-wrap">
                    <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                    <div class="blog-list-footer">
                      <ul class="list-unstyled">
                        
                        @foreach($pub as $k => $pubs)

                        <li>
                          <div class="media">
                            <div class="post-thumb">
                              <img src="{{ asset('/articles/'.$pubs->img['min'])}}" alt="" class="rounded-circle">
                            </div>
                            <div class="media-body post-text">
                              <h5 class="mb-3 h5-md" style="height: 21px;overflow: hidden;"><a href="{{ route('bCatf',['cat'=>$cat, 'blog'=>$pubs->menu->path, 'id'=>$pubs->id]) }}" title="{!!$pubs->title[$cat]!!}">{!!$pubs->title[$cat]!!}</a></h5>
                               <div style="height: 37px;overflow: hidden;"> {!!$pubs['description'.$cat]!!}</div>
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
                <!-- Sidebar Secondary Start -->

              </aside>
              <!-- Add Some Left Space -->
            </div>

          </div>

        </div>
      </section>
      <!-- What We Offer End -->
    </main>


























































	@foreach($items as $item)

          <!--          
                    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (Request::url() === $actual_link) {
                        $act = 'active';
                    }else{$act='';} 
                    
 -->
 

 <li class="nav-item {{($item->active)?'active':''}}" itemprop="itemListElement" itemscope="" itemtype="#">

        <a class="nav-link {{($item->active)?'active':''}}" href="{{($item->hasChildren())?'#':$item->url()}}">{{$item->title}}</a><meta itemprop="name" content="{{$item->title}}" />

        @if($item->hasChildren())
             <ul class="submenu">
                @include(env('THEME').'.customMenuItems',['items'=>$item->children()])
			</ul>
        @endif

    </li>

@endforeach


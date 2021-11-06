	@foreach($items as $item)

 <li class="nav-item {{($item->active)?'active':''}}" itemprop="itemListElement" itemscope="" itemtype="#">

        <a class="nav-link {{($item->active)?'active':''}}" href="{{($item->hasChildren())?'#':$item->url()}}">{{$item->title}}</a><meta itemprop="name" content="{{$item->title}}" />

        @if($item->hasChildren())
             <ul class="submenu">
                @include(env('THEME').'.customMenuItems',['items'=>$item->children()])
			</ul>
        @endif

    </li>

@endforeach


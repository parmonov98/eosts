	@foreach($items as $item)

 <li>

        <a  href="{{$item->url()}}">
<i class="icofont-simple-right"></i><span>{{$item->title}}</span></a>
    </li>

@endforeach

									
								@foreach($items as $item)	
								
								@if($item->heddin == 1)




                    <div class="media pb-5">


	            @if(!empty($item->user->image))
              <img class="thumb rounded-circle" src="{{ asset(env('THEME').'/images/users/'.$item->user->image)}}" alt="">
	            @else
              <img class="thumb rounded-circle" src="{{ asset(env('THEME').'/images/users/user.png') }}" alt="">
	            @endif

                      <div class="media-body">
                        <div class="border-style d-md-flex justify-content-between">
                          <h4 class="h4-xs txt-orange">	            
                          	@if(!empty($item->user->image))
				{{$item->user->name}}
	            @else
	            {{$item->name}}
	            @endif	</h4>
                          <small class="txt-blue">{{ is_object($item->created_at) ? $item->created_at->format('H:i d F Y') : ''}}</small>
                        </div>{{$item->text}}
                        <p><a href="#" class="btn-theme bg-navy-blue mt-3">Reply <i class="icofont-ui-reply"></i></a>
                        </p>
                      </div>
                    </div>



				                @endif   
				                  
				                  @endforeach  

@foreach($items as $item)

		<tr>
			<td style="text-align: left;">

				@if(Gate::allows('EDIT_MENU'))

			 <a href="{{route('menus.edit',['menu' => $item->id])}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>



			 {{ $paddingLeft }} @if($item->hasChildren()) <i class="fa fa-folder-open"></i>@else	<i class="fa fa-share"></i> @endif

			 <a href="{{ route('menus.edit',['menu' => $item->id])}}" title="{!! $item->url()  !!}">

			 {{$item->title}} </a>
				@else
				{{$item->title}}
				@endif

			</td>

			<td align="center">
			 @if($item->hasChildren())

			@else
				@if(Gate::allows('DELETE_MENU'))

			{!! Form::open(['url' => route('menus.destroy',['menu'=> $item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
												{!! Form::close() !!}
				@endif
			@endif
			</td>
		</tr >
		 @if($item->hasChildren())

		        @include(config('settings.theme').'.admin.menus.custom-menu-items', array('items' => $item->children(),'paddingLeft' => $paddingLeft.".."))

		 @endif

@endforeach


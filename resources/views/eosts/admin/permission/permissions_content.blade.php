<div id="content-page" class="content group">
	<div class="hentry group">
	
	<h3 class="title_page">Привилегии</h3>
	@if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>									
    @endif
	<form action="{{ route('permissions.store') }}" method="POST">
		{{ csrf_field() }}
		
		<div class="short-table white">
		
			<table class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
				
				<thead>
					
					<th>Привилегии</th>
					@if(!$roles->isEmpty())
					
						@foreach($roles as $item)
							<th>{{ $item->name}}</th>
						@endforeach
					
					@endif
					
				</thead>
				<tbody>
					
					@if(!$priv->isEmpty())
					
						@foreach($priv as $val)
							<tr>
								
								<td>{{ $val->atama['ru'] }}</td>
									@foreach($roles as $role)
										<td>
											@if($role->hasPermission($val->name))
												<input checked name="{{ $role->id }}[]"  type="checkbox" value="{{ $val->id }}">
											@else
												<input name=" {{ $role->id }}[]"  type="checkbox" value="{{ $val->id }}">
											@endif	
										</td>
									@endforeach
							</tr>
						@endforeach
					
					@endif

				</tbody>
				
				
			</table>
			
			
		</div>
		
		<input class="btn btn-primary btn-block" type="submit" value="Обновить" />

		
	</form>

	
	</div>
</div>
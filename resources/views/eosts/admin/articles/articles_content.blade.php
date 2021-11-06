
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Менеджер статья</h2>
									@if ($status = Session::get('status'))
									<div class="alert alert-success">
									<button class="close" data-dismiss="alert">×</button>
									<strong>{{ $status }}</strong>
									</div>
									@endif
		@if(Gate::allows('ADD_ARTICLES'))						
			<a class="btn btn-primary btn-lg " href="{{route('article.create')}}"><i class="fa fa-plus"></i></a>
		@endif
<hr  style="margin-top: 10px;margin-bottom: 10px;border-top: 1px #9e9e9e dotted;">
				                <div class="short-table white">
	@if($menus)
		<form method="post" id="hid1" class="form-horizontal" action="{{ url('/admins/articleaaaa') }}">
{!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null,['class' => 'btn btn-view-over-the-town-1 form-control select2','id'=>'hid','style'=>"border: 1px solid #b6b6b6;width: 90%;"]) !!}

	{{ csrf_field() }}
		  {!! Form::button('Ok', ['class' => 'btn btn-view-over-the-town-1','id'=>'bat','type'=>'submit']) !!}


		</form>
	@endif
		<div class="tournamentsTable">
@if($articles)
				        <table  class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr >
				                                <th style="width: 50px;text-align: center;">ID</th>
				                                <th>Заголовка</th>
				                               <th style="width: 100px;text-align: center;">Фото</th>

				                                <th style="text-align: center;">Раздел</th>
				                                <th style="width: 100px;text-align: center;">Режим</th>
				                                <th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
				                            </tr>
				                        </thead>
				                        <tbody>

											@foreach($articles as $article)
											
											<tr>
				                                <td style="text-align: center;">{{$article->id}}</td>
		                                <td class="align-left">
		                                @if(Gate::allows('UPDATE_ARTICLES'))	
		                                <a href="{{route('article.edit',['article'=>$article->id]) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>
		                                {!! Html::link(route('article.edit',['article'=>$article->id]),$article->title['ru']) !!}
		                                @else
		                                	{{$article->title['ru']}}
		                                @endif

		                               </td>

				                                <td>
													@if(isset($article->img['min']))

				{{ Html::image(asset('/articles/'.$article->img['min']),'',['style'=>'width:80px;']) }}
													@endif
												</td>
				                                <td>{{$article->menu->title['ru']}}</td>

				                        <td style="font-size:20px;text-align: center;">
@if($article->heddin == 0)
	<i class="fa fa-eye-slash"></i>
	@else
	<i class="fa fa-eye"></i>
	@endif
</td>

				                                <td>
								 @if(Gate::allows('DELETE_ARTICLES'))

												{!! Form::open(['url' => route('article.destroy',['article'=>$article->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
												{!! Form::close() !!}
										@endif


												</td>
											 </tr>
											@endforeach

				                        </tbody>
				                    </table>
				                </div>





         @endif
			        </div>
				            </div>



				            <!-- START COMMENTS -->

				            <div class="wrap_result"></div>
				          @if($articles)
				          <div id="pagination" align="center">

                      {{ $articles->appends(request()->except('page'))->links() }}

				            <!-- END COMMENTS -->
				            </div>
				          @endif


                        </div>





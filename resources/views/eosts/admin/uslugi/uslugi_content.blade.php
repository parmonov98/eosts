
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Менеджер услуги</h2>
									@if ($status = Session::get('status'))
									<div class="alert alert-success">
									<button class="close" data-dismiss="alert">×</button>
									<strong>{{ $status }}</strong>
									</div>
									@endif
							
			<a class="btn btn-primary btn-lg " href="{{route('uslug.create')}}"><i class="fa fa-plus"></i></a>
		
<hr  style="margin-top: 10px;margin-bottom: 10px;border-top: 1px #9e9e9e dotted;">
				                <div class="short-table white">
		<div class="tournamentsTable">
@if($uslugi->count()>0)
				        <table  class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr >
				                                <th style="width: 50px;text-align: center;">ID</th>
				                                <th>Заголовка</th>
				                               <th style="width: 100px;text-align: center;">Фото</th>

				                                <th style="width: 50px;text-align: center;"><i class="fa fa-pencil-square-o"></i></th>
				                                <th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
				                            </tr>
				                        </thead>
				                        <tbody>

											@foreach($uslugi as $uslug)
											
											<tr>
				                                <td style="text-align: center;">{{$uslug->id}}</td>
		                                <td class="align-left">		                               
		                                	{{$uslug->title['ru']}}   
		                               </td>

				                                <td align="center">
													@if(isset($uslug->img['min']))

				{{ Html::image(asset('/uslugi/'.$uslug->img['min']),'',['style'=>'width:50px;']) }}
													@endif
												</td>
				                                <td><a href="{{route('uslug.edit',['uslug'=>$uslug->id]) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a></td>

				                   

				                                <td>
								

												{!! Form::open(['url' => route('uslug.destroy',['uslug'=>$uslug->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
												{!! Form::close() !!}
									


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
				          @if($uslugi)
				          <div id="pagination" align="center">

                      {{ $uslugi->appends(request()->except('page'))->links() }}

				            <!-- END COMMENTS -->
				            </div>
				          @endif


                        </div>





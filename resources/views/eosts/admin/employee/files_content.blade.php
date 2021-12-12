
	<div id="content-page" class="content group">
				            <div class="hentry group">
										 {!! Html::link(route('employee.create'),'+',['class' => 'btn btn-primary btn-lg ']) !!}
				                <h2>Bizning jamoamiz</h2>
				        <div class="short-table white">


                            <div class="tournamentsTable">
@if($files)
				                    <table class="table table-striped" style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                <th class="align-left">ID</th>
				                                <th>Ism</th>
				                                <th>Kasb</th>
				                                <th style="width: 150px;text-align: center;">Rasm</th>
  				                                <th style="width: 50px;text-align: center;"><i class="fa fa-pencil-square-o"></i></th>
				                                <th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
				                            </tr>
				                        </thead>
				                        <tbody>

											@foreach($files as $file)
											<tr>
                                <td class="align-left">{{$file->id}}</td>
                                <td class="align-left">{{$file->name['ru']}}</td>
                                <td class="align-left">{{$file->prof['ru']}}</td>



				                                <td align="center">
													@if(isset($file->img))
				{{ Html::image(asset('/uploads/'.$file->img),'',['style'=>'width:50px;']) }}
													@endif
												</td>

  <td><a href="{{route('employee.edit',['employee'=>$file->id]) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a></td>
				                                <td>
												{!! Form::open(['url' => route('employee.destroy',['employee'=>$file->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
												{!! Form::close() !!}

												</td>
											 </tr>
											@endforeach

				                        </tbody>
				                    </table>
				                </div>



								  </div>

         @endif
                        </div>

				             <div class="wrap_result"></div>


				            <!-- START COMMENTS -->
				            <div id="comments">



				            </div>
				            <div class="wrap_result"></div>
				          @if($files)
				          <div class="pagination" align="center">
				             {{$files->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



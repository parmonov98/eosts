
	<div id="content-page" class="content group">
				            <div class="hentry group">
										 {!! Html::link(route('slider.create'),'+',['class' => 'btn btn-primary btn-lg ']) !!}
				                <h2>Фото для слайдов  </h2>
				        <div class="short-table white">


                            <div class="tournamentsTable">
@if($sliders)
				                    <table class="table table-striped" style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th style="width: 50px;text-align: center;">ID</th>
				                                <th>Заголовка</th>
				                                <th style="width: 100px;text-align: center;">Фото</th>
				                                <th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
				                            </tr>
				                        </thead>
				                        <tbody>
											@foreach($sliders as $file)
											<tr>
				                                <td class="align-left">{{$file->id}}</td>
				                                <td class="align-left">

				                                {{ $file->name['title']['ru'] }}

				                               </td>



				                                <td>
													@if(isset($file->img))
				{{ Html::image(asset('/sliders/'.$file->img['min']),'',['style'=>'width:50px;']) }}
													@endif
												</td>

</td>
				                                <td>
												{!! Form::open(['url' => route('slider.destroy',['slider'=>$file->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
				          @if($sliders)
				          <div class="pagination" align="center">
				             {{$sliders->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



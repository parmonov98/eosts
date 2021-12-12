
	<div id="content-page" class="content group">
				            <div class="hentry group">
										 {!! Html::link(route('maps.create'),'+',['class' => 'btn btn-primary btn-lg','style'=>'margin-bottom: 5px;']) !!}
				               <strong style="font-size: 2rem; padding: 10px; " align="right"> Google xarita </strong>
    @if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>									
    @endif
    @if ($error = Session::get('error'))
	<div class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $error }}</strong>
	</div>									
    @endif


				        <div class="short-table white">




<hr>



@if($maps->count()>0)
	        <table  class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
	                        <thead>
	                            <tr >
	                                <th style="width: 50px;text-align: center;">ID</th>
	                                <th>Nomlanishi</th>
	                                <th style="width: 50px;text-align: center;"><i class="fa fa-pencil-square-o"></i></th>
	                                <th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
	                            </tr>
	                        </thead>
	                        <tbody>

											@foreach($maps as $key=>$map)
											
											<tr>
				                                <td style="text-align: center;">{{++$key}}</td>
		                                <td class="align-left">
		                              
		                                	{{$map->title['ru']}}

		                               </td>

              <td>
               <a href="{{route('maps.edit',['map'=>$map->id]) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>	
              </td>
				                                
				                        

				                                <td>
								 @if(Gate::allows('DELETE_ARTICLES'))

												{!! Form::open(['url' => route('maps.destroy',['map'=>$map->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
												{!! Form::close() !!}
										@endif


												</td>
											 </tr>
											@endforeach

				                        </tbody>
				                    </table>
				      
         @endif



















				             <div class="wrap_result"></div>


				            <!-- START COMMENTS -->
				            <div id="comments">



				            </div>
				            <div class="wrap_result"></div>
				          @if($maps)
				          <div class="pagination" align="center">
				             {{$maps->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



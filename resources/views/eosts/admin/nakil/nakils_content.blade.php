
	<div id="content-page" class="content group">
				            <div class="hentry group">
										 {!! Html::link(route('nakil.create'),'+',['class' => 'btn btn-primary btn-lg','style'=>'margin-bottom: 5px;']) !!}
				               <strong style="font-size: 2rem; padding: 10px; " align="right"> Наши клиенты </strong>
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




@if($setname)
<div class="card-body">
                <div class="row">
@foreach($setname as $file)
                  <div class="col-sm-3" style=" padding-bottom: 5px;">
                  @if(isset($file->img))
                  <a href="{{route('nakil.edit',['nakil'=>$file->id]) }}" >
				{{ Html::image(asset('/nakil/'.$file->img),'',['style'=>'width:100%;']) }}
			</a>
													@endif
{!! Form::open(['url' => route('nakil.destroy',['nakil'=>$file->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
	    {{ method_field('DELETE') }}
	    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger btn-block','type'=>'submit']) !!}
	{!! Form::close() !!}
                  </div>
@endforeach

  @endif







 </div> </div>








				             <div class="wrap_result"></div>


				            <!-- START COMMENTS -->
				            <div id="comments">



				            </div>
				            <div class="wrap_result"></div>
				          @if($setname)
				          <div class="pagination" align="center">
				             {{$setname->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



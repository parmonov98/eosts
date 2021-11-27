
	<div id="content-page" class="content group">
				            <div class="hentry group">
										 {!! Html::link(route('gallery.create'),'+',['class' => 'btn btn-primary btn-lg','style'=>'margin-bottom: 5px;']) !!}
				               <strong style="font-size: 2rem; padding: 10px; " align="right"> Фото галерея </strong>
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




@if($gallerys)
<div class="card-body">
                <div class="row">
@foreach($gallerys as $file)
                  <div class="col-sm-2" style=" padding-bottom: 5px;">
 @if(isset($file->img))
 <a href="{{route('gallery.edit',['gallery'=>$file->id]) }}">
		<div style="position: relative; width: 100%;  border-radius: 4px 4px 0px 0px;" >
			<img src="{{asset('/gallery/'.$file->img['min'])}}" width="100%">


		</div></a>
@endif

{!! Form::open(['url' => route('gallery.destroy',['gallery'=>$file->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
	    {{ method_field('DELETE') }}
	    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger btn-block','style'=>'border-radius: 0px 0px 4px 4px;','type'=>'submit']) !!}
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
				          @if($gallerys)
				          <div class="pagination" align="center">
				             {{$gallerys->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



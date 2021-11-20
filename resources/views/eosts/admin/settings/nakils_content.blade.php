
	<div id="content-page" class="content group">
				            <div class="hentry group">
	<p>	<strong style="font-size: 2.5rem; padding: 10px; " align="right"> Наши клиенты </strong>
		</p>
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

{!! Form::open(['url' => route('setNakilSav') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="row">
  <div class="col-md-6">Названия: <input type="text" class="form-control" name="name" id=""></div>
  <div class="col-md-6"><input type="file" name="file" id="file" size="2048">

Размер <strong> 2 МБ</strong> (в формате <strong>.png, .gif, .jpeg, .jpg </strong>) файл можно отправить  
</div>
</div>



</div>

		</div>

		<br />

	

	{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}

{!! Form::close() !!}















@if($setname)
<div class="card-body">
                <div class="row">
@foreach($setname as $file)
                  <div class="col-sm-2" style=" padding-bottom: 5px;">
                  @if(isset($file->img))
				{{ Html::image(asset('/nakil/'.$file->img),'',['style'=>'width:100%;']) }}
													@endif
{!! Form::open(['url' => route('setNakildel',['id'=>$file->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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



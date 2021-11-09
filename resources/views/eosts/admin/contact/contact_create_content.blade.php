
@if($comment)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Вопрос или предложение {{$comment->name?$comment->name:''}}</h2>
				                <div class="short-table white"> 

		<hr>
<a href="{{ route('mpdf',['id'=>$comment->id])}}">Скачать вопрос или предложение в формате <i class="fa fa-file-pdf-o"></i> pdf</a>
	{!! Form::open(['url' => route('contact.update',['contact'=>$comment->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

<p><strong>Имя:</strong> {{$comment->name}}</p>
<p><strong>E-mail:</strong> {{$comment->email}}</p>

<p><strong>ТТекст:</strong> {!!$comment->message!!}</p>
<hr>


		@if(isset($comment->id))
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="id" value="{{$comment->id}}">
		@endif


			</div>
			<div class="msg-error"></div>


	            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
            </div>

	{!! Form::close() !!}

				        </div>
				        </div>
				        </div>
@endif


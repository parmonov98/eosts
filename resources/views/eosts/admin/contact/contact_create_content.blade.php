
@if($comment)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>{{$comment->name?$comment->name:''}}нинг савол ёки таклифлари</h2>
				                <div class="short-table white">

		<hr>
<a href="{{ route('mpdf',['id'=>$comment->id])}}">Савол ёки таклифларни <i class="fa fa-file-pdf-o"></i> pdf кўринишида юклаб олиш</a>
	{!! Form::open(['url' => route('contact.update',['contact'=>$comment->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

<p><strong>Исми:</strong> {{$comment->name}}</p>
<p><strong>E-mail:</strong> {{$comment->email}}</p>
<p><strong>Телефони:</strong> {{$comment->site}}</p>
<p><strong>Тулиқ матни:</strong> {!!$comment->message!!}</p>
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



@if($comment)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>{{ is_object($comment->created_at) ?$comment->created_at->format('d.m.Y H:s') : ''}} даги хатоликлар</h2>
				                <div class="short-table white">

		<hr>

<h2><a href="{!!$comment->url!!}" target="_blank">Хатоси мавжуд бўлган саҳифага ўтиш</a></h2>

	{!! Form::open(['url' => route('contact.update',['contact'=>$comment->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

<p><strong>Исми:</strong>   {!! isset($comment->user)?$comment->user:'Ананим' !!}</p>
<p><strong>IP:</strong> {!!$comment->ip!!}</p>
<p><strong>Изоҳ:</strong> <u>{{$comment->comment}}</u></p>
<p><strong>Тўлиқ матни:</strong> {!!$comment->mis!!}</p>
<hr>





			</div>
			<div class="msg-error"></div>


	            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('xato.index') }}"> Back</a>
            </div>

	{!! Form::close() !!}

				        </div>
				        </div>
				        </div>
@endif


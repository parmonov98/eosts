
@if($comment)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Вопрос или предложение {{$comment->name?$comment->name:''}}</h2>
				                <div class="short-table white"> 


<hr>

<div class="row">
	<div class="col-md-6">
<p><strong>Имя:</strong> {{$comment->name}}</p>
<p><strong>E-mail:</strong> {{$comment->email}}</p>
<p><strong>Телифон:</strong> {!!$comment->phone!!}</p>
<p><strong>Текст:</strong> {!!$comment->message!!}</p>
	</div>
	<div class="col-md-6">

@if(isset($comment->incoterms))<p><strong>Тип груз:</strong> {{$comment->incoterms}}</p>@endif
@if(isset($comment->package))<p><strong>Инкотермс:</strong> {!!$comment->package!!}</p>@endif
@if(isset($comment->city_of_departure))<p><strong>Город отправления:</strong> {{$comment->city_of_departure}}</p>@endif
@if(isset($comment->weight))<p><strong>Общий вес груза (кг):</strong> {!!$comment->weight!!}</p>@endif
@if(isset($comment->dimension))<p><strong>Город доставки:</strong> {!!$comment->dimension!!}</p>@endif


	</div>
</div>




			</div>
			<div class="msg-error"></div>


	            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('requ.index') }}"> Back</a>
            </div>

	
				        </div>
				        </div>
				        </div>
@endif


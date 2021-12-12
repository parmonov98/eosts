
@if($comment)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Savol yoki taklif {{$comment->name?$comment->name:''}}</h2>
				                <div class="short-table white"> 


<hr>

<div class="row">
	<div class="col-md-6">
<p><strong>Ism:</strong> {{$comment->name}}</p>
<p><strong>E-mail:</strong> {{$comment->email}}</p>
<p><strong>Telefon:</strong> {!!$comment->phone!!}</p>
<p><strong>Matni:</strong> {!!$comment->message!!}</p>
	</div>
	<div class="col-md-6">

@if(isset($comment->incoterms))<p><strong>Yuk turi:</strong> {{$comment->incoterms}}</p>@endif
@if(isset($comment->package))<p><strong>Inkoterms:</strong> {!!$comment->package!!}</p>@endif
@if(isset($comment->city_of_departure))<p><strong>Chiqish shahri:</strong> {{$comment->city_of_departure}}</p>@endif
@if(isset($comment->weight))<p><strong>Yukning umumiy og'irligi (кг):</strong> {!!$comment->weight!!}</p>@endif
@if(isset($comment->dimension))<p><strong>Yetkazib berish shahri:</strong> {!!$comment->dimension!!}</p>@endif


	</div>
</div>




			</div>
			<div class="msg-error"></div>


	            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('requ.index') }}"> <i class="fa fa-arrow-left"></i></a>
            </div>

	
				        </div>
				        </div>
				        </div>
@endif


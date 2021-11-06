@if($comment)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>{{$comment->name?$comment->name:$comment->user->name}}нинг изохи</h2>
				                <div class="short-table white">

		<hr>


{!! Form::open(['url' => (isset($comment->id)) ? route('izox.update',['izox'=>$comment->id]) : route('izox.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data'

 ]) !!}

<h2><u>Матни</u></h2>
<p><a href="{!!$comment->site!!}">Маълумотга ўтиш</a>	</p>
<p>	{!!$comment->text!!} </p>

<div clsss="radioV" style="font-size:20px;">
<i class="fa fa-eye"></i>
{!! Form::radio('heddin', '1', isset($comment->heddin) ? ($comment->heddin==1?TRUE:FALSE)  : old('heddin'),['id' => 'form_rad']) !!}
<i class="fa fa-eye-slash"></i>
{!! Form::radio('heddin', '0', isset($comment->heddin) ? ($comment->heddin==0?TRUE:FALSE) : old('heddin'),['id' => 'form_rad']) !!}
</div>


		@if(isset($comment->id))
			<input type="hidden" name="_method" value="PUT">
		@endif
<hr>
	{!! Form::button('Ўзгартириш', ['class' => 'btn btn-primary btn-block','type'=>'submit']) !!}



	{!! Form::close() !!}


				        </div>
				        </div>
				        </div>
@endif
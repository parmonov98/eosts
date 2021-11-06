<h2><u>Йил дастури</u></h2>

<div id="content-page" class="content group">
				            <div class="hentry group">



{!! Form::open(['url' => route('setFilesUp') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}



Йил:<input type="text" name="name[yil]" value="{{isset($setname['yildasturi']['name']['yil']) ? $setname['yildasturi']['name']['yil'] : ''}}" placeholder="Йил" class="form-control">
<br />
Йил номи ўзбекча:<input type="text" name="name[oz]" value="{{isset($setname['yildasturi']['name']['oz']) ? $setname['yildasturi']['name']['oz']  : ''}}" placeholder="Йил номи ўзбекча" class="form-control">
<br />
Yil nomi o'zbekcha:<input type="text" name="name[uz]" value="{{isset($setname['yildasturi']['name']['uz']) ? $setname['yildasturi']['name']['uz']  : ''}}" placeholder="Yil nomi o'zbekcha" class="form-control">
<br />
Программа года на русский:<input type="text" name="name[ru]" value="{{isset($setname['yildasturi']['name']['ru']) ? $setname['yildasturi']['name']['ru'] : ''}}" placeholder="Программа года на русский" class="form-control">
<br />
Program of the year on english:<input type="text" name="name[en]" value="{{isset($setname['yildasturi']['name']['en']) ? $setname['yildasturi']['name']['en'] : ''}}" placeholder="Программа года на русский" class="form-control">

		</div>

		<br />

	{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}

{!! Form::close() !!}


</div>
</div>
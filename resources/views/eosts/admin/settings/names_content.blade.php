<h2><u>Название организации</u></h2>

<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => route('setNamesup') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}




			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>

				Русский:<input type="text" name="name[ru]" value="{{isset($setname['names']['name']['ru']) ? $setname['names']['name']['ru'] : ''}}" placeholder="Русский" class="form-control">

				English:<input type="text" name="name[en]" value="{{isset($setname['names']['name']['en']) ? $setname['names']['name']['en'] : ''}}" placeholder="Русский" class="form-control">

				Türkçe:<input type="text" name="name[tu]" value="{{isset($setname['names']['name']['tu']) ? $setname['names']['name']['tu'] : ''}}" placeholder="O'zbekcha" class="form-control">


			 </div>



    		<hr>
		</div>




						{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}


{!! Form::close() !!}


</div>



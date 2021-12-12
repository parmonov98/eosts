<h2><u>Tashkilot nomi</u></h2>
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <button class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => route('setNamesup') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}




			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>

				Русский:<input type="text" name="name[ru]" value="{{isset($setname['names']['name']['ru']) ? $setname['names']['name']['ru'] : ''}}" placeholder="Русский" class="form-control">

				English:<input type="text" name="name[en]" value="{{isset($setname['names']['name']['en']) ? $setname['names']['name']['en'] : ''}}" placeholder="English" class="form-control">

				Türkçe:<input type="text" name="name[tu]" value="{{isset($setname['names']['name']['tu']) ? $setname['names']['name']['tu'] : ''}}" placeholder="Türkçe" class="form-control">


			 </div>



    		<hr>
		</div>




						{!! Form::button('Saqlash', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}


{!! Form::close() !!}


</div>



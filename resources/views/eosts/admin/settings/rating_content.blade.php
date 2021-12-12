<h2><u>Топ рейтинг</u></h2>
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

{!! Form::open(['url' => route('setRatingUp') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    
    
    			
<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>


<div class="form-group">
<textarea class="form-control" rows="3" name="rating" placeholder="...">{{isset($setname['rating']) ? $setname['rating'] : ''}}</textarea>
</div>


</div>


<hr>
</div>

		
{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}			
			
		
{!! Form::close() !!}


</div>
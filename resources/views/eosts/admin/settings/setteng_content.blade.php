<h3><u>Настройки сообщения для телеграмм</u></h3>

<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => route('setNetworkup') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    

    			
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>

 
				<i class="fa fa-send-o"></i> Tokin телеграмм бота:<input type="text" name="setteng_telegram[token]" value="{{isset($setname['setteng_telegram']['setteng_telegram']['token']) ? $setname['setteng_telegram']['setteng_telegram']['token'] : ''}}" placeholder="Tokin телеграмм бота" class="form-control">
				<br />

				<i class="fa fa-send-o"></i> Имя телеграмм бота:<input type="text" name="setteng_telegram[name]" value="{{isset($setname['setteng_telegram']['setteng_telegram']['name']) ? $setname['setteng_telegram']['setteng_telegram']['name'] : ''}}" placeholder="Имя телеграмм бота" class="form-control">
				<br />

				<i class="fa fa-send-o"></i>Ваш телеграмм id:<input type="text" name="telegram_user_id" value="{{isset($setname['telegram_user_id']) ? $setname['telegram_user_id']: ''}}" placeholder="Ваш телеграмм id" class="form-control">
				<br />
												
			 </div>
		 
			
      	
    		<hr>
		</div>
		
		
	
		
						{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}			
			
		
{!! Form::close() !!}


</div>



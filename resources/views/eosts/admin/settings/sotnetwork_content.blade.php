<h3><u>Каналы в социальной сети</u></h3>

<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => route('setSotNetworkup') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    

    			
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>

 
				<i class="fa fa-facebook-f"></i> URL('http://www.facebook.com/...'):<input type="text" name="sotnet[facebook]" value="{{isset($setname['sot_network']['sotnet']['facebook']) ? $setname['sot_network']['sotnet']['facebook']  : ''}}" placeholder="facebook канали" class="form-control">
				<br />

				<i class="fa fa-send-o"></i> URL('http://www.telegram.me/...'):<input type="text" name="sotnet[telegram]" value="{{isset($setname['sot_network']['sotnet']['telegram']) ? $setname['sot_network']['sotnet']['telegram']  : ''}}" placeholder="Телеграм канали" class="form-control">
				<br />

				<i class="fa fa-instagram"></i> URL('http://www.instagram.com/...'):<input type="text" name="sotnet[instagram]" value="{{isset($setname['sot_network']['sotnet']['instagram']) ? $setname['sot_network']['sotnet']['instagram'] : ''}}" placeholder="Instagram канали" class="form-control">
				<br />
			
				<i class="fa fa-twitter"></i> URL('http://www.twitter.com/...'):<input type="text" name="sotnet[twitter]" value="{{isset($setname['sot_network']['sotnet']['twitter']) ? $setname['sot_network']['sotnet']['twitter'] : ''}}" placeholder="Twitter канали" class="form-control">
				<br />

				<i class="fa fa-youtube"></i> URL('http://www.youtube.com/...'):<input type="text" name="sotnet[youtube]" value="{{isset($setname['sot_network']['sotnet']['youtube']) ? $setname['sot_network']['sotnet']['youtube'] : ''}}" placeholder="youtube канали" class="form-control">
									
			 </div>
		 
			
      	
    		<hr>
		</div>
		
		
	
		
						{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}			
			
		
{!! Form::close() !!}


</div>



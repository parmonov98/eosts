<h2><u>Kompaniya manzili</u></h2>
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

{!! Form::open(['url' => route('setAddressup') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

			<div class="input-prepend">
				
				
<div class="row">
  <div class="col-md-6">
<h3>Buxoro</h3>
				<i class="fa fa-map-marker"></i> Русский:
				<input type="text" name="addres[bux][ru]" value="{{isset($setname['address']['addres']['bux']['ru']) ? $setname['address']['addres']['bux']['ru'] : ''}}" placeholder="Русский" class="form-control">

				<i class="fa fa-map-marker"></i> English:
				<input type="text" name="addres[bux][en]" value="{{isset($setname['address']['addres']['bux']['en']) ? $setname['address']['addres']['bux']['en'] : ''}}" placeholder="English" class="form-control">

				<i class="fa fa-map-marker"></i> Türkçe:
				<input type="text" name="addres[bux][tu]" value="{{isset($setname['address']['addres']['bux']['tu']) ? $setname['address']['addres']['bux']['tu']  : ''}}" placeholder="Türkçe" class="form-control">  	

  </div>
  <div class="col-md-6">
  	<h3>Toshkent</h3>
				<i class="fa fa-map-marker"></i> Русский:
				<input type="text" name="addres[tosh][ru]" value="{{isset($setname['address']['addres']['tosh']['ru']) ? $setname['address']['addres']['tosh']['ru'] : ''}}" placeholder="Русский" class="form-control">

				<i class="fa fa-map-marker"></i> English:
				<input type="text" name="addres[tosh][en]" value="{{isset($setname['address']['addres']['tosh']['en']) ? $setname['address']['addres']['tosh']['en'] : ''}}" placeholder="English" class="form-control">

				<i class="fa fa-map-marker"></i> Türkçe:
				<input type="text" name="addres[tosh][tu]" value="{{isset($setname['address']['addres']['tosh']['tu']) ? $setname['address']['addres']['tosh']['tu']  : ''}}" placeholder="Türkçe" class="form-control">  	
  </div>
</div>





			<hr>

			<i class="fa fa-phone"></i> Telefon 1:
			<input type="text" name="phone[]" value="{{isset($setname['address']['phone'][0]) ? $setname['address']['phone'][0] : ''}}" placeholder="Telefon" class="form-control">
			<i class="fa fa-phone"></i> Telefon 2:
			<input type="text" name="phone[]" value="{{isset($setname['address']['phone'][1]) ? $setname['address']['phone'][1] : ''}}" placeholder="Telefon" class="form-control">			

			<i class="fa fa-envelope"></i> E-mail 1:
			<input type="email" name="email[]" value="{{isset($setname['address']['email'][0]) ? $setname['address']['email'][0] : ''}}" placeholder="E-mail" class="form-control">
			<i class="fa fa-envelope"></i> E-mail 2:
			<input type="email" name="email[]" value="{{isset($setname['address']['email'][1]) ? $setname['address']['email'][1] : ''}}" placeholder="E-mail" class="form-control">			
			 </div>

    		<hr>
		</div>
						{!! Form::button('Saqlash', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}


{!! Form::close() !!}

</div>
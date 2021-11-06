<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => (isset($user->id)) ? route('users.update',['user'=>$user->id]) :route('users.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}


			<label for="name-contact-us">Имя:		</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('name',isset($user->name) ? $user->name  : old('name'), ['class'=>'form-control','disabled'=>'disabled','placeholder'=>'Введите название страницы']) !!}
			 </div>

		 <br />

			<label for="name-contact-us">E-mail:</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('email',isset($user->email) ? $user->email  : old('email'), ['class'=>'form-control','disabled'=>'disabled','placeholder'=>'Введите название страницы']) !!}
			 </div>

<br />
			<label for="name-contact-us">Роль:</label>
			<div class="input-prepend">

				{!! Form::select('role_id', $roles, (isset($user)) ? $user->roles()->first()->id : null,['class'=>'form-control']) !!}
			 </div>

		<br />





		@if(isset($user->id))
			<input type="hidden" name="_method" value="PUT">

		@endif


<br />
			{!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}








{!! Form::close() !!}

</div>
</div>
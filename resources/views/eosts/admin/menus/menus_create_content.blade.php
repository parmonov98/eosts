<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => (isset($menu->id)) ? route('menus.update',['menu'=>$menu->id]) : route('menus.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

		<label for="name-contact-us">

				<span class="sublabel">Янги меню қўшиш ва ўзгартириш</span><br />
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			Меню рус:{!! Form::text('title[ru]',isset($menu->title['ru']) ? $menu->title['ru']  : old('title[ru]'), ['class'=>'form-control','placeholder'=>'Введите название меню']) !!}
			Menu eng:{!! Form::text('title[en]',isset($menu->title['en']) ? $menu->title['en']  : old('title[en]'), ['class'=>'form-control','placeholder'=>'Will Enter name a menu']) !!}

			Menu türk:{!! Form::text('title[tu]',isset($menu->title['tu']) ? $menu->title['tu']  : old('title[tu]'), ['class'=>'form-control','placeholder'=>'Will Enter name a menu']) !!}			


<br />
			URL(полный пут): {!! Form::text('path',isset($menu->path) ? $menu->path  : old('path'), ['class'=>'form-control','placeholder'=>'URL страницы']) !!}
			 </div>
<br />
			<label for="name-contact-us">

				<span class="sublabel">Родительский пункт меню:</span><br />
			</label>
			<div class="input-prepend">
				{!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null,['class'=>'form-control']) !!}
			 </div>





		</div>

		<br />

		@if(isset($menu->id))
			<input type="hidden" name="_method" value="PUT">

		@endif

		{!! Form::button('Сақлаш', ['class' => 'btn btn-primary btn-block','type'=>'submit']) !!}








{!! Form::close() !!}


</div>
</div>


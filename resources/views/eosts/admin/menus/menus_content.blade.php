<div id="content-page" class="content group">
				            <div class="hentry group">
<h3 class="title_page">Работа с категориями меню</h3>
    @if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>									
    @endif

    @if(Gate::allows('ADD_MENU'))
<a class="btn btn-primary btn-lg " href="{{route('menus.create')}}"><i class="fa fa-plus"></i></a>
	@endif
<div class="short-table white tree ">
	<table class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
	<thead>
		
		<th>Название меню</th>
		
		<th style="width:5%">Удалить</th>
	</thead>
	@if($menus)
	
@include(config('settings.theme').'.admin.menus.custom-menu-items', array('items' => $menus->roots(),'paddingLeft' => ''))
		
		
	@endif
	</table>
	</div>
	
	
</div>

<div class="wrap_result"></div>
</div>
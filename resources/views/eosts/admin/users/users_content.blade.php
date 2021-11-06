<div id="content-page" class="content group">
				            <div class="hentry group">
<h3 class="title_page">Пользователи</h3>

    @if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>
    @endif
<div class="short-table white">
	<table class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Role</th>
		<th style="width: 70px;text-align: center;"><i class="fa fa-pencil-square-o"></i></th>
	</thead>
	@if($users)


		@foreach($users as $user)
		<tr>
			<td> {!! $user->name !!}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->roles->implode('name', ', ') }}</td>
			<td><a href="{{route('users.edit',['user' => $user->id]) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a></td>


		</tr>
		@endforeach

	@endif
	</table>
	</div>
	<div  align="center">{{$users->links() }}</div>

</div></div>
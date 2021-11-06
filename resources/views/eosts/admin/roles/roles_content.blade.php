<div id="content-page" class="content group">
				            <div class="hentry group">
							    	<div class="pull-right">
            <a class="btn btn-success float-right" href="{{ route('roles.create') }}">Yangi guruh kiritish</a>
        </div>
<h3 class="title_page">Фойдаланувчилар</h3>

    @if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>									
    @endif
<div class="short-table white">
	    <table class="table table-hover table-bordered text-center">
        <tr >
            <th class="text-center">No</th>
            <th class="text-center">Name</th>
            <th class="text-center" width="280px">Action</th>
        </tr>
    @foreach ($name as $nam)
    <tr>
        <td scope="row" >{{ $nam->id }}</td>
        <td>{{ $nam->name}}</td>        
        <td>            
            <a class="btn btn-primary" href="{{ route('roles.edit',$nam->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $nam->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
	</div>
	<div  align="center">{{$name->links() }}</div>
	
</div></div>
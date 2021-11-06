@extends(config('settings.theme').'.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Guruhlar bilan ishlash bo`limi</h2>
            </div>
    	<div class="pull-right">
            <a class="btn btn-success float-right" href="{{ route('roles.create') }}">Yangi guruh kiritish</a>
        </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

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



@endsection
@extends(config('settings.theme').'.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>
<br>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	
	    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
<form action="/admins/roles/update" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$roles->id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
@include(config('settings.theme').'.admin.roles.form')
</form>


@endsection
@extends(config('settings.theme').'.layouts.admin')

@section('navigation')
	{!! $navigation !!}
@endsection

@section('content')
	{!! $content !!}
@endsection

@section('footer')
	{!! $footer !!}
@endsection 
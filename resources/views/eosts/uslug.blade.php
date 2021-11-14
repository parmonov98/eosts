@extends(env('THEME').'.layouts.site')

@section('navigation')
	{!! $navigation !!}
@endsection


@section('ind')
	{!! $content !!}
@endsection

@section('callout')
	@include(env('THEME').'.callout')
@endsection

@section('futnav')
	{!! $futnav !!}
@endsection
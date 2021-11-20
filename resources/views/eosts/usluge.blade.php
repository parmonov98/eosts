@extends(env('THEME').'.layouts.site')

@section('navigation')
	{!! $navigation !!}
@endsection


@section('ind')
	{!! $content !!}
@endsection


@section('clients')
	{!! $naskli !!}
@endsection

@section('otzivi')
	{!! $otzivi !!}
@endsection

@section('callout')
	@include(env('THEME').'.callout')
@endsection

@section('futnav')
	{!! $futnav !!}
@endsection
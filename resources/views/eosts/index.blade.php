@extends(env('THEME').'.layouts.site')

@section('navigation')
	{!! $navigation !!}
@endsection

@section('slider')
	{!! $slider !!}
@endsection

@section('special')
	@include(env('THEME').'.special')
@endsection

@section('features')
	@include(env('THEME').'.features')
@endsection

@section('quote')
	@include(env('THEME').'.quote')
@endsection

@section('counter')
	@include(env('THEME').'.counter')
@endsection

@section('otzivi')
	{!! $otzivi !!}
@endsection

@section('clients')
	{!! $naskli !!}
@endsection

@section('ind')
	{!! $content !!}
@endsection

@section('gallery')
	{!! $gallery !!}
@endsection

@section('futnav')
	{!! $futnav !!}
@endsection
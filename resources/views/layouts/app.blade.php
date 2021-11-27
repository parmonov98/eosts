<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    {!!Html::style(env('THEME').'/css/base.css')!!}
	{!!Html::style(env('THEME').'/css/icofont.min.css')!!}
	{!!Html::style(env('THEME').'/css/font-awesome.min.css')!!}

	{!!Html::style(env('THEME').'/css/tiny-slider.css')!!}

		{!!Html::script(env('THEME').'/js/jquery-3.5.1.min.js')!!}




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>




		<!-- free-course-area-end -->
		











    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

           {!!Html::script(env('THEME').'/js/jquery.min.js')!!}
        {!!Html::script(env('THEME').'/js/popper.min.js')!!}
        {!!Html::script(env('THEME').'/js/bootstrap.min.js')!!}
        {!!Html::script(env('THEME').'/js/bootstrap-dropdownhover.min.js')!!}
        {!!Html::script(env('THEME').'/js/fontawesome-all.js')!!}
        {!!Html::script(env('THEME').'/js/owl.carousel.min.js')!!}
        {!!Html::script(env('THEME').'/js/jquery.waypoints.min.js')!!}
        {!!Html::script(env('THEME').'/js/jquery.counterup.min.js')!!}


</body>
</html>

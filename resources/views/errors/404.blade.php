@extends(env('THEME').'.layouts.site')


@section('content')
<?php
$public = substr($_SERVER['REQUEST_URI'], 1,6); 
if($public=='public'){ $lan = substr($_SERVER['REQUEST_URI'], 8,2);   
    if($lan != 'oz' && $lan != 'uz' && $lan != 'ru' && $lan != 'en'){$lan = 'oz';} 
}else{$lan = substr($_SERVER['REQUEST_URI'], 1,2);   
    if($lan != 'oz' && $lan != 'uz' && $lan != 'ru' && $lan != 'en'){$lan='oz';}  
}
?> 
<div class="col-lg-12 col-md-12 order-1 order-lg-2">  
          <h3  align="center">404 {{ ('oz'==$lan)?'Мавжуд бўлмаган саҳифа':'' }}{{ ('uz'==$lan)?'Mavjud bo`lmagan sahifa sahifa':'' }}{{ ('ru'==$lan)?'Не существующей страница':'' }}{{ ('en'==$lan)?'Not existing page':'' }}</h3>

           <div class="card mb-4">
		 
                                <div class="card-body">

	
	<div class="col-sm-12 padding-right" align="center">

		<div class="content-404">
			<img src="{{ asset('/images/404.png') }}" class="img-responsive" alt="" style="width: 100%;" />
			<h2><b>404</b> {{ ('oz'==$lan)?'Мавжуд бўлмаган саҳифа':'' }}{{ ('uz'==$lan)?'Mavjud bo`lmagan sahifa sahifa':'' }}{{ ('ru'==$lan)?'Не существующей страница':'' }}{{ ('en'==$lan)?'Not existing page':'' }}.</h2>
			<p>404 {{ ('oz'==$lan)?'Мавжуд бўлмаган саҳифа':'' }}{{ ('uz'==$lan)?'Mavjud bo`lmagan sahifa sahifa':'' }}{{ ('ru'==$lan)?'Не существующей страница':'' }}{{ ('en'==$lan)?'Not existing page':'' }}.</p>
			<a href="/" class="btn btn-primary btn-block">{{ ('oz'==$lan)?'Бош саҳифа':'' }}{{ ('uz'==$lan)?'Bosh sahifa':'' }}{{ ('ru'==$lan)?'Главная страница':'' }}{{ ('en'==$lan)?'Home':'' }}</a>
		</div>

	</div>
	</div>
	</div>
	</div>
	
@endsection



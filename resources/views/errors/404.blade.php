@extends(env('THEME').'.layouts.site')


@section('content')
<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lan = session('lang');  ?>








    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Woops 404</li>
          </ol>
        </nav>

        <h1>Woops 404</h1>
        <div class="breadcrumbs-description">
          Meet the amazing team behind this project and find out more about how we work.
        </div>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

      <!-- Default Grid Start -->
      <section class="wide-tb-100">
        <div class="container pos-rel">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 bg-light-gray rounded">
              <!-- xxx Error Page xxx -->
              <div class="text-center p-5">
                <img src="{{ asset(env('THEME').'/images/404_img.png') }}" alt="Nothing Found 404 Error">
                <h3 class="h3-sm fw-6  mb-4 mt-5">You may have mis-typed the URL. Or the page has been
                  removed. <br>Actually, there is nothing to see here...</h3>
                <a href="/" class="mr-2 mb-3 btn-theme bg-navy-blue icon-left"><i class="icofont-home"></i> 
{{ ('tu'==$lan)?'Ana sayfada':'' }}{{ ('ru'==$lan)?'На главная страница':'' }}{{ ('en'==$lan)?'Back To Home':'' }}
</a>
              </div>
              <!-- xxx Error Page xxx -->
            </div>
          </div>

        </div>
      </section>
      <!-- Default Grid End -->
    </main>




	
@endsection



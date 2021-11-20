  <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">{{('ru'==$cat)?'Услуги':''}} {{('en'==$cat)?'Services':''}} {{('tu'==$cat)?'Hizmetler':''}}</li>
          </ol>
        </nav>

        <h1>{{('ru'==$cat)?'Наши сервисы':''}} {{('en'==$cat)?'Our services':''}} {{('tu'==$cat)?'Hizmetlerimiz':''}}</h1>
        <div class="breadcrumbs-description">{{('ru'==$cat)?'Товары достигают места назначения быстрее и надёжнее,также можете осуществлять денежные переводы в любом варианте.':''}} {{('en'==$cat)?'Goods reach their destination faster and more reliably, you can also make money transfers in any way.':''}} {{('tu'==$cat)?'Eşyalarınız gideceği yere daha hızlı ve güvenilir bir şekilde ulaşır, dilediğiniz şekilde para transferi de yapabilirsiniz.':''}}
          <br>
          <br>

        </div>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

      <!-- What We Offer Start -->
      <section class="wide-tb-80 bg-fixed what-we-offer">
        <div class="container pos-rel">
          <div class="row align-items-center">

            <div class="col-md-6">
              
<h2 class="mb-4 fw-7 txt-white wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
@if('ru'==$cat) 
Качество <span class="fw-6 txt-orange">и</span> эффективность <br><span class="fw-6 txt-orange">по достойной цены.</span>
@elseif('en'==$cat)
Quality <span class = "fw-6 txt-orange"> and </span> efficiency <br> <span class = "fw-6 txt-orange"> by worthy of the price.</span>
@else               
Kalite <span class = "fw-6 txt-orange"> ve </span> verimlilik <br> <span class = "fw-6 txt-orange"> tarafından uygun fiyat. </span> @endif
</h2>


 {!!isset($pronas->cachistva[$cat])?$pronas->cachistva[$cat]:''!!}


              




            </div>


            <div class="col-md-6">

            </div>

          </div>

        </div>
      </section>
      <!-- What We Offer End -->


      <!-- Welcome To Cargo Start -->
      <section class="bg-light-gray wide-tb-100">
        <div class="container">
          <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">

              <h1 class="heading-main">
                @if('ru'==$cat) <span>что мы предлагаем?</span>Наша основние услуги
                @elseif('en'==$cat) <span> what do we offer? </span> Our main services
                @else <span> ne sunuyoruz? </span> Başlıca hizmetlerimiz @endif
              </h1>
            </div>
            <!-- Heading Main -->
          @foreach ($articles as $key => $value)

            <!-- Icon Box 1 -->
            <div class="col-md-3 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.{{$key}}s">
              <a href="{{route('ushow',['id'=>$value->id])}}">
                <div class="icon-box-1">
                  <img src="{{ asset('/uslugi/'.$value->img['min']) }}" alt="{{$value->title[$cat]}}">
                  <div class="text">
                    @if($key==0)<i class="icofont-vehicle-delivery-van"></i>@elseif($key==1)<i class="icofont-airplane-alt"></i>
                    @else<i class="icofont-ship"></i> @endif

                    {{$value->title[$cat]}}
                  </div>
                </div>
              </a>
            </div>
            <!-- Icon Box 1 -->
          @endforeach



          </div>
        </div>
      </section>
      <!-- Welcome To Cargo End -->






<section class="bg-sky-blue wide-tb-100">
        <div class="container pos-rel">
          <div class="row">
            <div class="img-business-man">
              <img src="{{ asset(env('THEME').'/images/pros.png') }}" alt="What makes use unique">
            </div>

            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">
                @if('ru'==$cat) <span>Наша плюсы</span>ЧТО ЖЕ ДЕЛАЕТ НАС ОСОБЕННЫМИ?
                @elseif('en'==$cat) <span> Our pros </span> WHAT MAKES US SPECIAL?
                @else <span> Profesyonellerimiz </span> BİZİ ÖZEL YAPAN NEDİR? @endif
              </h1>
            </div>
            <!-- Heading Main -->
            <div class="col-md-6 ml-auto">
              <div class="row">


                  {!!isset($pronas->osobiy[$cat])?$pronas->osobiy[$cat]:''!!}


              </div>
            </div>
          </div>
        </div>
      </section>





<section class="bg-light-gray">
        <div class="container p-0">
          <div class="row align-items-center no-gutters">
           
{!!isset($pronas->competent[$cat])?$pronas->competent[$cat]:''!!}

          </div>
        </div>
      </section>







<script type="text/javascript">
  
$('ul.list-unstyled.icons-listing.theme-orange.mb-0 li').append('<i class="icofont-check"></i>');
$('div.toggle').append('<i class="icofont-rounded-down"></i>');

</script>
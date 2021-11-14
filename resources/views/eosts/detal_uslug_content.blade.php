    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">{!!$articles->menu->title[$cat]!!}</a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{$articles->title[$cat]}}</li>
          </ol>
        </nav>

        <h1>{{$articles->title[$cat]}}</h1>
        <div class="breadcrumbs-description">
          {!!$articles->desc[$cat]!!}
        </div>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->










    <!-- Main Body Content Start -->
    <main id="body-content">
      <!-- What We Offer Start -->
      <section class="wide-tb-80">
        <div class="container pos-rel">
          <div class="row align-items-start justify-content-center">

            <div class="col-md-12 col-lg-8">
              <div class="row">
                <div class="col-md-12 mb-5" style="margin-bottom: 0rem!important;">
                    <img src="{{ asset('/uslugi/'.$articles->img['max']) }}" alt="{{$articles->title[$cat]}}" class="rounded mb-4">
                    </div>

                    {!!$articles->text[$cat]!!}


              </div>

            </div>


          </div>

        </div>
      </section>
      <!-- What We Offer End -->



      
    </main>



<script type="text/javascript">
  
$('ul.list-unstyled.icons-listing.theme-orange.mb-0 li').append('<i class="icofont-check"></i>');
$('div.toggle').append('<i class="icofont-rounded-down"></i>');

</script>
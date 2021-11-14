 <?php
if(!session()->has('lang')){session()->put('lang', 'ru');}
$cat = session('lang');
    ?>
     
      <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
        <div class="bg-overlay blue opacity-60"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0 wow slideInUp" data-wow-duration="0" data-wow-delay="0.1s">
              <h4 class="h4-xl">{{('ru'==$cat)?'Заинтересованы в сотрудничестве с нами?':''}}{{('en'==$cat)?'Interested in working with us?':''}}{{('tu'==$cat)?'Bizimle çalışmak ister misiniz?':''}}</h4>
            </div>
            <div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
              <div class="center-text">
                {{('ru'==$cat)?'Мы не просто управляем поставщиками, мы управляем им на микроуровне. У нас консультативный подход и
                понимание на высоком уровне.':''}}{{('en'==$cat)?'We do not just manage suppliers, we manage them at the micro level. We have a consultative approach and
                 understanding at a high level.':''}}{{('tu'==$cat)?'Tedarikçileri sadece yönetmiyoruz, onları mikro düzeyde yönetiyoruz. İstişari bir yaklaşımımız var ve üst düzeyde anlamak.':''}}
                
              </div>
            </div>
            <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
              <a href="#" class="btn btn-theme bg-white bordered" role="button" data-toggle="modal"
                data-target="#request_popup">{{('ru'==$cat)?'Связаться с нами':''}}{{('en'==$cat)?'Contact us':''}}{{('tu'==$cat)?'Bize Ulaşın':''}}
                <i class="icofont-rounded-right"></i></a>
            </div>
          </div>
        </div>
      </section>
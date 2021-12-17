<?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');  ?>





    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">{{('ru'==$lang)?'Главная':''}} {{('en'==$lang)?'home':''}} {{('tu'==$lang)?'Ev':''}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{('ru'==$lang)?'Контакты':''}} {{('en'==$lang)?'Contacts':''}} {{('tu'==$lang)?'Kişiler':''}}</li>
          </ol>
        </nav>


        <h1>{{('ru'==$lang)?'Связаться с нами':''}} {{('en'==$lang)?'Contact us':''}} {{('tu'==$lang)?'Bize Ulaşın':''}}</h1>
        <div class="breadcrumbs-description">{{('ru'==$lang)?'Вы всегда можете связаться с нами и мы будем рады Вам помочь!':''}} {{('en'==$lang)?'You can always contact us and we will be happy to help you!':''}} {{('tu'==$lang)?'Her zaman bizimle iletişime geçebilirsiniz, size yardımcı olmaktan memnuniyet duyarız!':''}}
          
        </div>
      </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

      <!-- Contact Details Start -->
      <section class="wide-tb-80 contact-full-shadow">
        <div class="container">
          <div class="contact-map-bg">
            <img src="{{asset(env('THEME'.'images/map-bg.png'))}}" alt="">
          </div>
          <div class="row justify-content-between">
            <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
              <div class="contact-detail-shadow">
                <h4>{{('ru'==$lang)?'Бухара':''}} {{('en'==$lang)?'Bukhara':''}} {{('tu'==$lang)?'Buhara':''}}</h4>
                <div class="d-flex align-items-start items">
                  <i class="icofont-google-map"></i> 

                    @if(isset($getsetting) && $getsetting['address']['addres']['bux'][$lang]!=null)
                      <span>{!!$getsetting['address']['addres']['bux'][$lang]!!}</span>
                    @endif   
                </div>
                <div class="d-flex align-items-start items">
                  <i class="icofont-phone"></i> 

                   @if(isset($getsetting) && $getsetting['address']['phone'][0]!=null)
                                    <span>{{$getsetting['address']['phone'][0]}}</span>
                              @endif

                </div>
                <div class="text-nowrap d-flex align-items-start items">
                  <i class="icofont-email"></i> 

                   @if(isset($getsetting) && $getsetting['address']['email'][0]!=null)
                                        <a href="mailto:{{$getsetting['address']['email'][0]}}">{{$getsetting['address']['email'][0]}}</a>
                                    @endif

                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
              <div class="contact-detail-shadow">
                <h4>{{('ru'==$lang)?'Ташкент':''}} {{('en'==$lang)?'Tashkent':''}} {{('tu'==$lang)?'Taşkent':''}}</h4>
                <div class="d-flex align-items-start items">
                  <i class="icofont-google-map"></i> 
                    @if(isset($getsetting) && $getsetting['address']['addres']['tosh'][$lang]!=null)
                      <span>{!!$getsetting['address']['addres']['tosh'][$lang]!!}</span>
                    @endif   
                </div>
                <div class="d-flex align-items-start items">
                  <i class="icofont-phone"></i> 
                  @if(isset($getsetting) && $getsetting['address']['phone'][1]!=null)
                                    <span>{{$getsetting['address']['phone'][1]}}</span>
                              @endif
                </div>
                <div class="text-nowrap d-flex align-items-start items">
                  <i class="icofont-email"></i> 
                   @if(isset($getsetting) && $getsetting['address']['email'][1]!=null)
                                        <a href="mailto:{{$getsetting['address']['email'][1]}}">{{$getsetting['address']['email'][0]}}</a>
                                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Details End -->

      <!-- Contact Us From -->
      <section class="wide-tb-100 bg-light-gray pt-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-8 offset-lg-2 wow fadeInUp" data-wow-duration="0"
              data-wow-delay="0s">
              <div class="free-quote-form contact-page">
                <!-- Heading Main -->

                @if ($error = Session::get('error'))
    <div class="alert alert-danger">
    <button class="close" data-dismiss="alert">×</button>
    <strong>{{ $error }}</strong>
    </div>
  @endif

  @if ($error = Session::get('errors'))
    <div class="alert alert-danger">
    <button class="close" data-dismiss="alert">×</button>
    @foreach($errors as $error)
    <strong>{{ $error }}</strong>
    @endforeach
    </div>
  @endif
    <div class="alert alert-danger alert-dismissible fade " id="alert-danger" role="alert"></div>
                <h1 class="heading-main mb-4">
                  Оставить заврос
                </h1>
                <!-- Heading Main -->

                <form id="contactusForm" novalidate="novalidate"
                  class="col rounded-field">@csrf
                  @if(!Auth::check())
                  <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="col">
                      <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                @endif
                  <div class="form-row mb-4">
                    <div class="col">
                      <textarea rows="7" name="message" maxlength="250" id="cment" placeholder="Введите сообщение"
                        class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-row text-center">

                    <button id="contactForm" type="submit"
                      class="form-btn mx-auto btn-theme bg-orange">Отправить<i
                        class="icofont-rounded-right"></i></button>
                  </div>
                </form>



              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us From -->

      <!-- Google Map Start -->
      <section class="map-bg">
        <div id="map-holder" class="pos-rel">






<iframe width="600" height="450" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord={{$maps->longitu}}, {{$maps->latitu}}&amp;q={{$maps->title[$lang]}}&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br />

        </div>
      </section>
      <!-- Google Map Start -->
    </main>


        <script type="text/javascript">
function maxLength(el) {    
    if (!('maxLength' in el)) {
        var max = el.attributes.maxLength.value;
        el.onkeypress = function () {
            if (this.value.length >= max) return false;
        };
    }
}

maxLength(document.getElementById("cment"));


    </script>

        {!!Html::script(env('THEME').'/js/fontawesome-all.js')!!}
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        {!!Html::script(env('THEME').'/js/jquery.gmap.min.js')!!}
        {!!Html::script(env('THEME').'/js/gmaps.js')!!}
     

<script>
        $(document).ready(function(){
            $('#contactForm').click(function(e){
                e.preventDefault();
          var name = $('#name').val();
          var email = $('#email').val();
          var message = $('#cment').val();
                $.ajax({
                    url: "{{ route('conts') }}",
                    method: 'post',
                    data: {"_token":$('meta[name="csrf-token"]').attr('content'),name: name, 
                    email: email, message: message
                    },
                    success: function(result){
                        if(result.errors)
                        {
                            $('#alert-danger').html(' ');

                            $.each(result.errors, function(key, value){
                                $('#alert-danger').addClass('show');
                                $('#alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                        else
                        {
                            $('#alert-danger').hide();
                            $('#request_popup').modal('hide');
                            $('#success').modal('show');

                            $('#name').val('');$('#email').val('');$('#cment').val('');
                     

                        }
                    }
                });
            });
        });
    </script>    
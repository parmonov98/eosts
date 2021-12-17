 <?php if(!session()->has('lang')){session()->put('lang', 'ru');  }$l = session('lang'); 
$nam = ['ru'=>'Имя','en'=>'Name','tu'=>'İsim']; $phon = ['ru'=>'Телефон номер','en'=>'Phone number','tu'=>'Telefon numarası'];
$mail = ['ru'=>'Э-почта','en'=>'Email','tu'=>'E-posta']; $texa = ['ru'=>'Опишите откуда и куда...','en'=>'Describe where and where ...','tu'=>'Nerede ve nerede olduğunu açıklayın ...']; $butt = ['ru'=>'Отправить','en'=>'Send','tu'=>'Göndermek'];

$uslug = ['ru'=>'Тип услуги','en'=>'Service type','tu'=>'Servis tipi'];
$uslug1 = ['ru'=>'Перевозка драгоценных грузов','en'=>'Transportation of precious cargo','tu'=>'Değerli kargo taşımacılığı'];
$uslug2 = ['ru'=>'Перевозка требующий особых условий хранения','en'=>'Transportation requiring special storage conditions','tu'=>'Özel saklama koşulları gerektiren taşıma'];
$uslug3 = ['ru'=>'Перевозка сверхтяжёлые грузы','en'=>'Extra heavy cargo transportation','tu'=>'Ekstra ağır yük taşımacılığı'];
$uslug4 = ['ru'=>'Страхование грузоперевозки','en'=>'Cargo insurance','tu'=>'Kargo sigortası'];
  ?>
            <!-- Free Quote Start -->
            <section class="wide-tb-100 bg-fixed free-quote" style="background-image: url({{ asset(env('THEME').'/images/contact-us.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <div class="free-quote-form">
                                <!-- Heading Main -->
                                <h1 class="heading-main mb-4">
                                   @if('ru'==$l) <span>Оставить</span> Запрос @elseif('en'==$l)<span> Submit </span> Request @else  <span> Gönder </span> İstek @endif
                                </h1>
                                <!-- Heading Main -->

@if ($error = Session::get('error'))
    <div class="alert alert-danger">
    <button class="close" data-dismiss="alert">×</button>
    <strong>{{ $error }}</strong>
    </div>
  @endif
  @if ($errors = Session::get('errors'))
    <div class="alert alert-danger">
    <button class="close" data-dismiss="alert">×</button>
    <ol>
    @foreach($errors as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ol></div>
  @endif
  @if ($success = Session::get('success'))
    <div class="alert alert-primary">
    <button class="close" data-dismiss="alert">×</button>
    <strong>{{ $success }}</strong>
    </div>
  @endif

  <div class="alert alert-danger alert-dismissible fade " id="alert-danger" role="alert"></div>


<!-- Free Quote From -->
<form action="{{ route('message') }}" method="post" novalidate="novalidate" class="col rounded-field">
    @csrf
    <div class="form-row mb-4">
        <input type="text" name="name" id="names" class="form-control" placeholder="{{$nam[$l]}}" required>
    </div>
    <div class="form-row mb-4">
        <input type="text" name="phone" id="phones" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" placeholder="{{$phon[$l]}}" required>
    </div>
    <div class="form-row mb-4">
        <input type="email" name="email" id="emails" class="form-control" placeholder="{{$mail[$l]}}" required>
    </div>

    <div class="form-row mb-4">
        <select title="Please choose a package" required="required" id="packages" name="packages" class="custom-select" aria-required="true" aria-invalid="false">
            <option value="">{{$uslug[$l]}}</option>
            <option value="Перевозка драгоценных грузов">{{$uslug1[$l]}}</option>
            <option value="Перевозка требующий особых условий хранения">{{$uslug2[$l]}}</option>
            <option value="Перевозка сверхтяжёлые грузы">{{$uslug3[$l]}}</option>
            <option value="Страхование грузоперевозки">{{$uslug4[$l]}}</option>
        </select>
    </div>
    <div class="form-row mb-4">


        <textarea rows="7" maxlength="250" id="text" required name="message" placeholder="{{$texa[$l]}}" class="form-control"></textarea>
    </div>
    <div class="form-row text-center">
        <button type="submit" id="formSubmitid" class="form-btn mx-auto btn-theme bg-orange">{{$butt[$l]}}<i class="icofont-rounded-right"></i></button>
    </div>
</form>
<!-- Free Quote From -->




                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Free Quote End -->

    <script type="text/javascript">
function maxLength(el) {    
    if (!('maxLength' in el)) {
        var max = el.attributes.maxLength.value;
        el.onkeypress = function () {
            if (this.value.length >= max) return false;
        };
    }
}

maxLength(document.getElementById("text"));
    </script>



     <script>
        $(document).ready(function(){
            $('#formSubmitid').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('message') }}",
                    method: 'post',
                    data: {"_token":$('meta[name="csrf-token"]').attr('content'),name: $('#names').val(),package: $('#packages').val(), 
                    email: $('#emails').val(), phone: $('#phones').val(), message: $('#text').val()
                    },
                    success: function(result){
                        console.log(result['error']);
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
                            // setTimeout(function(){ $('#success').modal('hide'); }, 1900); 

                        }
                    }
                });
            });
        });
    </script>

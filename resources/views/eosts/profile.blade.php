<?php
  if(!session()->has('lang')){
      session()->put('lang', 'oz');
    }
  $lan = session('lang');
?>

    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">

        <h1 class="text-center">{{('ru'==$lan)?'Профиль пользователя':''}}{{('en'==$lan)?'User profile':''}}{{('tu'==$lan)?'Kullanıcı profili':''}}  </h1>

      </div>
    </div>
    <!-- Page Breadcrumbs End -->





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card free-quote-form " style="margin: 100px 0 100px 0;">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">


        <form class="form-horizontal was-validated" method="POST" action="{{ route('regPrUp') }}" enctype="multipart/form-data">

 @csrf

                        <div class="form-group">


                            <div class="col-md-12">
                               Name:<br> <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Name" >

                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">


                            <div class="col-md-12">
                               Telegram ID:<br> <input id="telegram_id" type="text" class="form-control" name="telegram_id" value="{{$user->telegram_id}}" placeholder="Telegram ID" >

                                @if($errors->has('telegram_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telegram_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                Email Address:<br><input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="{{ $user->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group media">

                            <div class="col-md-12">
                            @if(!empty($user->image))
                            <img class="d-flex align-self-start mr-3 img-thumbnail" align="left" style="width: 60px;" src="{{ asset(env('THEME').'/images/users/'.$user->image) }}" alt="{{ $user->name }}">
                            @else
                                <img class="d-flex align-self-start mr-3 img-thumbnail" align="left" style="width: 60px;" src="{{ asset(env('THEME').'/images/users/user.png') }}" alt="{{ $user->name }}">
                            @endif
                                Avatar:
                                    <label class="custom-file" style="position: absolute;z-index: 4;left: 0;height: 65px;cursor: pointer;">
                                    <input type="file" id="file2" name="image" class="custom-file-input">
                                    </label>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                            <br>
                                <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                                    <i class="fa fa-floppy-o"></i> Ok
                                </button>
                                <br />
                            </div>
                        </div>
                    </form>










                </div>
            </div>
        </div>
    </div>
</div>


























  {!!Html::script('assets/js/jquery.js')!!}
  {!!Html::script('assets/js/jquery.datepicker.js')!!}

  <script>

 function localClear()
      {
        localStorage.removeItem("file");
        document.getElementById("file").value = "";
      }

$(function() {
$("#file").change(function () {
	    if(fileExtValidate(this)) {
	    	 if(fileSizeValidate(this)) {
	    	 	showImg(this);
	    	 }
	    }
    });


// $(function() {
// $("#file").change(function () {
//   var
//       if(fileExtValidate(this)) {
//          if(fileSizeValidate(this)) {
//           showImg(this);
//          }
//       }
//     });

// File extension validation, Add more extension you want to allow
var validExt = ".png, .gif, .jpeg, .jpg, .zip, .doc, .docx, .xls, .xlsx, .pdf";
function fileExtValidate(fdata) {
 var filePath = fdata.value;
 var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
 var pos = validExt.indexOf(getFileExt);
 if(pos < 0) {
 	alert(".png, .gif, .jpeg, .jpg, .zip, .doc, .docx, .xls, .xlsx, .pdf ko'rinishdagi fayl mos fayl yuklan.");
 	localClear();
 	return false;
  } else {
  	return true;
  }
}

// file size validation
// size in kb
var maxSize = '2048';
function fileSizeValidate(fdata) {
	 if (fdata.files && fdata.files[0]) {
                var fsize = fdata.files[0].size/1024;
                if(fsize > maxSize) {
                	 alert('Bu fayl o`lchami: ' + fsize + "KB, muljallangan o`lchamdan yo`qori.");
                	 localClear();
                	 return false;
                } else {
                	return true;
                }
     }
 }



});
</script>

<script type="text/javascript">
jQuery(document).ready(function(){
  legal_status_change(jQuery("#customfield1"));
  legal_status_bind(jQuery("#customfield1"));
});
</script>
<?php
  if(!session()->has('lang')){
      session()->put('lang', 'oz');
    }
  $lan = session('lang');
?>

<div class="col-md-12 col-sm-12 col-xs-12" id="blog">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">



 <ol class="breadcrumb cat_title">
      <li class="breadcrumb-item "><a href="/">Bosh sahifa</a></li>
      <li class="breadcrumb-item active ">Foydalanuvchi profil</li>
      </ol>



<!-- START CONTENT -->
				        <div id="content-single" class="content group" style="background-color: #fbfbfb;padding: 30px;box-shadow: 0px 3px 8px 0px rgba(0,0,0,.3);">
				            <div class="hentry hentry-post blog-big group ">
				                <!-- post featured & title -->
 <!-- Boshi   -->
 <div class="nav-tabs-custom">






<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" class="nav-link active" aria-expanded="false" href="#profile"><i class="fa fa-user"></i> {{ (Auth::user())?Auth::user()->name:''}} profile</a></li>

        <li><a data-toggle="tab" class="nav-link" aria-expanded="false" href="#certificate"><i class="fa fa-user-o"></i> Certificate</a></li>
 </ul>
 <!-- <form method="post" action="#">    -->

            <div class="tab-content">


               <div id="profile" class="tab-pane active">


            <form class="form-horizontal was-validated" method="POST" action="{{ route('regPrUp') }}" enctype="multipart/form-data">


                        {{ csrf_field() }}

                        <div class="form-group">


                            <div class="col-md-12">
                               F.I.Sh.:<br> <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Name" >

                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">


                            <div class="col-md-12">
                               OTM yoki maktab:<br> <input id="otm" type="text" class="form-control" name="otm" value="{{$user->otm}}" placeholder="OTM yoki maktab" >

                                @if($errors->has('otm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('otm') }}</strong>
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
							<img class="d-flex align-self-start mr-3 img-thumbnail" align="left" style="width: 60px;" src="{{ asset(env('THEME').'/i/users/'.$user->image) }}" alt="{{ $user->name }}">
							@else
								<img class="d-flex align-self-start mr-3 img-thumbnail" align="left" style="width: 60px;" src="{{ asset(env('THEME').'/i/users/user.png') }}" alt="{{ $user->name }}">
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


                <div id="certificate" class="tab-pane">
                        ++
                </div>



           	</div>
	</div>

 <!-- OXRI  -->

				                <!-- post content -->


				                <div class="clear"></div>
				            </div>


				            <!-- END COMMENTS -->
				        </div>
				        <!-- END CONTENT -->



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
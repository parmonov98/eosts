<div id="content-page" class="content group">
				            <div class="hentry group">
                    <a href="{{route('maps.index')}}" class="btn btn-primary btn-lg" style="margin-bottom: 5px;"><i class="fa fa-arrow-left"></i></a>  <strong style="font-size: 2rem; padding: 10px; " align="right"> Google карта </strong>
                      <hr>
    @if ($error = Session::get('error'))
  <div class="alert alert-danger">
  <button class="close" data-dismiss="alert">×</button>
  <strong>{{ $error }}</strong>
  </div>                  
    @endif


          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <button class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif


{!! Form::open(['url' => (isset($result->id)) ? route('maps.update',['map'=>$result->id]) : route('maps.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}





<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>



  <?php
  $i=0;
  $j=0;
  $languages=['ru'=>'Русский','en'=>'English','tu'=>'Türkçe'];
  ?>
  <div class="col-md-6">
      <ul class="nav nav-tabs">
            <?php foreach ($languages as $language => $label) { ?>
                <li class="<?= ($i==0)?'active':'' ?>"><a data-toggle="tab" href="#<?=$language?>"><?=$label?></a></li>


      <?php $i++; } ?>
        </ul>


    <div class="tab-content">

              <?php foreach ($languages as $language => $label) { ?>
               <div id="<?=$language?>" class="tab-pane fade in <?= ($j==0)?'active':'' ?>">



    <br />



      <div class="input-prepend"><span class="add-on">

      <i class="icon-user"></i></span>
      Названия (на {{$label}}) :<strong style="color:red;">*</strong> 

      {!! Form::text("title[$language]", isset($result->title[$language]) ? 
      $result->title[$language] : old("title[$language]"), ['class'=>'form-control','placeholder'=>'Введите название (на '.$label.')']) !!}

       </div>




                </div>
            <?php $j++; } ?>



      

  </div>
  </div>


  <div class="col-md-6">

      <div class="input-prepend"><span class="add-on">

      <i class="icon-user"></i></span>
      Долгота:<strong style="color:red;">*</strong> 

      {!! Form::text("longitu", isset($result->longitu) ? 
      $result->longitu : old("longitu"), ['class'=>'form-control','placeholder'=>'...']) !!}

       </div>

<br>
      <div class="input-prepend"><span class="add-on">

      <i class="icon-user"></i></span>
      Шаирота:<strong style="color:red;">*</strong> 

      {!! Form::text("latitu", isset($result->latitu) ? 
      $result->latitu : old("latitu"), ['class'=>'form-control','placeholder'=>'...']) !!}

       </div>

<br>

			 </div>

@if(isset($result->id))
      <input type="hidden" name="_method" value="PUT">
@endif
 
</div>

		</div>

	

</div>
						{!! Form::button('Сохранить', ['class' => 'btn btn-primary btn-block','type'=>'submit']) !!}
</div>


{!! Form::close() !!}



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

// File extension validation, Add more extension you want to allow
var validExt = ".png, .gif, .jpeg, .jpg";
function fileExtValidate(fdata) {
 var filePath = fdata.value;
 var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
 var pos = validExt.indexOf(getFileExt);
 if(pos < 0) {
 	alert(".png, .gif, .jpeg, .jpg ko'rinishdagi fayl mos fayl yuklan.");
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
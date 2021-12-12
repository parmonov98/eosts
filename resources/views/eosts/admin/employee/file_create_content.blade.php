<h2>Jamoamiz a'zolari</h2>
<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => (isset($setname->id)) ? route('employee.update',['employee'=>$setname->id]) : route('employee.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}


            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif



<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>





<?php
  $i=0;
  $j=0;
  $languages=['ru'=>'Русский','en'=>'English','tu'=>'Türkçe'];
  ?>
  <div class="col-md-12">
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
         Ism ({{$label}} tilida):<strong style="color:red;">*</strong> 
     {!! Form::text('name['.$language.']',  isset($setname->name[$language]) ? $setname->name[$language]  : old("name[$language]"), ['id'=>'summernote','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
       </div>
  <br />       
      <div class="input-prepend"><span class="add-on">
      <i class="icon-user"></i></span>
         Mutaxasislik ({{$label}} tilida):<strong style="color:red;">*</strong> 
     {!! Form::text('prof['.$language.']',  isset($setname->prof[$language]) ? $setname->prof[$language]  : old("prof[$language]"), ['id'=>'summernote','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
       </div>




     
                </div>
            <?php $j++; } ?>






  <br />

			 </div>


		   	




<div class="row">

<div class="col-sm-8">
  Rasm yuklash:
   <input type="file" name="file" id="file" size="2048">
Siz <strong> 2 МБ</strong> gacha boʻlgan fayllarni yuklashingiz mumkin (<strong>.png, .gif, .jpeg, .jpg </strong> formatida)
 
</div>
  <div class="col-sm-4">
@if(isset($setname->img))
    {{ Html::image(asset('/uploads/'.$setname->img),'',['style'=>'width:50%;']) }}
@endif
</div>

</div>

      @if(isset($setname->id))
          <input type="hidden" name="_method" value="PUT">
      @endif

    <br />


            {!! Form::button('Saqlash', ['class' => 'btn btn-success','type'=>'submit']) !!}

		</div>




    <br>

{!! Form::close() !!}


</div>
</div>

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
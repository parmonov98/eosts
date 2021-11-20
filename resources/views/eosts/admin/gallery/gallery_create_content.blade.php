<div id="content-page" class="content group">
				            <div class="hentry group">
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



{!! Form::open(['url' => url('/admins/gallery') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}








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
      Названия фото (на {{$label}}) :<strong style="color:red;">*</strong> 

      {!! Form::text("name[name][$language]", isset($products->name['name'][$language]) ? 
      $products->name['name'][$language] : old("name['name'][$language]"), ['class'=>'form-control','placeholder'=>'Введите название (на '.$label.')']) !!}

       </div>




                </div>
            <?php $j++; } ?>



      

  </div>
  </div>


  <div class="col-md-6">

      Загрузка качественный фото:


  <input type="file" name="max" id="file" size="2048">

Размер <strong> 2 МБ</strong> (в формате <strong>.png, .gif, .jpeg, .jpg </strong>) файл можно отправить 


<hr />


      Загрузка не качественный фото:


  <input type="file" name="min" id="file" size="2048">

Размер <strong> 1 МБ</strong> (в формате <strong>.png, .gif, .jpeg, .jpg </strong>) файл можно отправить 


			 </div>



 
</div>

		</div>

		


						{!! Form::button('Сохранить', ['class' => 'btn btn-primary btn-block','type'=>'submit']) !!}



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
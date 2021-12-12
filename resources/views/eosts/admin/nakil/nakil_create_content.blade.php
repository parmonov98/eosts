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

<a href="{{route('nakil.index')}}" class="btn btn-primary btn-lg" style="margin-bottom: 5px;"><i class="fa fa-arrow-left"></i></a> Bizning mijozlarimiz
<hr>



{!! Form::open(['url' => (isset($result->id)) ? route('nakil.update',['nakil'=>$result->id]) : route('nakil.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}





<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>

<div class="col-md-6">Nomlanish: <input type="text" class="form-control" name="name" id="" value="{{isset($result->name)?$result->name:''}}"></div>

  

  <div class="{{isset($result)?'col-md-4':'col-md-6'}}">

      Rasm:


  <input type="file" name="img" id="file" size="1024">
Hajmi <strong> 1 МБ</strong> (<strong>.png, .gif, .jpeg, .jpg </strong> formatida) faylni yuborish mumkin


<hr />



			 </div>

@if(isset($result->id))
<div class="col-md-2" style="text-align: center;">  

  <p>{{ Html::image(asset('/nakil/'.$result->img),'',['style'=>'max-height: 95px;']) }}</p>
</div>
      <input type="hidden" name="_method" value="PUT">
@endif
 
</div>

		</div>

	

</div>
						{!! Form::button('Saqlash', ['class' => 'btn btn-primary btn-block','type'=>'submit']) !!}
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
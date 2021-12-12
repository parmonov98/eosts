<h2><u>Фон расмини ўзгартириш бўлими</u></h2>
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
<div id="content-page" class="content group">
				            <div class="hentry group">

{!! Form::open(['url' => route('setFonUp') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    
        <table width="100%">
          <tr>
            <td>
<label>Фон расмини ўзгартириш:</label>                   
  <input type="file" name="file" id="file" size="1024" >
  
 <div class="description">O'lchami <strong> 1 MB</strong>, hamda (<strong>.png, .gif, .jpeg, .jpg </strong>) ko'rinishdagi fayl junatishingiz mumkin.</div>
      </div>
            </td>
            <td valign="top">
<label>Фондаги расмининг холатини ўзгартириш:</label>               
<select name="css" class='form-control'>
<option value="1" {{isset($setname->css) ? ($setname->css==1?'selected':'')  : old('css')}}>Расм такрорлаб фонни тулдириш холати</option> 
<option value="0" {{isset($setname->css) ? ($setname->css==0?'selected':'')  : old('css')}}>1 та расм фонни тулдириш холати</option> 
</select>
            </td>
          </tr>
        </table>

			
		<br />
			
						{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}
{!! Form::close() !!}

		<br />
		<a id="mfile" href="/fon/{{isset($setname['img']) ? $setname['img']:''}}" class="btn" style="font-size: 0.6rem;" download>
<img src="{{ asset('fon')}}/{{isset($setname['img']) ? $setname['img']:''}}" width="500">
		</a>
</div>
</div>


 {!!Html::script('js/jquery.js')!!}
  {!!Html::script('js/jquery.datepicker.js')!!}

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
var maxSize = '1024';
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
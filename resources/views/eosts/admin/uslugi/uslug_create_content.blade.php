@if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>
    @endif

@if ($error = Session::get('error'))
	<div class="alert alert-error">
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
          
<div id="content-page" class="content group">
				            <div class="hentry group">


	


{!! Form::open(['url' => (isset($uslugi->id)) ? route('uslug.update',['uslug'=>$uslugi->id]) : route('uslug.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}





	<?php
	$i=0;
	$j=0;
	$languages=['ru'=>'Русский','en'=>'English','tu'=>'Türkçe'];
	?>
	<div class="col-md-9">
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
			Sarlavha ({{$label}}):<strong style="color:red;">*</strong> {!! Form::text('title['.$language.']',isset($uslugi->title[$language]) ? $uslugi->title[$language]  : old("title[$language]"), ['class'=>'form-control','placeholder'=>'Sahifa sarlavhasini kiriting']) !!}

			 </div>








			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			Qisqa tasvir ({{$label}}):<strong style="color:red;">*</strong> {!! Form::textarea('desc['.$language.']',isset($uslugi->desc[$language]) ? $uslugi->desc[$language]  : old("desc[$language]"), ['class'=>'form-control my-editor','rows'=>4,'placeholder'=>'...']) !!}
			</div>
			<div class="msg-error"></div>





			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			To'liq matn ({{$label}}):<strong style="color:red;">*</strong>{!! Form::textarea('text['.$language.']',isset($uslugi->text[$language]) ? $uslugi->text[$language]  : old("text[$language]"), ['class'=>'form-control my-editor','rows'=>4,'placeholder'=>'...']) !!}
			</div>
			<div class="msg-error"></div>







                </div>
            <?php $j++; } ?>




	</div>
	</div>








		<div class="col-md-3 bg-info p-t-15 p-b-20 p-l-15 p-r-15" style="background-color: rgb(66, 74, 93);color: #ffffff;        height: auto;padding-bottom: 10px;">




				<label class="control-label">Rasm yuklash:				</label>
		@if(isset($uslugi->img['min']))

				{{ Html::image(asset('/uslugi/'.$uslugi->img['min']),'',['style'=>'width:100%']) }}
				{!! Form::hidden('old_image',$uslugi->img['min']) !!}

		@endif


			<label class="control-label">
				
			</label>
			<div class="input-prepend">
			<input type="file" class="form-control" id="fileInput" name="image" multiple="" data-placeholder="Файла йўқ" data-buttonText="Rasm tanlang" data-buttonName="btn-primary">
			 </div>




		@if(isset($uslugi->id))
			<input type="hidden" name="_method" value="PUT">

		@endif

	<br />
			{!! Form::button('Saqlash', ['class' => 'btn btn-block btn-primary','type'=>'submit']) !!}

 <div class="col-md-12" style="padding: 15px 0px 0px 0px;">
<div class="raw">
	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Matn qutisi</h4>
                <h1>Ctrl+Shift+F</h1>
                Pony ekran rejimi va orqaga
              </div>
</div>
</div>

		</div>




{!! Form::close() !!}






<script>



  /*
	tinymce.init({
		  plugins: "table",
			  table_default_attributes: {
				'border': '1'
			  },
			  table_default_styles: {
				'border-collapsed': 'collapse',
				'width': '100%'
			  },
		  table_responsive_width: true
	});
  */


  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",


    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table  contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern",

    ],

    toolbar: "insertfile undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table_default_attributes",


    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",

      });
    }
  };



  tinymce.init(editor_config);


</script>
</div>
</div>
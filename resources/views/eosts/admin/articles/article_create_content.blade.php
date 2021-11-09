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

<div id="content-page" class="content group">
				            <div class="hentry group">


	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('admin/kalendar/kernel_main.css') }}" />
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('admin/kalendar/template_c5e455b.css') }}" data-template-style="true"/>


	<script type="text/javascript">if(!window.BX)window.BX={message:function(mess){if(typeof mess=='object') for(var i in mess) BX.message[i]=mess[i]; return true;}};</script>
<script type="text/javascript">(window.BX||top.BX).message({'JS_CORE_LOADING':'Загрузка...','JS_CORE_WINDOW_CLOSE':'Yopmoq','JS_CORE_WINDOW_EXPAND':'Развернуть','JS_CORE_WINDOW_NARROW':'Свернуть в окно','JS_CORE_WINDOW_SAVE':'Сохранить','JS_CORE_WINDOW_CANCEL':'Отменить','JS_CORE_H':'ч','JS_CORE_M':'м','JS_CORE_S':'с','JS_CORE_NO_DATA':'- Нет данных -','JSADM_AI_HIDE_EXTRA':'Скрыть лишние','JSADM_AI_ALL_NOTIF':'Показать все','JSADM_AUTH_REQ':'Требуется авторизация!','JS_CORE_WINDOW_AUTH':'Войти','JS_CORE_IMAGE_FULL':'Полный размер'});</script>
<script type="text/javascript">(window.BX||top.BX).message({'WEEK_START':'1'});(window.BX||top.BX).message({'MONTH_1':'Yanvar','MONTH_2':'Fevral','MONTH_3':'Mart','MONTH_4':'Aprel','MONTH_5':'May','MONTH_6':'Iyun','MONTH_7':'Iyul','MONTH_8':'Avgust','MONTH_9':'Sentyabr','MONTH_10':'Oktyabr','MONTH_11':'Noyabr','MONTH_12':'Dekabr','MONTH_1_S':'Yanvar','MONTH_2_S':'Fevral','MONTH_3_S':'Mart','MONTH_4_S':'Aprel','MONTH_5_S':'May','MONTH_6_S':'Iyun','MONTH_7_S':'Iyul','MONTH_8_S':'Avgust','MONTH_9_S':'Sentyabr','MONTH_10_S':'Oktyabr','MONTH_11_S':'Noyabr','MONTH_12_S':'Dekabr','MON_1':'Yan','MON_2':'Fev','MON_3':'Mar','MON_4':'Apr','MON_5':'May','MON_6':'Iyun','MON_7':'Iyul','MON_8':'Avg','MON_9':'Sen','MON_10':'Okt','MON_11':'Noya','MON_12':'Dek','DAY_OF_WEEK_0':'Yakshanba','DAY_OF_WEEK_1':'Dushanba','DAY_OF_WEEK_2':'Seshanba','DAY_OF_WEEK_3':'Chorshanba','DAY_OF_WEEK_4':'Payshanba','DAY_OF_WEEK_5':'Juma','DAY_OF_WEEK_6':'Shanba','DOW_0':'Yak','DOW_1':'Du','DOW_2':'Se','DOW_3':'Cho','DOW_4':'Pa','DOW_5':'Ju','DOW_6':'Sha','FD_SECOND_AGO_0':'#VALUE# секунд назад','FD_SECOND_AGO_1':'#VALUE# секунду назад','FD_SECOND_AGO_10_20':'#VALUE# секунд назад','FD_SECOND_AGO_MOD_1':'#VALUE# секунду назад','FD_SECOND_AGO_MOD_2_4':'#VALUE# секунды назад','FD_SECOND_AGO_MOD_OTHER':'#VALUE# секунд назад','FD_SECOND_DIFF_0':'#VALUE# секунд','FD_SECOND_DIFF_1':'#VALUE# секунда','FD_SECOND_DIFF_10_20':'#VALUE# секунд','FD_SECOND_DIFF_MOD_1':'#VALUE# секунда','FD_SECOND_DIFF_MOD_2_4':'#VALUE# секунды','FD_SECOND_DIFF_MOD_OTHER':'#VALUE# секунд','FD_MINUTE_AGO_0':'#VALUE# минут назад','FD_MINUTE_AGO_1':'#VALUE# минуту назад','FD_MINUTE_AGO_10_20':'#VALUE# минут назад','FD_MINUTE_AGO_MOD_1':'#VALUE# минуту назад','FD_MINUTE_AGO_MOD_2_4':'#VALUE# минуты назад','FD_MINUTE_AGO_MOD_OTHER':'#VALUE# минут назад','FD_MINUTE_DIFF_0':'#VALUE# минут','FD_MINUTE_DIFF_1':'#VALUE# минута','FD_MINUTE_DIFF_10_20':'#VALUE# минут','FD_MINUTE_DIFF_MOD_1':'#VALUE# минута','FD_MINUTE_DIFF_MOD_2_4':'#VALUE# минуты','FD_MINUTE_DIFF_MOD_OTHER':'#VALUE# минут','FD_MINUTE_0':'#VALUE# минут','FD_MINUTE_1':'#VALUE# минуту','FD_MINUTE_10_20':'#VALUE# минут','FD_MINUTE_MOD_1':'#VALUE# минуту','FD_MINUTE_MOD_2_4':'#VALUE# минуты','FD_MINUTE_MOD_OTHER':'#VALUE# минут','FD_HOUR_AGO_0':'#VALUE# часов назад','FD_HOUR_AGO_1':'#VALUE# час назад','FD_HOUR_AGO_10_20':'#VALUE# часов назад','FD_HOUR_AGO_MOD_1':'#VALUE# час назад','FD_HOUR_AGO_MOD_2_4':'#VALUE# часа назад','FD_HOUR_AGO_MOD_OTHER':'#VALUE# часов назад','FD_HOUR_DIFF_0':'#VALUE# часов','FD_HOUR_DIFF_1':'#VALUE# час','FD_HOUR_DIFF_10_20':'#VALUE# часов','FD_HOUR_DIFF_MOD_1':'#VALUE# час','FD_HOUR_DIFF_MOD_2_4':'#VALUE# часа','FD_HOUR_DIFF_MOD_OTHER':'#VALUE# часов','FD_YESTERDAY':'вчера','FD_TODAY':'сегодня','FD_TOMORROW':'завтра','FD_DAY_AGO_0':'#VALUE# суток назад','FD_DAY_AGO_1':'#VALUE# сутки назад','FD_DAY_AGO_10_20':'#VALUE# суток назад','FD_DAY_AGO_MOD_1':'#VALUE# сутки назад','FD_DAY_AGO_MOD_2_4':'#VALUE# суток назад','FD_DAY_AGO_MOD_OTHER':'#VALUE# суток назад','FD_DAY_DIFF_0':'#VALUE# дней','FD_DAY_DIFF_1':'#VALUE# день','FD_DAY_DIFF_10_20':'#VALUE# дней','FD_DAY_DIFF_MOD_1':'#VALUE# день','FD_DAY_DIFF_MOD_2_4':'#VALUE# дня','FD_DAY_DIFF_MOD_OTHER':'#VALUE# дней','FD_DAY_AT_TIME':'#DAY# в #TIME#','FD_MONTH_AGO_0':'#VALUE# месяцев назад','FD_MONTH_AGO_1':'#VALUE# месяц назад','FD_MONTH_AGO_10_20':'#VALUE# месяцев назад','FD_MONTH_AGO_MOD_1':'#VALUE# месяц назад','FD_MONTH_AGO_MOD_2_4':'#VALUE# месяца назад','FD_MONTH_AGO_MOD_OTHER':'#VALUE# месяцев назад','FD_MONTH_DIFF_0':'#VALUE# месяцев','FD_MONTH_DIFF_1':'#VALUE# месяц','FD_MONTH_DIFF_10_20':'#VALUE# месяцев','FD_MONTH_DIFF_MOD_1':'#VALUE# месяц','FD_MONTH_DIFF_MOD_2_4':'#VALUE# месяца','FD_MONTH_DIFF_MOD_OTHER':'#VALUE# месяцев','FD_YEARS_AGO_0':'#VALUE# лет назад','FD_YEARS_AGO_1':'#VALUE# год назад','FD_YEARS_AGO_10_20':'#VALUE# лет назад','FD_YEARS_AGO_MOD_1':'#VALUE# год назад','FD_YEARS_AGO_MOD_2_4':'#VALUE# года назад','FD_YEARS_AGO_MOD_OTHER':'#VALUE# лет назад','FD_YEARS_DIFF_0':'#VALUE# лет','FD_YEARS_DIFF_1':'#VALUE# год','FD_YEARS_DIFF_10_20':'#VALUE# лет','FD_YEARS_DIFF_MOD_1':'#VALUE# год','FD_YEARS_DIFF_MOD_2_4':'#VALUE# года','FD_YEARS_DIFF_MOD_OTHER':'#VALUE# лет','CAL_BUTTON':'Tanlamoq','CAL_TIME_SET':'Установить время','CAL_TIME':'Vaqt'});</script>

<script type="text/javascript">(window.BX||top.BX).message({'LANGUAGE_ID':'uz','FORMAT_DATE':'YYYY-MM-DD','FORMAT_DATETIME':'YYYY-MM-DD HH:MI:SS','COOKIE_PREFIX':'BITRIX_SM','SERVER_TZ_OFFSET':'18000','SITE_ID':'s3','USER_ID':'','SERVER_TIME':'1508311119','USER_TZ_OFFSET':'0','USER_TZ_AUTO':'Y','bitrix_sessid':'6308c152046fde3ca904213763a6e6e1'});</script>

	  <script type="text/javascript" src="/admin/kalendar/kernel_main.js"></script>

{!! Form::open(['url' => (isset($products->id)) ? route('article.update',['article'=>$products->id]) : route('article.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}





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
			Title:<strong style="color:red;">*</strong> {!! Form::text('title['.$language.']',isset($products->title[$language]) ? $products->title[$language]  : old("title[$language]"), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}

			 </div>


			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			Краткий описания:<strong style="color:red;">*</strong> {!! Form::textarea('description'.$language, isset($products['description'.$language]) ? $products['description'.$language]  : old('description'.$language), ['id'=>'editor','class' => 'form-control my-editor','placeholder'=>'Введите текст страницы']) !!}
			</div>
			<div class="msg-error"></div>




			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			Полный текст:{!! Form::textarea('text'.$language,  isset($products['text'.$language]) ? $products['text'.$language]  : old('text'.$language), ['id'=>'editor2','class' => 'form-control my-editor','placeholder'=>'Введите текст страницы']) !!}
			</div>
			<div class="msg-error"></div>







                </div>
            <?php $j++; } ?>




	</div>
	</div>








		<div class="col-md-3 bg-info p-t-15 p-b-20 p-l-15 p-r-15" style="background-color: rgb(66, 74, 93);color: #ffffff;        height: auto;padding-bottom: 10px;">




		@if(isset($products->img['min']))


				<label class="control-label">
					 Мақоладаги расм:
				</label>
				{{ Html::image(asset('/articles/'.$products->img['min']),'',['style'=>'width:100%']) }}
				{!! Form::hidden('old_image',$products->img['min']) !!}
			@if($key==1)
			<select name="uchir" class='form-control'>
			<option value="0">Расмга тегмаслик</option>
			<option value="1">Расмни учириш</option>
			</select>
			@endif

		@endif


			<label class="control-label">
				Загрузить изображение:
			</label>
			<div class="input-prepend">
			<input type="file" class="form-control" id="fileInput" name="image" multiple="" data-placeholder="Файла йўқ" data-buttonText=Выберите изображение data-buttonName="btn-primary">
			 </div>




			<label class="control-label">
				Введите дату вручную:
			</label>




<div class="from_to_input">
	<input placeholder="{{isset($products->created_at) ? $products->created_at->format('Y-m-d') : 'ГГГГ-ММ-ДД'}}{{ empty(old('created_at'))?'':old('created_at')}}" id="arrFilter_DATE_ACTIVE_FROM_2" class="form-control" name="created_at" type="text" onKeypress="if (event.keyCode < 46 || event.keyCode > 57) event.returnValue = false;">




	<span class="input_calendar">

<i class="fa fa-calendar" onclick="BX.calendar({node:this, field:'arrFilter_DATE_ACTIVE_FROM_2', form: '', bTime: true, currentTime: '1508329119', bHideTime: true});" onmouseover="BX.addClass(this, 'calendar-icon-hover');" onmouseout="BX.removeClass(this, 'calendar-icon-hover');" border="0"></i>
</span>


</div>

<br />

				<label class="control-label">
				Матнни чоп этиш:

			</label>

<select name="pwp" class='form-control'>
<option value="1" {{isset($products->pwp) ? ($products->pwp==1?'selected':'')  : old('pwp')}}>Ҳа чоп этиш</option>
<option value="0" {{isset($products->pwp) ? ($products->pwp==0?'selected':'')  : old('pwp')}}>Йўқ </option>
</select>
<br />


			<label class="control-label">
				Оставит комментария:

			</label>




<select name="izox" class='form-control'>
<option value="1" {{isset($products->izox) ? ($products->izox==1?'selected':'')  : old('izox')}}>Да</option>
<option value="0" {{isset($products->izox) ? ($products->izox==0?'selected':'')  : old('izox')}}>Нет</option>
</select>
<br />


<label class="control-label">Введет на слайдер:</label>

<select name="slider" class='form-control'>
<option value="0" {{isset($products->slider) ? ($products->slider==0?'selected':'')  : old('slider')}}>Нет</option>
<option value="1" {{isset($products->slider) ? ($products->slider==1?'selected':'')  : old('slider')}}>Да</option>
</select>

<br />


		<label class="control-label">Режим:</label>

<select name="heddin" class='form-control'>
<option value="1" {{isset($products->heddin) ? ($products->heddin==1?'selected':'')  : old('heddin')}}>Просмотр</option>
<option value="0" {{isset($products->heddin) ? ($products->heddin==0?'selected':'')  : old('heddin')}}>Скрыт</option>
</select>


<br />




			<label class="control-label">
				Выберите меню:<strong style="color:red;">*</strong>
			</label>
			<div class="input-prepend">
				{!! Form::select('category_id', $catMens,isset($products->category_id) ? $products->category_id  : '',['class'=>'form-control select2']) !!}
			 </div>



		@if(isset($products->id))
			<input type="hidden" name="_method" value="PUT">

		@endif

	<br />
			{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-primary','type'=>'submit']) !!}

 <div class="col-md-12" style="padding: 15px 0px 0px 0px;">
<div class="raw">
	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Текстовая поля</h4>
                <h1>Ctrl+Shift+F</h1>
                Пони экранный режим и обратней
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
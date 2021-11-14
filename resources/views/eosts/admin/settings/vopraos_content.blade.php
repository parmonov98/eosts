<h2><u>Выбира EOSTS</u></h2>

<div id="content-page" class="content group">
				            <div class="hentry group">

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


{!! Form::open(['url' => route('setVopraosUp') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}



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
    


      на {{$label}} :<strong style="color:red;">*</strong> 

     {!! Form::textarea('select['.$language.']',  isset($setname->select[$language]) ? $setname->select[$language]  : old("select[$language]"), ['id'=>'summernote','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}

       </div>




                </div>
            <?php $j++; } ?>
















		<br />

	{!! Form::button('Сохранить', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}

{!! Form::close() !!}


</div>
</div>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote*').summernote({
        height: 250
    });
</script>
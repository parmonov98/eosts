<h2><u>Savollar</u></h2>
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
Savollar {{$label}} tilidagi:<strong style="color:red;">*</strong> {!! Form::text('vopros['.$language.']', old("vopros[$language]"), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}



 </div>

      <div class="input-prepend"><span class="add-on">

      <i class="icon-user"></i></span>
    


      {{$label}} tilidagi javob:<strong style="color:red;">*</strong> 

      {!! Form::textarea('otvet['.$language.']', old("otvet[$language]"), ['id'=>'summernote','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
      

       </div>




                </div>
            <?php $j++; } ?>





		<br />

	{!! Form::button('Saqlash', ['class' => 'btn btn-block btn-success btn-flat','type'=>'submit']) !!}

{!! Form::close() !!}



@if(count($setname)>0)
<table class="table table-striped table-bordered table-hover" style="margin-top: 30px;">
  <thead>
    <tr class="active">
      <th scope="col">#</th>
      <th scope="col">Savollar</th>
      <th scope="col">Javob</th>
      <th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
    </tr>
  </thead>
  <tbody>
@foreach($setname as $k=>$set)
    <tr>
      <th scope="row">{{++$k}}</th>
      <td>{!!$set->vopros['ru']!!}</td>
      <td>{!!$set->otvet['ru']!!}</td>
      <td>
{!! Form::open(['url' => route('setVopdelUp',['id'=>$set->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
{{ method_field('DELETE') }}
{!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
{!! Form::close() !!}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endif

</div>
</div>


<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote*').summernote({
        height: 100
    });
</script>
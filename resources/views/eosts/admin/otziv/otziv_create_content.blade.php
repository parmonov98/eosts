<h2><u>Работать с отзывы от клиентов</u></h2>

<div id="content-page" class="content group">
				            <div class="hentry group">

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    @if ($errors = Session::get('errors'))
	<div class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<ul>
		@foreach ($errors as $key => $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	</div>									
    @endif
    @if ($error = Session::get('error'))
	<div class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $error }}</strong>
	</div>									
    @endif

{!! Form::open(['url' => (isset($otzivi->id)) ? route('otziv.update',['otziv'=>$otzivi->id]) : route('otziv.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}



  <div class="col-md-12">
      

 

                         
              

    <div class="input-prepend"><span class="add-on">

<i class="icon-user"></i></span>
Имя:<strong style="color:red;">*</strong> 

<input class="form-control" placeholder="Введите название страницы" name="name" value="{{isset($otzivi->name)?$otzivi->name:''}}" type="text">

 </div>

      <div class="input-prepend"><span class="add-on">

      <i class="icon-user"></i></span>
    

<br />
      Текст :<strong style="color:red;">*</strong> 
      <textarea id='summernote' class= 'form-control' placeholder='Введите текст страницы' name="text">{{isset($otzivi->name)?$otzivi->text:''}} </textarea>


      

       </div>
		@if(isset($otzivi->id))
			<input type="hidden" name="_method" value="PUT">

		@endif

<br />


<div class="row">
	<div class="col-md-6">
		      Загрузка качественный фото:
  <input type="file" name="img" id="file" size="2048">
Размер <strong> 1 МБ</strong> (в формате <strong>.png, .gif, .jpeg, .jpg </strong>) файл можно отправить 
	</div>
@if(isset($otzivi->name))
	<div class="col-md-6">
            @if(!empty($otzivi->img))
    <img class="d-flex align-self-start mr-3 img-thumbnail" align="left" style="width: 160px;" src="{{ asset('/users/'.$otzivi->img) }}" alt="{{ $otzivi->name }}">
    @else
        <img class="d-flex align-self-start mr-3 img-thumbnail" align="left" style="width: 160px;" src="{{ asset('/users/user.png') }}" alt="{{ $otzivi->name }}">
    @endif
	</div>
	@endif
</div>
<br />

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
        height: 100
    });
</script>



<h2><a class="btn btn-primary btn-lg " href="{{route('otziv.create')}}"><i class="fa fa-plus"></i></a> <u>Отдел отзывы от клиентов</u></h2>
	
	<div id="content-page" class="content group">
				            <div class="hentry group">
    @if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>									
    @endif
    @if ($error = Session::get('error'))
	<div class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $error }}</strong>
	</div>									
    @endif




@if($otzivi)

<table class="table table-striped table-bordered table-hover" width="100%">

<thead> 
	<tr> 
		<th>#</th> 
		<th>Имя</th> 
		<th>Текст</th> 
		<th>Фото</th> 
		<th style="width: 50px;text-align: center;"><i class="fa fa-eye"></i></th>
		<th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
	</tr> 
</thead>

<tbody>
@foreach($otzivi as $k=>$requ)
		<tr >
		<td>{{++$k}}</td>
		<td>{{$requ->name}}</td>
		<td>{!!$requ->text!!}</td>
		<td><img src="/users/{{$requ->img}}" height="55"></td>


<td>
	<a href="{{route('otziv.edit',['otziv' => $requ->id])}}" class="btn btn-success">
		<i class="fa fa-eye"></i></a>
	
	</td>
<td>{!! Form::open(['url' => route('otziv.destroy',['otziv'=>$requ->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
{{ method_field('DELETE') }}
{!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
{!! Form::close() !!}
</td>

	</tr>
@endforeach
</tbody>
</table>
  @endif

				        <div class="short-table white">




				             <div class="wrap_result"></div>


				            <!-- START COMMENTS -->
				            <div id="comments">



				            </div>
				            <div class="wrap_result"></div>
				          @if($otzivi)
				          <div class="pagination" align="center">
				             {{$otzivi->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



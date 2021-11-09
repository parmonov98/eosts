
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


<h2 class="float-right text-right"><a href="{{url('export-excel-csv-file/xlsx')}}" class="btn btn-success mr-1">Export Excel</a></h2>



@if($requs)

<table class="table table-striped table-bordered table-hover" width="100%">

<thead> 
	<tr> 
		<th>#</th> 
		<th>Имя</th> 
		<th>Телефон</th> 
		<th>E-mail</th> 
		<th>Тип услуги</th> 
		<th>Время отправлений</th> 
		<th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
	</tr> 
</thead>

<tbody>
@foreach($requs as $k=>$requ)
		<tr>
		<td>{{++$k}}</td>
		<td>{{$requ->name}}</td>
		<td>{{$requ->number}}</td>
		<td>{{$requ->email}}</td>
		<td>{{$requ->package}}</td>
		<td>{{ is_object($requ->created_at) ? $requ->created_at->format('F d, Y') : ''}}</td>

<td>{!! Form::open(['url' => route('requ.destroy',['requ'=>$requ->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
				          @if($requs)
				          <div class="pagination" align="center">
				             {{$requs->links()		}}
				            <!-- END COMMENTS -->
				            </div>
				          @endif

 </div>



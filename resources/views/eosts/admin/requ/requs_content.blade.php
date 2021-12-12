<h2><u>Barcha buyurtmalar</u></h2>
	
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




@if($requs->count()>0)

<table class="table table-striped table-bordered table-hover" width="100%">

<thead> 
	<tr> 
		<th>#</th> 
		<th>Ism</th> 
		<th>Telefon</th> 
		<th>E-mail</th> 
		<th>Xizmat turi</th> 
		<th>Junatilish vaqtlari</th> 
		<th style="width: 50px;text-align: center;"><i class="fa fa-eye"></i></th>
		<th style="width: 50px;text-align: center;"><i class="fa fa-trash-o"></i></th>
	</tr> 
</thead>

<tbody>
@foreach($requs as $k=>$requ)
		<tr {!! ($requ->prev == 0)?'style="color: red;"':'' !!}>
		<td>{{++$k}}</td>
		<td>{{$requ->name}}</td>
		<td>{{$requ->phone}}</td>
		<td>{{$requ->email}}</td>
		<td>{{$requ->package}}</td>
		<td>{{ is_object($requ->created_at) ? $requ->created_at->format('F d, Y') : ''}}</td>
		<td>

	<a href="{{route('requ.edit',['requ' => $requ->id])}}" class="btn btn-success">
		<i class="fa fa-eye"></i></a>
	
	</td>
<td>{!! Form::open(['url' => route('requ.destroy',['requ'=>$requ->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
{{ method_field('DELETE') }}
{!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
{!! Form::close() !!}
</td>

	</tr>
@endforeach
</tbody>
</table>
@else
<h2 style="text-align: center;color: red;">Buyurtma yo'q !!!</h2>
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



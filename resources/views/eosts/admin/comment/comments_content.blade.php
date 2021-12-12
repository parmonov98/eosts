@if($comments)
	<div id="content-page" class="content group">
				            <div class="hentry group">

  <h2>
@if(isset($_GET['page']) && $_GET['page'] > 1 )
  Sharh bo'limi
@else
   ({!!($counts == 0)?$counts:'<font color="red">'.$counts.'</font>'!!}) ta yangi izohlar
@endif
  </h2>
      @if ($status = Session::get('status'))
	<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $status }}</strong>
	</div>
    @endif
				                <div class="short-table white">
				                    <table class="table table-striped table-hover" style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                <th class="align-left">ID</th>
				                                <th>Sarlavha</th>
				                                <th>Matn</th>
				                                <th>E-mail</th>
				                                <th><i class="fa fa-eye-slash"></i> | <i class="fa fa-eye"></i></th>
				                                <th style="width: 100px;"><i class="fa fa-trash-o"></i></th>
				                            </tr>
				                        </thead>
				                        <tbody>

											@foreach($comments as $comment)
											<tr {!! ($comment->prev == 0)?'style="color: red;"':'' !!}>
				                                <td class="align-left">{{$comment->id}}</td>
				                                <td class="align-left">



    {{ ($comment->user_id != NULL)?$user[$comment->user_id]:''}}
      {!! isset($comment->name)?$comment->name:''  !!}

				                               </td>
				                                <td class="align-left">{!!substr($comment->text,0,200)!!}</td>

				                                <td>
				                                {{($comment->user_id != NULL)?$email[$comment->user_id]:''}}
				                                {{isset($comment->email)?$comment->email:''}}</td>

				                        <td style="font-size:20px;text-align: center;">
{!! ($comment->heddin == 0)?'<i class="fa fa-eye-slash"></i>':'<i class="fa fa-eye"></i>'!!}</td>


				                                <td>

<a href="{{route('izox.edit',['izox'=>$comment->id])}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>

												{!! Form::open(['url' => route('izox.destroy',['izox'=>$comment->id]),'class'=>'form-horizontal','style'=>'float: right;','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger','type'=>'submit']) !!}
												{!! Form::close() !!}

												</td>
											 </tr>
											@endforeach

				                        </tbody>
				                    </table>
				                </div>

				            </div>

				            <!-- START COMMENTS -->
				            <div id="comments">

				            </div>
				            <div class="wrap_result"></div>
				          <div id="pagination" align="center"> {{$comments->links()}}</div>
				            <!-- END COMMENTS -->
				        </div>
@else
	<div id="content-page" class="content group">
		<div class="hentry group">
			<h2>Изохлар билан ишлаш бўлими: Изох мавжуд эмас.</h2>
		</div>
	</div>
@endif
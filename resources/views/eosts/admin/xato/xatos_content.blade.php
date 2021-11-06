@if($comments)
	<div id="content-page" class="content group">
				            <div class="hentry group">

  <h2>
@if(isset($_GET['page']) && $_GET['page'] > 1 )
  Xabarlar bilan ishlash bo`limi
@else
  ({!!($counts == 0)?$counts:'<font color="red">'.$counts.'</font>'!!}) ta yangi xabar mavjud
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
				                                <th>Ismi:</th>
				                               <th>IP</th>
				                               <th>URL</th>
				                               <th>Изох</th>
				                                <th style="width: 100px;">Дествие</th>
				                            </tr>
				                        </thead>
				                        <tbody>


											@foreach($comments as $comment)
											<tr {!! ($comment->prev == 0)?'style="color: red;"':'' !!}>
				                                <td class="align-left">{{$comment->id}}</td>
				                                <td class="align-left">
      {!! isset($comment->user)?$comment->user:'Ананим'  !!}
				                               </td>
				                               <td class="align-left">{!!$comment->ip!!}</td>
				                               <td class="align-left">
				                               	<a href="{!!$comment->url!!}" target="_blank">{!!$comment->url!!}</a>
				                               </td>
				                                <td class="align-left">{{$comment->comment?substr($comment->comment,0,15):'Изох йўқ'}}</td>


				                                <td align="center">
		                                	<a target="_blank" href="{{route('xato.edit',['xato' => $comment->id])}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>

												{!! Form::open(['url' => route('xato.destroy',['xato'=>$comment->id]),'class'=>'form-horizontal','style'=>'float: right;','method'=>'POST']) !!}
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
				           <div id="pagination" align="center">    {{$comments->links() }} </div>
				            <!-- END COMMENTS -->
				        </div>
@else
<div id="content-page" class="content group">
<div class="hentry group">
  <h2>Хаторлар билан ишлаш бўлими: хатор мавжуд эмас.</h2>
  </div></div>
@endif
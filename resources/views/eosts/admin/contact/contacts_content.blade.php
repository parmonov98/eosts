@if($comments)
	<div id="content-page" class="content group">
				            <div class="hentry group">

  <h2>
@if(isset($_GET['page']) && $_GET['page'] > 1 )
 Отдел сообщения 
@else
  ({!!($counts == 0)?$counts:'<font color="red">'.$counts.'</font>'!!}) новые сообщения
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
				                                <th>Имя:</th>
				                               <th>Текст</th>
				                                <th>Телефон</th>

				                                 <th>E-mail</th>
				                                <th style="width: 70px;text-align: center;">PDF</th>



				                                <th style="width: 70px;">Дествие</th>
				                            </tr>
				                        </thead>
				                        <tbody>










											@foreach($comments as $comment)
											<tr {!! ($comment->prev == 0)?'style="color: red;"':'' !!}>
				                                <td class="align-left">{{$comment->id}}</td>
				                                <td class="align-left">
	<a href="{{route('contact.edit',['contact' => $comment->id])}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>
	  {{Html::link(route('contact.edit',['contact'=>$comment->id]),($comment->user_id != NULL)?$user[$comment->user_id]:'')}}
      {!! Html::link(route('contact.edit',['contact'=>$comment->id]),isset($comment->name)?$comment->name:'')  !!}

				                               </td>
				                                <td class="align-left">{!!substr($comment->message,0,150)!!}</td>
				                                <td class="align-left">{!!$comment->site!!}</td>

				                                <td>
				                                {{($comment->user_id != NULL)?$email[$comment->user_id]:''}}
				                                {{isset($comment->email)?$comment->email:''}}</td>


				                                <td class="align-center" style="vertical-align: inherit;" align="center"><a href="{{ route('mpdf',['id'=>$comment->id])}}" class="btn btn-warning"><i class="fa fa-file-pdf-o"></i></a></td>



				                                <td align="center">
												{!! Form::open(['url' => route('contact.destroy',['contact'=>$comment->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
  <h2>Хабарлар билан ишлаш бўлими: хабар мавжуд эмас.</h2>
  </div></div>
@endif
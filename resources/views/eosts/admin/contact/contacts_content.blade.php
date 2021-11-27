


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
				                                 <th>E-mail</th>
				                                <th style="width: 56px;text-align: center;"><i class="fa fa-eye"></i></th>
				                                <th style="width: 56px;text-align: center;"><i class="fa fa-trash-o"></i></th>
				                            </tr>
				                        </thead>
				                        <tbody>










											@foreach($comments as $comment)
											<tr {!! ($comment->prev == 0)?'style="color: red;"':'' !!}>
				                                <td class="align-left">{{$comment->id}}</td>
				                                <td class="align-left">

{{($comment->user_id != NULL)?$user[$comment->user_id]:''}}{{isset($comment->name)?$comment->name:''}}


				                               </td>
				                                <td class="align-left">{!!substr($comment->message,0,150)!!}</td>
				                                

				                                <td>
				                                {{($comment->user_id != NULL)?$email[$comment->user_id]:''}}
				                                {{isset($comment->email)?$comment->email:''}}</td>


<td class="align-center" style="vertical-align: inherit;" >

	<a data-toggle="modal" data-target="#text{{$comment->id}}"  class="btn btn-warning"><i class="fa fa-eye"></i></a>




<!-- Modal -->
<div class="modal fade" data-id="{{$comment->id}}" id="text{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b class="modal-title" id="exampleModalLabel">Сообщения от: {{($comment->user_id != NULL)?$user[$comment->user_id]:''}}{{isset($comment->name)?$comment->name:''}}
</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$comment->message}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="prev" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</td>



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
  <h2>Раздел сообщений: сообщение нет.</h2>
  </div></div>
@endif








<script>
        $(document).ready(function(){
            $('#prev*').click(function(e){
                e.preventDefault();
          var prev = $('.in').data('id');
                  $.ajax({
                    url: "{{ route('setPrev') }}",
                    method: 'post',
                    data: {"_token":$('meta[name="csrf-token"]').attr('content'),prev: prev},
                    success: function(result){
                        if(result.errors)
                        {
                            $('#alert-danger').html(' ');

                            $.each(result.errors, function(key, value){
                                $('#alert-danger').addClass('show');
                                $('#alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                    
                    }
                });
            });
        });
    </script>    

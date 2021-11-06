<div class="row">
   
<table class="table table-hover table-bordered text-center">
        <tr >
            
            <th class="text-center">Name(lotincha)</th>
            <th class="text-center" width="280px">Action</th>
        </tr>    
    <tr>  
        <td>
          {!! Form::text('name',isset($roles->name) ? $roles->name  : old('name'), ['placeholder'=>'Введите название ','style'=>'width: 100%']) !!}        
                            @if ($errors->has('role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('role') }}</strong>
                                </span>
                            @endif
        </td>
        <td><button type="submit" class="btn btn-primary" style="width: 100%;">Ok</button></td>
    </tr>  
    </table>
    
</div>
<div class="row">
        <!-- left column -->


<div class="col-md-12">
          <!-- Custom Tabs -->


    <?php
    $i=0;
    $j=0;
    $languages=['oz'=>'Ўзбекча','uz'=>'O`zbekcha','ru'=>'Русский'];
    ?>
     
                
@if ($status = Session::get('status'))
                                    <div class="alert alert-success">
                                    <button class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $status }}</strong>
                                    </div>                                  
                                    @endif      

          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">

            <?php foreach ($languages as $language => $label) { ?>
                <li class="<?= ($i==0)?'active':'' ?>"><a data-toggle="tab" aria-expanded="false" href="#<?=$language?>"><?=$label?></a></li>  
          <?php $i++; } ?>
           </ul>
 <form method="post" action="{{route('ish.store')}}">   
        @csrf
            <div class="tab-content">

<?php foreach ($languages as $language => $label) { ?>
               <div id="<?=$language?>" class="tab-pane <?= ($j==0)?'active':'' ?>">    


           <div class="box-header with-border">
              <h3 class="box-title">Сайтлар техник хизмат кўрсатиш</h3>
            </div>
            <div class="box-body">
              <div class="row">







        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Сайтлар техник хизмат кўрсатиш</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-1" >
                 <?=$label?>:<input type="text" id="activ1" name="yil[<?=$language?>][0]" class="form-control" placeholder="..." value="{{isset($tavar['yil'][$language][0])?$tavar['yil'][$language][0]:''}}">                 
                </div>
                <div class="col-xs-2">
                  Сўм:<input type="text" id="activ" name="yil_[0]" value="{{isset($tavar['yil_']['0'])? $tavar['yil_']['0']:''}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="...">                    
                </div>

                <div class="col-xs-1" >
                 <?=$label?>:<input type="text" id="activ1" name="yil[<?=$language?>][1]" class="form-control" placeholder="..." value="{{isset($tavar['yil'][$language][1])?$tavar['yil'][$language][1]:''}}">                 
                </div>
                <div class="col-xs-2">
                  Сўм:<input type="text" id="activ" name="yil_[1]" value="{{isset($tavar['yil_']['1'])? $tavar['yil_']['1']:''}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="...">                    
                </div>       
                         
                <div class="col-xs-1" >
                 <?=$label?>:<input type="text" id="activ1" name="yil[<?=$language?>][2]" class="form-control" placeholder="..." value="{{isset($tavar['yil'][$language][2])?$tavar['yil'][$language][2]:''}}">                 
                </div>
                <div class="col-xs-2">
                  Сўм:<input type="text" id="activ" name="yil_[2]" value="{{isset($tavar['yil_']['2'])? $tavar['yil_']['2']:''}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="...">                    
                </div>

                <div class="col-xs-1" >
                 <?=$label?>:<input type="text" id="activ1" name="yil[<?=$language?>][3]" class="form-control" placeholder="..." value="{{isset($tavar['yil'][$language][3])?$tavar['yil'][$language][3]:''}}">                 
                </div>
                <div class="col-xs-2">
                  Сўм:<input type="text" id="activ" name="yil_[3]" value="{{isset($tavar['yil_']['3'])? $tavar['yil_']['3']:''}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="...">                    
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>











        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Sayt dizayni</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-9" >
                 <?=$label?>:<input type="text" id="activ1" name="sd_s[<?=$language?>]" class="form-control" placeholder="..." value="{{$tavar['sd_s'][$language]}}">
                 <input type="text" id="activ1" name="sd_m[<?=$language?>]" class="form-control" placeholder="..." value="{{$tavar['sd_m'][$language]}}">
                </div>
                <div class="col-xs-3">
                  Сўм:<input type="text" id="activ" name="sd_sum[s]" value="{{$tavar['sd_sum']['s']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="...">
                    <input type="text" id="activ" name="sd_sum[m]" value="{{$tavar['sd_sum']['m']}}"  onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="...">
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>

         <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sahifalar soni</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-2" >
                 0-5:<input type="text" name="ss_sum[s0]" value="{{$tavar['ss_sum']['s0']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" id="activ1" class="form-control" placeholder="...">
                </div>
                <div class="col-xs-2">
                  5-10:<input type="text" name="ss_sum[s5]" value="{{$tavar['ss_sum']['s5']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" id="activ" class="form-control" placeholder="...">
                </div>
                <div class="col-xs-2">
                  10-20:<input type="text" name="ss_sum[s10]" value="{{$tavar['ss_sum']['s10']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" id="activ" class="form-control" placeholder="...">
                </div>
                <div class="col-xs-3">
                  20-30:<input type="text" name="ss_sum[s20]" value="{{$tavar['ss_sum']['s20']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" id="activ" class="form-control" placeholder="...">
                </div>
                <div class="col-xs-3">
                  30+:<input type="text" name="ss_sum[s30]" value="{{$tavar['ss_sum']['s30']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" id="activ" class="form-control" placeholder="...">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

         <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Веб-сайт юритиладиган тилларини нархлари.</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-12" >
                <input type="text" name="tl_sum" value="{{$tavar['tl_sum']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" id="activ1" class="form-control" placeholder="...">
                </div>               
              </div>
            </div>
            <!-- /.box-body -->
          </div>


<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Асосий иш (хизмат)лар</h3>
            </div>
            <div class="box-body">
              <div class="row">
                 <div class="col-xs-9">
                  <?=$label?>:
               <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][0]}}" class="form-control" placeholder="Веб-сайтнинг хавфсизлик тизими.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][1]}}" class="form-control" placeholder="Администратор бўлими">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][2]}}" class="form-control" placeholder="Таклиф ва хабарларни жунатиш (Қайта алоқа).">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][3]}}" class="form-control" placeholder="Ҳар бир мақолага изох қолдириш.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][4]}}" class="form-control" placeholder="Қидирув тизими.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][5]}}" class="form-control" placeholder="Telegram иловасига хабар жунатиш хизмати.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][6]}}" class="form-control" placeholder="Қўл телефонига SMS хабар жунатиш хизмати.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][7]}}" class="form-control" placeholder="Фото ва видео галерея бўлимини ташкел этиш.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][8]}}" class="form-control" placeholder="Веб-саҳифани PDF форматига ўтказиб юклаш олиш функцияси.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][9]}}" class="form-control" placeholder='"Чоп этиш" функцияси.'>
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][10]}}" class="form-control" placeholder="Расмий сайт янгиликларига обуна бўлиш функцияси.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][11]}}" class="form-control" placeholder="Virtual qabulxona tizimi.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][12]}}" class="form-control" placeholder="Сайт харитаси.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][13]}}" class="form-control" placeholder="Сайтга ташриф(жорий вайтда қанча одам сайтни кўрятганлиги).">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][14]}}" class="form-control" placeholder="Сўровнома ўтказиш.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][15]}}" class="form-control" placeholder="Экран сухандони(белгиланган матнни экрандан ўқиши).">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][16]}}" class="form-control" placeholder="Имконияти чеклангаилар учун функсия">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][17]}}" class="form-control" placeholder="RSS янгиликлар лентаси.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][18]}}" class="form-control" placeholder="Маълумотлар куп булиши кутилган сахифаларда сахифалаш (pagination) булиши.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][19]}}" class="form-control" placeholder="Каленлар (ўтган саналарнинг мақолалари белгиланган).">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][20]}}" class="form-control" placeholder="Соат ўрнатиш.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][21]}}" class="form-control" placeholder="Грамматик хатоликларни кўрсатиб жунатиш (Ctrl+Enter).">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][22]}}" class="form-control" placeholder="500,404,403 хатолик саҳифалари.">
                 <input type="text" id="activ1" name="ai_<?=$language?>[]" value="{{$tavar['ai_'.$language][23]}}" class="form-control" placeholder="Баъзадаги маълумотларни шифрлаш.">
                    
                </div> 
                <div class="col-xs-3">
                  Сўм:
                 <input type="text" id="activ" name="ai_s[0]" value="{{$tavar['ai_s'][0]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[1]" value="{{$tavar['ai_s'][1]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[2]" value="{{$tavar['ai_s'][2]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[3]" value="{{$tavar['ai_s'][3]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[4]" value="{{$tavar['ai_s'][4]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[5]" value="{{$tavar['ai_s'][5]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[6]" value="{{$tavar['ai_s'][6]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[7]" value="{{$tavar['ai_s'][7]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[8]" value="{{$tavar['ai_s'][8]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[9]" value="{{$tavar['ai_s'][9]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[10]" value="{{$tavar['ai_s'][10]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[11]" value="{{$tavar['ai_s'][11]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[12]" value="{{$tavar['ai_s'][12]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[13]" value="{{$tavar['ai_s'][13]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[14]" value="{{$tavar['ai_s'][14]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[15]" value="{{$tavar['ai_s'][15]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[16]" value="{{$tavar['ai_s'][16]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[17]" value="{{$tavar['ai_s'][17]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[18]" value="{{$tavar['ai_s'][18]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[19]" value="{{$tavar['ai_s'][19]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[20]" value="{{$tavar['ai_s'][20]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[21]" value="{{$tavar['ai_s'][21]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[22]" value="{{$tavar['ai_s'][22]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ai_s[23]" value="{{$tavar['ai_s'][23]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">                    
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>





<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ҳост</h3>
            </div>
            <div class="box-body">
              <div class="row">

                <div class="col-xs-9">
                 <?=$label?>:

                <input type="text" id="activ1" name="ho_<?=$language?>[2]" value="{{$tavar['ho_'.$language][2]}}" class="form-control" value="200 Мегабайт">
                 <input type="text" id="activ1"  name="ho_<?=$language?>[5]" value="{{$tavar['ho_'.$language][5]}}" class="form-control" value="500 Мегабайт">
                 <input type="text" id="activ1"  name="ho_<?=$language?>[10]" value="{{$tavar['ho_'.$language][10]}}" class="form-control" value="1 Гегабайт">
                 <input type="text" id="activ1" name="ho_<?=$language?>[20]" value="{{$tavar['ho_'.$language][20]}}" class="form-control" value="2 Гегабайт">
                 <input type="text" id="activ1" name="ho_<?=$language?>[30]" value="{{$tavar['ho_'.$language][30]}}" class="form-control" value="3 Гегабайт">
                 <input type="text" id="activ1" name="ho_<?=$language?>[50]" value="{{$tavar['ho_'.$language][50]}}" class="form-control" value="5 Гегабайт">
                    
                </div>

                <div class="col-xs-3">
                  Сўм:
                 <input type="text" id="activ" name="ho_s[2]" value="{{$tavar['ho_s'][2]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ho_s[5]" value="{{$tavar['ho_s'][5]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ho_s[10]" value="{{$tavar['ho_s'][10]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ho_s[20]" value="{{$tavar['ho_s'][20]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ho_s[30]" value="{{$tavar['ho_s'][30]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                 <input type="text" id="activ" name="ho_s[50]" value="{{$tavar['ho_s'][50]}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">

                    
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>







          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Домин</h3>
            </div>
            <div class="box-body">
              <div class="row">

                <div class="col-xs-9">
                 <?=$label?>:<input type="text" id="activ1" name="do[<?=$language?>]" class="form-control" value="{{$tavar['do'][$language]}}">
                </div>
 
                <div class="col-xs-3">
                  Сўм:<input type="text" id="activ" name="do_sum" value="{{$tavar['do_sum']}}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="Сўм...">
                </div>
                <input class="btn" type="submit" value="Ok">
                        
              </div>
            </div>
            <!-- /.box-body -->




                </div>
         
          </div>
          </div>


              </div>
              <!-- /.tab-pane -->
            
             <?php $j++; } ?>

              <!-- /.tab-pane -->
            </div>
</form>

            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>




    </div>
                   
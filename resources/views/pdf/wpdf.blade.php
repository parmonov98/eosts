<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
  <title>{{$names}}</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style type="text/css">
  body { font-family: DejaVu Sans, sans-serif; }
	div.panel-body p img{
	    border: 1px solid rgba(204, 201, 201, 0.34);
    margin-right: 4px;
    box-shadow: 0 0 9px #acadad;
}
img{width: 100%;}
</style>
</head>
<body>

<table  style="width: 80%;" align="center">
<tbody>
<tr>
<td align="center">
<strong> Сообщения от</strong> <a href=<?php echo 'http://www.'.$_SERVER['HTTP_HOST'];?>><?php echo 'www.'.$_SERVER['HTTP_HOST']; ?></a>
</td>
</tr>
</tbody>
</table>



<table class="sozlash"   style="width: 80%;" align="center">
<tbody>
<tr>
<td style="width: 20px;">
1
</td>
<td style="width: 333px;">
&nbsp;&#8470;
</td>
<td style="width: 333px;">
&nbsp;{{$qabulxona->id}}
</td>
</tr>

<tr>
<td style="width: 20px;">
2
</td>
<td style="width: 333px;">
&nbsp;Дата и время получения вопроса
</td>
<td style="width: 333px;">
{{ is_object($qabulxona->created_at) ?$qabulxona->created_at->format('H:i d.m.Y') : ''}}
</td>
</tr>
<tr>
<td style="width: 20px;">
3
</td>
<td style="width: 333px;">
&nbsp;Савол муаллифи Ф.И.О.
</td>
<td style="width: 333px;">
{{$qabulxona->name}}
</td>
</tr>

<tr>
<td style="width: 20px;">
4
</td>
<td style="width: 333px;">
&nbsp;Адрес электронной почты
</td>
<td style="width: 333px;">
{{$qabulxona->email}}
</td>
</tr>


<tr>
<td style="width: 20px; height:200px">
5
</td>
<td style="width: 672px;" colspan="2" valign="top">
<strong>&nbsp;Текст сообщения:</strong> {{$qabulxona->message}}
</td>
</tr>





</tbody>
</table>



<style>
table{font-size: 16.5px;}
.sozlash{border-collapse: collapse;}
.sozlash td{border: 1px solid black;}
p#ung{text-align: end;}

</style>
  
</body>
</html>
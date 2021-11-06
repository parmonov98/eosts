<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Certificat</title>



<style type="text/css">
  body { font-family: Ephesis-Regular, sans-serif;height: 100%; }
/*img{width: 100%;   height: auto;  }*/


font-family: "Gill Sans", sans-serif;


</style>
@if(isset($user))
<style type="text/css">
   body { background-image: url({!! $user['img'] !!});  }

</style> 

  @if(isset($user) && $user['css']==0)
  <style type="text/css">
  html, body {height: 100%;background-attachment: fixed;}
  body {background-size: cover;background-repeat: no-repeat;}
  </style>
  @endif

 @endif
</head>
<body>


<table border=0 width="100%">

<tr height=10><td></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr align="center"><td> @auth {{ Auth::user()->name }}@endif</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr align="right"><td>&nbsp;<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(90)->backgroundColor(203,206,255,0)->generate(Auth::user()->name)) !!} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>


</table>


 

</body>
</html>
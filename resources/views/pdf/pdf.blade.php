<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?  header('Content-Type: image/webp'); ?>

    <title>Xabarlar</title>
<style type="text/css">
  body { font-family: DejaVu Sans, sans-serif; }
	div.panel-body p img{
	    border: 1px solid rgba(204, 201, 201, 0.34);
    margin-right: 4px;
    box-shadow: 0 0 9px #acadad;
}
img{max-width: 100%;   height: auto;  }
</style>

</head>
<body>
<?php

$phrase  = $user['text'];



if((str_replace(array("/photos/"), array("http://".$_SERVER['HTTP_HOST']."/photos/"), $phrase))==true)
{
  $text =  str_replace(array("/photos/"), array("http://".$_SERVER['HTTP_HOST']."/photos/"), $phrase);
}
else
{
  $text =  str_replace(array("/files/"), array("http://".$_SERVER['HTTP_HOST']."/files/"), $phrase);
}



?>



       <strong>
	   <h1>{!!$user['title']!!}</h1>

	   </strong>


@if(isset($user['img']))

 <img src="{{ asset('/articles/'.$user['img']['max']) }}" type="image/jpeg">

 @endif






{!!$text!!}

	<style>
    .page-break {
        page-break-after: always;
    }
    </style>


</body>
</html>
<?php 
if(!session()->has('lang')){session()->put('lang', 'ru');  }$lang = session('lang');

$center = '';$title = '';$lat ='';$lng ='';
foreach ($maps as $key => $map) { 
  $lat .= $map->longitu;
  $lng .= $map->latitu;
  $title .= $map->title[$lang];
} 
// dd($center);
?>



<iframe width="600" height="450" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;coord=40.16069978711982, 64.55527287116463&amp;q=EvroOsiyo Sarbon Trans Servis&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br />


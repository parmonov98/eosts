<?php
    if(!session()->has('lang')){
            session()->put('lang', 'oz');
        }
    $lang = session('lang');

$public = substr($_SERVER['REQUEST_URI'], 1,6);  
?>
@if($menu)
                        <ul class="navbar-nav ml-auto" itemprop="about" itemscope="" itemtype="#">

                            <li>
                                <a href="/" >
<i class="icofont-simple-right"></i><span>{{('ru'==$lang)?'Главная':''}}{{('en'==$lang)?'Address':''}}{{('tu'==$lang)?'Address':''}}</span>
                                </a>
                            </li>
                            
                      
@include(env('THEME').'.customMenuItemsfut',['items'=>$menu->roots()])
 </ul>
@endif
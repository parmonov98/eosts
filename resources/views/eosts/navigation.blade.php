<?php
    if(!session()->has('lang')){
            session()->put('lang', 'ru');
        }
    $lang = session('lang');

$public = substr($_SERVER['REQUEST_URI'], 1,6);  


?>
@if($menu)
                        <ul class="navbar-nav ml-auto" itemprop="about" itemscope="" itemtype="#">

                            <li class="nav-item {{('ru'==$public)?'active':''}}{{('en'==$public)?'active':''}}{{('tu'==$public)?'active':''}}" itemprop="itemListElement" itemscope=""
                                itemtype="http://schema.org/ItemList">
                                <a href="/{{$lang}}" class="nav-link" itemprop="url">{{('ru'==$lang)?'Главная':''}}{{('en'==$lang)?'Home':''}}{{('tu'==$lang)?'Ev':''}}</a>
                                <meta itemprop="name" content="{{('ru'==$lang)?'Главная':''}}{{('en'==$lang)?'Address':''}}{{('tu'==$lang)?'Address':''}}" />
                            </li>
                            
                      
@include(env('THEME').'.customMenuItems',['items'=>$menu->roots()])
 </ul>
@endif
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pschocke\TelegramLoginWidget\Facades\TelegramLoginWidget;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notifications\ExampleNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;
use Arr;
use App\Notifications\InvoicePaid;

use Gate;

class TelegramController extends Controller
{
    
public function message(Request $request) {
	$d = $request->except('_token');

if(empty($d['name']) && empty($d['number']) && empty($d['email']) && empty($d['package']) && empty($d['text']) ){
	return back()->with(['error' => 'Вы не заполнили всех полей']); 
}

	auth()->user()->notify(new ExampleNotification(json_encode($d)));
	return redirect()->back();
}



}

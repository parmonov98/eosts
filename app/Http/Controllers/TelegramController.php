<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pschocke\TelegramLoginWidget\Facades\TelegramLoginWidget;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notifications\ExampleNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Requ;

use Arr;
use App\Notifications\InvoicePaid;

use Gate;

class TelegramController extends Controller
{
    
public function message(Request $request) {
	$d = $request->except('_token');

if($d['name']==null || $d['number']==null || $d['email']==null || $d['package']==null || $d['text']==null){
	return back()->with(['error' => 'Вы не заполнили всех полей']); 
}

$item = new Requ; $item->name = $d['name']; $item->name = $d['name'];$item->number = $d['number'];$item->email = $d['email'];
$item->package = $d['package'];$item->text = $d['text'];$item->save();

	auth()->user()->notify(new ExampleNotification(json_encode($d)));
	return redirect()->back()->with('success', 'Ваша сообщения отправлено'); 
}



}

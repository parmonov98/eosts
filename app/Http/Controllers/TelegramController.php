<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pschocke\TelegramLoginWidget\Facades\TelegramLoginWidget;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notifications\ExampleNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Requ;
use Validator;
use Arr;
use App\Notifications\InvoicePaid;

use Gate;

class TelegramController extends Controller
{
    
public function message(Request $request) {
	$d = $request->except('_token');

$validator = Validator::make($request->except('_token'), [
				'package' => 'required',
				'name' => 'required',
				'email' => 'required|email',
				'phone' => 'required|min:9|max:17',
				'message' => 'required',
	]);

        if ($validator->fails())
        {
            return redirect()->back()->with(['errors'=>$validator->errors()->all()]);
        }


$item = new Requ; $item->name = $d['name']; $item->name = $d['name'];$item->phone = $d['phone'];$item->email = $d['email'];
$item->package = $d['package'];$item->message = $d['message'];$item->save();

	auth()->user()->notify(new ExampleNotification(json_encode($d)));
	return response()->json(['success'=>'Ваша сообщения отправлено']); 
}




}

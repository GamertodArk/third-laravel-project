<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
	public function newMessage(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'message' => 'required'
		]);
		
		$message = new Message();

		$message->name = $request->name;
		$message->email = $request->email;
		$message->message = $request->message;

		$message->save();

		return redirect('/messages')->with('success', 'Messages Sent Successfully');
	}

	public function getMessages(Request $request)
	{

		$message = Message::all();

		return view('messages', ['messages' => $message]);
	}
}

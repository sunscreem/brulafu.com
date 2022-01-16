<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Mail;

class ContactFormController extends Controller
{
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
			'g-recaptcha-response' => 'required|recaptcha',
		]);

		Mail::to(['rob.cooper@sellonlinedirect.com'])->send(new ContactMessage());

		Mail::to(['lafuvisual@gmail.com'])->send(new ContactMessage());
	}

	// public function sendEmail()
	// {
	// 	# code...
	// }
}

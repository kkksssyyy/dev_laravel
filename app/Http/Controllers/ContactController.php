<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

	public function contact() {
		return view('layouts.base');
	}

	public function confirm(ContactRequest $request) {
		$contact = $request->all();

		$request->session()->regenerateToken();

		return view('layouts.confirm', $contact);
	}

	public function thanks(ContactRequest $request) {
		$contact = $request->all();
		if($request->action === 'back') {
			return redirect()->route('contact')->withInput($contact);
		}

		$request->session()->regenerateToken();

		// Mail::to('hogehoge@gmail.com')->send(new Contact($contact));

		return view('layouts.thanks');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\Thanks;


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

	public function thanks(Request $request) {
		$contact = $request->all();
		if($request->action === 'back') {
			return redirect()->route('contact.contact')->withInput($contact);
		} else {

		// フォームからのリクエストデータ全てを$contentに代入
		$content = $request->all();
		// 変数を受け取らない場合

		Mail::to($content['mail'])->send(new Thanks($content));

		// 変数を受け取る場合
		Mail::to('hogehoge@hogehoge.com')->send(new Contact($content));

		// トークン再生成
                $request->session()->regenerateToken();

		return view('layouts.thanks');
		}
	}
}

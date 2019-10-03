<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function edit() {
		return view('contact.edit');
	}

	public function contact() {
		return view('layouts.base');
	}
}

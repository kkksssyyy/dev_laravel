<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
	return true;
    }

    public function rules()
    {
        return [
		'jobCategory' => 'required',
		'CheckboxGroup2' => 'required',
		'name1' => 'required',
		'name2' => 'required',
		'name3' => 'required',
		'mail' => 'email|confirmed',
		'tel' => 'required',
		'renraku' => 'required',
		'request' => 'required',
        ];
    }

	public function messages()
    {
      return [
	'jobCategory.required' => 'ご希望の職種をお選びください。',
	'CheckboxGroup2.required' => 'お問い合わせ内容をお選びください。',
        'name1.required' => '会社名を入力してください。',
	'name2.required' => 'お名前を入力して下さい。',
	'name3.required' => 'フリガナを入力して下さい。',
	'mail.email' => 'メールアドレスが正しくありません。',
	'mail.confirmed' => '同じメールアドレスを入力して下さい',
	'tel.required' => '電話番号を入力して下さい。',
	'renraku.required' => 'ご連絡方法をお選びください。',
	'request.required' => 'お問い合わせ内容を入力して下さい。',	
      ];
    }
}

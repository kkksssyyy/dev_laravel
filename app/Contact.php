<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacta extends Model
{
	protected $guarded = array('id');

	public static $rules = array(
		'jobCategory' => 'required',
                'CheckboxGroup2' => 'required',
                'name1' => 'required',
                'name2' => 'required',
                'name3' => 'required',
                'mail' => 'email|confirmed',
                'tel' => 'required',
                'renraku' => 'required',
                'request' => 'required',
	);

}

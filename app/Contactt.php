<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactt extends Model
{
	protected $table = 'contactt';

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

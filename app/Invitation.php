<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
	protected $fillable = ['token', 'user_id'];

	public function get_link() {
		return Config::get('app.url') . '/invite/' . $this->token;
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {
	protected $table = 'pessoas';

	protected $fillable = [
		'nome',
		'email',
		'login',
		'status',
	];

	protected $hidden = [
		'created_at',
		'updated_at',
	];
}

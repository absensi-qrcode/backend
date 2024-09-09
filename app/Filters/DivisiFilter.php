<?php

namespace App\Filters;

class DivisiFilter extends Filter {

	protected $allowParameter = [
		'nama' => ['like']
	];
}
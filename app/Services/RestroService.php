<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;

class RestroService
{
	public function userRestroAndTables()
	{
        return Auth::user()
        		->restaurant()
        		->get();
	}
}
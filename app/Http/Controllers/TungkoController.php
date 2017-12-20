<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\Tungko;
use Illuminate\Http\Request;  


class TungkoController extends backendController
{
	public function Tungko()
	{
		return view ('backend.Tungko');
	}
}
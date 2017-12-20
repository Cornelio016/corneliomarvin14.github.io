<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $layout='backend.layout';
    
    protected function Layout()
    {
        if (!is_null($this->layout))
        {
            $this->layout=View::make($this->layout);
        
    }	}
}
<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected $layout='frontend.layout';

    protected function Layout()
    {
        if (!is_null($this->layout))
        {
            $this->layout=View::make($this->layout);
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function css_lib()
    {
    	$css='
    		<link rel="stylesheet" href="/resources/assets/css/general/bootstrap.min.css" />
    		<link rel="stylesheet" href="/resources/assets/css/general/fontawesome.min.css" />
    	';
    	return $css;
    }
    public function js_lib()
    {
    	$js='
    		<script src="/resources/assets/js/general/bootstrap.min.js"></script>
    		<script src="/resources/assets/js/general/jquery.min.js"></script>
    	';
    	return $js;
    }
}

<?php

namespace Modules\FrontEndLayout\Controllers;

use App\Controllers\BaseController;

class Layout extends BaseController
{
	public function index()
	{
        //echo 'testing sukses';
		return view('Modules\FrontEndLayout\Views\layout');
	}
}

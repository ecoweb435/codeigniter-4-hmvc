<?php

namespace Modules\AdminLayout\Controllers;

use App\Controllers\BaseController;

class Layout extends BaseController
{
	public function index()
	{
        $data = [
			'title' => 'Dashboard',
			'seg' => $this->request->uri->getSegments(),
		];
		
		return view('Modules\AdminLayout\Views\layout',$data);
	}
}

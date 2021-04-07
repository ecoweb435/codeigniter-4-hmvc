<?php

namespace Modules\AdminController\Controllers;

use App\Controllers\BaseController;
use Modules\AdminController\Models\Model_controller as MDataController;

class Data_controller extends BaseController
{
	protected $Model_controller;

	public function __construct(){

		$this->Model_controller = new MDataController();

	}

	public function index()
	{
		$controller = $this->Model_controller->find(['nama','controller']);

		$data = [
			'title' => 'Tabel Data Controller',
			'title_sub' => 'Data Controller',
			'seg' => $this->request->uri->getSegments(),
			'controller' => $controller
		];
		
		return view('Modules\AdminController\Views\tabel',$data);
	}
	// CREATE FORM CONTROLLER
	public function form_tambah_controller()
	{
        $data = [
			'title' => 'Tambah Data Controller',
			'title_sub' => 'Form Controller',
			'seg' => $this->request->uri->getSegments(),
		];
		
		return view('Modules\AdminController\Views\tambah',$data);
	}
	// CREATE FORM
	public function save_controller()
	{
		

       dd($this->request->getVar('csrf_token_name'));

	}
	//EDIT FORM CONTROLLER
	public function form_edit_controller()
	{
        $data = [
			'title' => 'Edit Data Controller',
			'title_sub' => 'Form Controller',
			'seg' => $this->request->uri->getSegments(),
		];
		
		return view('Modules\AdminController\Views\edit',$data);
	}
}

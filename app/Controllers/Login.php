<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Login extends BaseController{
	
	public function index(){
		$data = [
					'titulo' => 'Tutlo de prueba',
					'nombre' => 'Daniel',
					'fecha' => '2021-05-11'
				];
		return view('login',$data);	
	}

	public function validarDatos(){
		
		echo json_encode($_POST);
		
	}



}